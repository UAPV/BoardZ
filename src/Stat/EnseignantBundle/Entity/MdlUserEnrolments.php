<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUserEnrolments
 *
 * @ORM\Table(name="mdl_user_enrolments", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_userenro_enruse_uix", columns={"enrolid", "userid"})}, indexes={@ORM\Index(name="mdl_userenro_enr_ix", columns={"enrolid"}), @ORM\Index(name="mdl_userenro_use_ix", columns={"userid"}), @ORM\Index(name="mdl_userenro_mod_ix", columns={"modifierid"})})
 * @ORM\Entity
 */
class MdlUserEnrolments
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
     * @ORM\Column(name="status", type="bigint", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="enrolid", type="bigint", nullable=false)
     */
    private $enrolid;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestart", type="bigint", nullable=false)
     */
    private $timestart = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timeend", type="bigint", nullable=false)
     */
    private $timeend = '2147483647';

    /**
     * @var integer
     *
     * @ORM\Column(name="modifierid", type="bigint", nullable=false)
     */
    private $modifierid = '0';

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
     * Set status
     *
     * @param integer $status
     * @return MdlUserEnrolments
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set enrolid
     *
     * @param integer $enrolid
     * @return MdlUserEnrolments
     */
    public function setEnrolid($enrolid)
    {
        $this->enrolid = $enrolid;

        return $this;
    }

    /**
     * Get enrolid
     *
     * @return integer 
     */
    public function getEnrolid()
    {
        return $this->enrolid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlUserEnrolments
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
     * Set timestart
     *
     * @param integer $timestart
     * @return MdlUserEnrolments
     */
    public function setTimestart($timestart)
    {
        $this->timestart = $timestart;

        return $this;
    }

    /**
     * Get timestart
     *
     * @return integer 
     */
    public function getTimestart()
    {
        return $this->timestart;
    }

    /**
     * Set timeend
     *
     * @param integer $timeend
     * @return MdlUserEnrolments
     */
    public function setTimeend($timeend)
    {
        $this->timeend = $timeend;

        return $this;
    }

    /**
     * Get timeend
     *
     * @return integer 
     */
    public function getTimeend()
    {
        return $this->timeend;
    }

    /**
     * Set modifierid
     *
     * @param integer $modifierid
     * @return MdlUserEnrolments
     */
    public function setModifierid($modifierid)
    {
        $this->modifierid = $modifierid;

        return $this;
    }

    /**
     * Get modifierid
     *
     * @return integer 
     */
    public function getModifierid()
    {
        return $this->modifierid;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlUserEnrolments
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
     * @return MdlUserEnrolments
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
