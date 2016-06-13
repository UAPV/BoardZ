<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignGrades
 *
 * @ORM\Table(name="mdl_assign_grades", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_assigrad_assuseatt_uix", columns={"assignment", "userid", "attemptnumber"})}, indexes={@ORM\Index(name="mdl_assigrad_use_ix", columns={"userid"}), @ORM\Index(name="mdl_assigrad_att_ix", columns={"attemptnumber"}), @ORM\Index(name="mdl_assigrad_ass_ix", columns={"assignment"})})
 * @ORM\Entity
 */
class MdlAssignGrades
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
     * @ORM\Column(name="grader", type="bigint", nullable=false)
     */
    private $grader = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $grade = '0.00000';

    /**
     * @var integer
     *
     * @ORM\Column(name="attemptnumber", type="bigint", nullable=false)
     */
    private $attemptnumber = '0';



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
     * @return MdlAssignGrades
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
     * @return MdlAssignGrades
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
     * @return MdlAssignGrades
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
     * @return MdlAssignGrades
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
     * Set grader
     *
     * @param integer $grader
     * @return MdlAssignGrades
     */
    public function setGrader($grader)
    {
        $this->grader = $grader;

        return $this;
    }

    /**
     * Get grader
     *
     * @return integer 
     */
    public function getGrader()
    {
        return $this->grader;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return MdlAssignGrades
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set attemptnumber
     *
     * @param integer $attemptnumber
     * @return MdlAssignGrades
     */
    public function setAttemptnumber($attemptnumber)
    {
        $this->attemptnumber = $attemptnumber;

        return $this;
    }

    /**
     * Get attemptnumber
     *
     * @return integer 
     */
    public function getAttemptnumber()
    {
        return $this->attemptnumber;
    }
}
