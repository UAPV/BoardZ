<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlRegistrationHubs
 *
 * @ORM\Table(name="mdl_registration_hubs")
 * @ORM\Entity
 */
class MdlRegistrationHubs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false)
     */
    private $token = '';

    /**
     * @var string
     *
     * @ORM\Column(name="hubname", type="string", length=255, nullable=false)
     */
    private $hubname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="huburl", type="string", length=255, nullable=false)
     */
    private $huburl = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="confirmed", type="boolean", nullable=false)
     */
    private $confirmed = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="secret", type="string", length=255, nullable=true)
     */
    private $secret;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return MdlRegistrationHubs
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set hubname
     *
     * @param string $hubname
     * @return MdlRegistrationHubs
     */
    public function setHubname($hubname)
    {
        $this->hubname = $hubname;

        return $this;
    }

    /**
     * Get hubname
     *
     * @return string 
     */
    public function getHubname()
    {
        return $this->hubname;
    }

    /**
     * Set huburl
     *
     * @param string $huburl
     * @return MdlRegistrationHubs
     */
    public function setHuburl($huburl)
    {
        $this->huburl = $huburl;

        return $this;
    }

    /**
     * Get huburl
     *
     * @return string 
     */
    public function getHuburl()
    {
        return $this->huburl;
    }

    /**
     * Set confirmed
     *
     * @param boolean $confirmed
     * @return MdlRegistrationHubs
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    /**
     * Get confirmed
     *
     * @return boolean 
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * Set secret
     *
     * @param string $secret
     * @return MdlRegistrationHubs
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get secret
     *
     * @return string 
     */
    public function getSecret()
    {
        return $this->secret;
    }
}
