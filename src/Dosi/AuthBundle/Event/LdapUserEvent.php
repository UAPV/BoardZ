<?php

namespace Dosi\AuthBundle\Event;
use Symfony\Component\EventDispatcher\Event;
use Dosi\AuthBundle\Security\Core\User\LdapUser;

class LdapUserEvent extends Event
{ 
    private $user;

    public function __construct(LdapUser $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }
}
