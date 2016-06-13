<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlSessions
 *
 * @ORM\Table(name="mdl_sessions", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_sess_sid_uix", columns={"sid"})}, indexes={@ORM\Index(name="mdl_sess_sta_ix", columns={"state"}), @ORM\Index(name="mdl_sess_tim_ix", columns={"timecreated"}), @ORM\Index(name="mdl_sess_tim2_ix", columns={"timemodified"}), @ORM\Index(name="mdl_sess_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlSessions
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
     * @ORM\Column(name="state", type="bigint", nullable=false)
     */
    private $state = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sid", type="string", length=128, nullable=false)
     */
    private $sid = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="sessdata", type="text", nullable=true)
     */
    private $sessdata;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;

    /**
     * @var string
     *
     * @ORM\Column(name="firstip", type="string", length=45, nullable=true)
     */
    private $firstip;

    /**
     * @var string
     *
     * @ORM\Column(name="lastip", type="string", length=45, nullable=true)
     */
    private $lastip;



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
     * Set state
     *
     * @param integer $state
     * @return MdlSessions
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set sid
     *
     * @param string $sid
     * @return MdlSessions
     */
    public function setSid($sid)
    {
        $this->sid = $sid;

        return $this;
    }

    /**
     * Get sid
     *
     * @return string 
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlSessions
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
     * Set sessdata
     *
     * @param string $sessdata
     * @return MdlSessions
     */
    public function setSessdata($sessdata)
    {
        $this->sessdata = $sessdata;

        return $this;
    }

    /**
     * Get sessdata
     *
     * @return string 
     */
    public function getSessdata()
    {
        return $this->sessdata;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlSessions
     */
    public function setTimecreated($timecreated)
    {
        $this->timecreated = $timecreated;

        return $this;
    }

    /**
     * Get timecreated
     *
     * @return integer 
     */
    public function getTimecreated()
    {
        return $this->timecreated;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlSessions
     */
    public function setTimemodified($timemodified)
    {
        $this->timemodified = $timemodified;

        return $this;
    }

    /**
     * Get timemodified
     *
     * @return integer 
     */
    public function getTimemodified()
    {
        return $this->timemodified;
    }

    /**
     * Set firstip
     *
     * @param string $firstip
     * @return MdlSessions
     */
    public function setFirstip($firstip)
    {
        $this->firstip = $firstip;

        return $this;
    }

    /**
     * Get firstip
     *
     * @return string 
     */
    public function getFirstip()
    {
        return $this->firstip;
    }

    /**
     * Set lastip
     *
     * @param string $lastip
     * @return MdlSessions
     */
    public function setLastip($lastip)
    {
        $this->lastip = $lastip;

        return $this;
    }

    /**
     * Get lastip
     *
     * @return string 
     */
    public function getLastip()
    {
        return $this->lastip;
    }
}
