<?php

namespace Dosi\AuthBundle\Security\Core\Authentication\Provider;

use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

use Dosi\AuthBundle\Ldap\Manager\LdapManagerUserInterface;
use Dosi\AuthBundle\Security\Core\User\LdapUser;

/**
 * LDAP User Provider
 * 
 */
class LdapUserProvider implements UserProviderInterface
{
    /**
     * @var \Dosi\AuthBundle\Ldap\Manager\LdapManagerUserInterface
     */
    private $ldapManager;

    /**
     * @var string
     */
    private $bindUsernameBefore;

    /**
     * Constructor
     *
     * @param \Dosi\AuthBundle\Ldap\Manager\LdapManagerUserInterface $ldapManager
     * @param string $bindUsernameBefore
     */
    public function __construct(LdapManagerUserInterface $ldapManager, $bindUsernameBefore = false)
    {
        $this->ldapManager = $ldapManager;
        $this->bindUsernameBefore = $bindUsernameBefore;
    }

    /**
     * {@inheritdoc}
     */
    public function loadUserByUsername($username)
    {
        // Throw the exception if the username is not provided.
        if (empty($username)) {
            throw new UsernameNotFoundException('The username is not provided.');
        }

        if (true === $this->bindUsernameBefore) {
            $ldapUser = $this->simpleUser($username);
        } else {
            $ldapUser = $this->anonymousSearch($username);
        }
        
        
        return $ldapUser;
    }

    /**
     * {@inheritdoc}
     */
    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof LdapUser) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    /**
     * {@inheritdoc}
     */
    public function supportsClass($class)
    {
        return $class === 'Dosi\AuthBundle\Security\Core\User\LdapUser';
    }

    private function simpleUser($username)
    {
        $ldapUser = new LdapUser();
        $ldapUser->setUsername($username);

        return $ldapUser;
    }

    private function anonymousSearch($username)
    {
        // Throw the exception if the username is not found.
        if(!$this->ldapManager->exists($username)) {
            throw new UsernameNotFoundException(sprintf('User "%s" not found', $username));
        }

        $lm = $this->ldapManager
            ->setUsername($username);

        $ldapUser = new LdapUser();

        $ldapUser
            ->setUsername($lm->getUsername())
            ->setEmail($lm->getEmail())
            ->setDn($lm->getDn())
            ->setAttributes($lm->getAttributes())
            ;        

        $ldapUserAttributes = array();
        $ldapUserAttributes = $ldapUser->getAttributes();
        
        // Gives users rights.
        if(strstr($ldapUserAttributes["supannaffectation"], "D.O.S.I.")) {
            $ldapUser->addRole('ROLE_ADMIN');
        }
        else {
            $ldapUser->addRole('ROLE_USER');
        }            
            
        return $ldapUser;
    }
}
