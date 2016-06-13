<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlEnrolFlatfile
 *
 * @ORM\Table(name="mdl_enrol_flatfile", indexes={@ORM\Index(name="mdl_enroflat_cou_ix", columns={"courseid"}), @ORM\Index(name="mdl_enroflat_use_ix", columns={"userid"}), @ORM\Index(name="mdl_enroflat_rol_ix", columns={"roleid"})})
 * @ORM\Entity
 */
class MdlEnrolFlatfile
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
     * @ORM\Column(name="action", type="string", length=30, nullable=false)
     */
    private $action = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="roleid", type="bigint", nullable=false)
     */
    private $roleid;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="courseid", type="bigint", nullable=false)
     */
    private $courseid;

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
    private $timeend = '0';

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
     * Set action
     *
     * @param string $action
     * @return MdlEnrolFlatfile
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set roleid
     *
     * @param integer $roleid
     * @return MdlEnrolFlatfile
     */
    public function setRoleid($roleid)
    {
        $this->roleid = $roleid;

        return $this;
    }

    /**
     * Get roleid
     *
     * @return integer 
     */
    public function getRoleid()
    {
        return $this->roleid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlEnrolFlatfile
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
     * Set courseid
     *
     * @param integer $courseid
     * @return MdlEnrolFlatfile
     */
    public function setCourseid($courseid)
    {
        $this->courseid = $courseid;

        return $this;
    }

    /**
     * Get courseid
     *
     * @return integer 
     */
    public function getCourseid()
    {
        return $this->courseid;
    }

    /**
     * Set timestart
     *
     * @param integer $timestart
     * @return MdlEnrolFlatfile
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
     * @return MdlEnrolFlatfile
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
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlEnrolFlatfile
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
