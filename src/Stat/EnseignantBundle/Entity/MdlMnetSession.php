<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlMnetSession
 *
 * @ORM\Table(name="mdl_mnet_session", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_mnetsess_tok_uix", columns={"token"})})
 * @ORM\Entity
 */
class MdlMnetSession
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
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=100, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=40, nullable=false)
     */
    private $token = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="mnethostid", type="bigint", nullable=false)
     */
    private $mnethostid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="useragent", type="string", length=40, nullable=false)
     */
    private $useragent = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="confirm_timeout", type="bigint", nullable=false)
     */
    private $confirmTimeout = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=40, nullable=false)
     */
    private $sessionId = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="expires", type="bigint", nullable=false)
     */
    private $expires = '0';



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
     * Set userid
     *
     * @param integer $userid
     * @return MdlMnetSession
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return MdlMnetSession
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return MdlMnetSession
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
     * Set mnethostid
     *
     * @param integer $mnethostid
     * @return MdlMnetSession
     */
    public function setMnethostid($mnethostid)
    {
        $this->mnethostid = $mnethostid;

        return $this;
    }

    /**
     * Get mnethostid
     *
     * @return integer 
     */
    public function getMnethostid()
    {
        return $this->mnethostid;
    }

    /**
     * Set useragent
     *
     * @param string $useragent
     * @return MdlMnetSession
     */
    public function setUseragent($useragent)
    {
        $this->useragent = $useragent;

        return $this;
    }

    /**
     * Get useragent
     *
     * @return string 
     */
    public function getUseragent()
    {
        return $this->useragent;
    }

    /**
     * Set confirmTimeout
     *
     * @param integer $confirmTimeout
     * @return MdlMnetSession
     */
    public function setConfirmTimeout($confirmTimeout)
    {
        $this->confirmTimeout = $confirmTimeout;

        return $this;
    }

    /**
     * Get confirmTimeout
     *
     * @return integer 
     */
    public function getConfirmTimeout()
    {
        return $this->confirmTimeout;
    }

    /**
     * Set sessionId
     *
     * @param string $sessionId
     * @return MdlMnetSession
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId
     *
     * @return string 
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set expires
     *
     * @param integer $expires
     * @return MdlMnetSession
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;

        return $this;
    }

    /**
     * Get expires
     *
     * @return integer 
     */
    public function getExpires()
    {
        return $this->expires;
    }
}
