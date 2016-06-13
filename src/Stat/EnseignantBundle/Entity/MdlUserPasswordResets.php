<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUserPasswordResets
 *
 * @ORM\Table(name="mdl_user_password_resets", indexes={@ORM\Index(name="mdl_userpassrese_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlUserPasswordResets
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
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="timerequested", type="bigint", nullable=false)
     */
    private $timerequested;

    /**
     * @var integer
     *
     * @ORM\Column(name="timererequested", type="bigint", nullable=false)
     */
    private $timererequested = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=32, nullable=false)
     */
    private $token = '';



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
     * @return MdlUserPasswordResets
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
     * Set timerequested
     *
     * @param integer $timerequested
     * @return MdlUserPasswordResets
     */
    public function setTimerequested($timerequested)
    {
        $this->timerequested = $timerequested;

        return $this;
    }

    /**
     * Get timerequested
     *
     * @return integer 
     */
    public function getTimerequested()
    {
        return $this->timerequested;
    }

    /**
     * Set timererequested
     *
     * @param integer $timererequested
     * @return MdlUserPasswordResets
     */
    public function setTimererequested($timererequested)
    {
        $this->timererequested = $timererequested;

        return $this;
    }

    /**
     * Get timererequested
     *
     * @return integer 
     */
    public function getTimererequested()
    {
        return $this->timererequested;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return MdlUserPasswordResets
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
}
