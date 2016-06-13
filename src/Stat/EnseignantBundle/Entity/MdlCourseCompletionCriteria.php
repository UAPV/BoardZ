<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseCompletionCriteria
 *
 * @ORM\Table(name="mdl_course_completion_criteria", indexes={@ORM\Index(name="mdl_courcompcrit_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlCourseCompletionCriteria
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
     * @ORM\Column(name="course", type="bigint", nullable=false)
     */
    private $course = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="criteriatype", type="bigint", nullable=false)
     */
    private $criteriatype = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=100, nullable=true)
     */
    private $module;

    /**
     * @var integer
     *
     * @ORM\Column(name="moduleinstance", type="bigint", nullable=true)
     */
    private $moduleinstance;

    /**
     * @var integer
     *
     * @ORM\Column(name="courseinstance", type="bigint", nullable=true)
     */
    private $courseinstance;

    /**
     * @var integer
     *
     * @ORM\Column(name="enrolperiod", type="bigint", nullable=true)
     */
    private $enrolperiod;

    /**
     * @var integer
     *
     * @ORM\Column(name="timeend", type="bigint", nullable=true)
     */
    private $timeend;

    /**
     * @var string
     *
     * @ORM\Column(name="gradepass", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $gradepass;

    /**
     * @var integer
     *
     * @ORM\Column(name="role", type="bigint", nullable=true)
     */
    private $role;



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
     * Set course
     *
     * @param integer $course
     * @return MdlCourseCompletionCriteria
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return integer 
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set criteriatype
     *
     * @param integer $criteriatype
     * @return MdlCourseCompletionCriteria
     */
    public function setCriteriatype($criteriatype)
    {
        $this->criteriatype = $criteriatype;

        return $this;
    }

    /**
     * Get criteriatype
     *
     * @return integer 
     */
    public function getCriteriatype()
    {
        return $this->criteriatype;
    }

    /**
     * Set module
     *
     * @param string $module
     * @return MdlCourseCompletionCriteria
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set moduleinstance
     *
     * @param integer $moduleinstance
     * @return MdlCourseCompletionCriteria
     */
    public function setModuleinstance($moduleinstance)
    {
        $this->moduleinstance = $moduleinstance;

        return $this;
    }

    /**
     * Get moduleinstance
     *
     * @return integer 
     */
    public function getModuleinstance()
    {
        return $this->moduleinstance;
    }

    /**
     * Set courseinstance
     *
     * @param integer $courseinstance
     * @return MdlCourseCompletionCriteria
     */
    public function setCourseinstance($courseinstance)
    {
        $this->courseinstance = $courseinstance;

        return $this;
    }

    /**
     * Get courseinstance
     *
     * @return integer 
     */
    public function getCourseinstance()
    {
        return $this->courseinstance;
    }

    /**
     * Set enrolperiod
     *
     * @param integer $enrolperiod
     * @return MdlCourseCompletionCriteria
     */
    public function setEnrolperiod($enrolperiod)
    {
        $this->enrolperiod = $enrolperiod;

        return $this;
    }

    /**
     * Get enrolperiod
     *
     * @return integer 
     */
    public function getEnrolperiod()
    {
        return $this->enrolperiod;
    }

    /**
     * Set timeend
     *
     * @param integer $timeend
     * @return MdlCourseCompletionCriteria
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
     * Set gradepass
     *
     * @param string $gradepass
     * @return MdlCourseCompletionCriteria
     */
    public function setGradepass($gradepass)
    {
        $this->gradepass = $gradepass;

        return $this;
    }

    /**
     * Get gradepass
     *
     * @return string 
     */
    public function getGradepass()
    {
        return $this->gradepass;
    }

    /**
     * Set role
     *
     * @param integer $role
     * @return MdlCourseCompletionCriteria
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return integer 
     */
    public function getRole()
    {
        return $this->role;
    }
}
