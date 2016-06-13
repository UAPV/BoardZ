<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseModulesCompletion
 *
 * @ORM\Table(name="mdl_course_modules_completion", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_courmoducomp_usecou_uix", columns={"userid", "coursemoduleid"})}, indexes={@ORM\Index(name="mdl_courmoducomp_cou_ix", columns={"coursemoduleid"})})
 * @ORM\Entity
 */
class MdlCourseModulesCompletion
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
     * @ORM\Column(name="coursemoduleid", type="bigint", nullable=false)
     */
    private $coursemoduleid;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="completionstate", type="boolean", nullable=false)
     */
    private $completionstate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="viewed", type="boolean", nullable=true)
     */
    private $viewed;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;



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
     * Set coursemoduleid
     *
     * @param integer $coursemoduleid
     * @return MdlCourseModulesCompletion
     */
    public function setCoursemoduleid($coursemoduleid)
    {
        $this->coursemoduleid = $coursemoduleid;

        return $this;
    }

    /**
     * Get coursemoduleid
     *
     * @return integer 
     */
    public function getCoursemoduleid()
    {
        return $this->coursemoduleid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlCourseModulesCompletion
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
     * Set completionstate
     *
     * @param boolean $completionstate
     * @return MdlCourseModulesCompletion
     */
    public function setCompletionstate($completionstate)
    {
        $this->completionstate = $completionstate;

        return $this;
    }

    /**
     * Get completionstate
     *
     * @return boolean 
     */
    public function getCompletionstate()
    {
        return $this->completionstate;
    }

    /**
     * Set viewed
     *
     * @param boolean $viewed
     * @return MdlCourseModulesCompletion
     */
    public function setViewed($viewed)
    {
        $this->viewed = $viewed;

        return $this;
    }

    /**
     * Get viewed
     *
     * @return boolean 
     */
    public function getViewed()
    {
        return $this->viewed;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlCourseModulesCompletion
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
