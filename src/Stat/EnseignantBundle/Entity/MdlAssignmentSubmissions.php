<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignmentSubmissions
 *
 * @ORM\Table(name="mdl_assignment_submissions", indexes={@ORM\Index(name="mdl_assisubm_use2_ix", columns={"userid"}), @ORM\Index(name="mdl_assisubm_mai_ix", columns={"mailed"}), @ORM\Index(name="mdl_assisubm_tim_ix", columns={"timemarked"}), @ORM\Index(name="mdl_assisubm_ass2_ix", columns={"assignment"})})
 * @ORM\Entity
 */
class MdlAssignmentSubmissions
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
     * @ORM\Column(name="assignment", type="bigint", nullable=false)
     */
    private $assignment = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

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
     * @var integer
     *
     * @ORM\Column(name="numfiles", type="bigint", nullable=false)
     */
    private $numfiles = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="data1", type="text", nullable=true)
     */
    private $data1;

    /**
     * @var string
     *
     * @ORM\Column(name="data2", type="text", nullable=true)
     */
    private $data2;

    /**
     * @var integer
     *
     * @ORM\Column(name="grade", type="bigint", nullable=false)
     */
    private $grade = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="submissioncomment", type="text", nullable=false)
     */
    private $submissioncomment;

    /**
     * @var integer
     *
     * @ORM\Column(name="format", type="smallint", nullable=false)
     */
    private $format = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="teacher", type="bigint", nullable=false)
     */
    private $teacher = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemarked", type="bigint", nullable=false)
     */
    private $timemarked = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="mailed", type="boolean", nullable=false)
     */
    private $mailed = '0';



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
     * Set assignment
     *
     * @param integer $assignment
     * @return MdlAssignmentSubmissions
     */
    public function setAssignment($assignment)
    {
        $this->assignment = $assignment;

        return $this;
    }

    /**
     * Get assignment
     *
     * @return integer 
     */
    public function getAssignment()
    {
        return $this->assignment;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlAssignmentSubmissions
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
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlAssignmentSubmissions
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
     * @return MdlAssignmentSubmissions
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
     * Set numfiles
     *
     * @param integer $numfiles
     * @return MdlAssignmentSubmissions
     */
    public function setNumfiles($numfiles)
    {
        $this->numfiles = $numfiles;

        return $this;
    }

    /**
     * Get numfiles
     *
     * @return integer 
     */
    public function getNumfiles()
    {
        return $this->numfiles;
    }

    /**
     * Set data1
     *
     * @param string $data1
     * @return MdlAssignmentSubmissions
     */
    public function setData1($data1)
    {
        $this->data1 = $data1;

        return $this;
    }

    /**
     * Get data1
     *
     * @return string 
     */
    public function getData1()
    {
        return $this->data1;
    }

    /**
     * Set data2
     *
     * @param string $data2
     * @return MdlAssignmentSubmissions
     */
    public function setData2($data2)
    {
        $this->data2 = $data2;

        return $this;
    }

    /**
     * Get data2
     *
     * @return string 
     */
    public function getData2()
    {
        return $this->data2;
    }

    /**
     * Set grade
     *
     * @param integer $grade
     * @return MdlAssignmentSubmissions
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return integer 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set submissioncomment
     *
     * @param string $submissioncomment
     * @return MdlAssignmentSubmissions
     */
    public function setSubmissioncomment($submissioncomment)
    {
        $this->submissioncomment = $submissioncomment;

        return $this;
    }

    /**
     * Get submissioncomment
     *
     * @return string 
     */
    public function getSubmissioncomment()
    {
        return $this->submissioncomment;
    }

    /**
     * Set format
     *
     * @param integer $format
     * @return MdlAssignmentSubmissions
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return integer 
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set teacher
     *
     * @param integer $teacher
     * @return MdlAssignmentSubmissions
     */
    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;

        return $this;
    }

    /**
     * Get teacher
     *
     * @return integer 
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * Set timemarked
     *
     * @param integer $timemarked
     * @return MdlAssignmentSubmissions
     */
    public function setTimemarked($timemarked)
    {
        $this->timemarked = $timemarked;

        return $this;
    }

    /**
     * Get timemarked
     *
     * @return integer 
     */
    public function getTimemarked()
    {
        return $this->timemarked;
    }

    /**
     * Set mailed
     *
     * @param boolean $mailed
     * @return MdlAssignmentSubmissions
     */
    public function setMailed($mailed)
    {
        $this->mailed = $mailed;

        return $this;
    }

    /**
     * Get mailed
     *
     * @return boolean 
     */
    public function getMailed()
    {
        return $this->mailed;
    }
}
