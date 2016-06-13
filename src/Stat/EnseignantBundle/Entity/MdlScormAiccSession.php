<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlScormAiccSession
 *
 * @ORM\Table(name="mdl_scorm_aicc_session", indexes={@ORM\Index(name="mdl_scoraiccsess_sco_ix", columns={"scormid"}), @ORM\Index(name="mdl_scoraiccsess_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlScormAiccSession
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
     * @var integer
     *
     * @ORM\Column(name="scormid", type="bigint", nullable=false)
     */
    private $scormid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="hacpsession", type="string", length=255, nullable=false)
     */
    private $hacpsession = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="scoid", type="bigint", nullable=true)
     */
    private $scoid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="scormmode", type="string", length=50, nullable=true)
     */
    private $scormmode;

    /**
     * @var string
     *
     * @ORM\Column(name="scormstatus", type="string", length=255, nullable=true)
     */
    private $scormstatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="attempt", type="bigint", nullable=true)
     */
    private $attempt;

    /**
     * @var string
     *
     * @ORM\Column(name="lessonstatus", type="string", length=255, nullable=true)
     */
    private $lessonstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="sessiontime", type="string", length=255, nullable=true)
     */
    private $sessiontime;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';



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
     * @return MdlScormAiccSession
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
     * Set scormid
     *
     * @param integer $scormid
     * @return MdlScormAiccSession
     */
    public function setScormid($scormid)
    {
        $this->scormid = $scormid;

        return $this;
    }

    /**
     * Get scormid
     *
     * @return integer 
     */
    public function getScormid()
    {
        return $this->scormid;
    }

    /**
     * Set hacpsession
     *
     * @param string $hacpsession
     * @return MdlScormAiccSession
     */
    public function setHacpsession($hacpsession)
    {
        $this->hacpsession = $hacpsession;

        return $this;
    }

    /**
     * Get hacpsession
     *
     * @return string 
     */
    public function getHacpsession()
    {
        return $this->hacpsession;
    }

    /**
     * Set scoid
     *
     * @param integer $scoid
     * @return MdlScormAiccSession
     */
    public function setScoid($scoid)
    {
        $this->scoid = $scoid;

        return $this;
    }

    /**
     * Get scoid
     *
     * @return integer 
     */
    public function getScoid()
    {
        return $this->scoid;
    }

    /**
     * Set scormmode
     *
     * @param string $scormmode
     * @return MdlScormAiccSession
     */
    public function setScormmode($scormmode)
    {
        $this->scormmode = $scormmode;

        return $this;
    }

    /**
     * Get scormmode
     *
     * @return string 
     */
    public function getScormmode()
    {
        return $this->scormmode;
    }

    /**
     * Set scormstatus
     *
     * @param string $scormstatus
     * @return MdlScormAiccSession
     */
    public function setScormstatus($scormstatus)
    {
        $this->scormstatus = $scormstatus;

        return $this;
    }

    /**
     * Get scormstatus
     *
     * @return string 
     */
    public function getScormstatus()
    {
        return $this->scormstatus;
    }

    /**
     * Set attempt
     *
     * @param integer $attempt
     * @return MdlScormAiccSession
     */
    public function setAttempt($attempt)
    {
        $this->attempt = $attempt;

        return $this;
    }

    /**
     * Get attempt
     *
     * @return integer 
     */
    public function getAttempt()
    {
        return $this->attempt;
    }

    /**
     * Set lessonstatus
     *
     * @param string $lessonstatus
     * @return MdlScormAiccSession
     */
    public function setLessonstatus($lessonstatus)
    {
        $this->lessonstatus = $lessonstatus;

        return $this;
    }

    /**
     * Get lessonstatus
     *
     * @return string 
     */
    public function getLessonstatus()
    {
        return $this->lessonstatus;
    }

    /**
     * Set sessiontime
     *
     * @param string $sessiontime
     * @return MdlScormAiccSession
     */
    public function setSessiontime($sessiontime)
    {
        $this->sessiontime = $sessiontime;

        return $this;
    }

    /**
     * Get sessiontime
     *
     * @return string 
     */
    public function getSessiontime()
    {
        return $this->sessiontime;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlScormAiccSession
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
     * @return MdlScormAiccSession
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
}
