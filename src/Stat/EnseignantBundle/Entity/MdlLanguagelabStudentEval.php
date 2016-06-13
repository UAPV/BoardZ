<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLanguagelabStudentEval
 *
 * @ORM\Table(name="mdl_languagelab_student_eval", indexes={@ORM\Index(name="mdl_langstudeval_lan_ix", columns={"languagelab"})})
 * @ORM\Entity
 */
class MdlLanguagelabStudentEval
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
     * @ORM\Column(name="languagelab", type="bigint", nullable=false)
     */
    private $languagelab = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="correctionnotes", type="text", nullable=true)
     */
    private $correctionnotes;

    /**
     * @var integer
     *
     * @ORM\Column(name="grade", type="bigint", nullable=true)
     */
    private $grade;

    /**
     * @var integer
     *
     * @ORM\Column(name="teacher", type="bigint", nullable=true)
     */
    private $teacher = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemarked", type="bigint", nullable=true)
     */
    private $timemarked = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=true)
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
     * Set languagelab
     *
     * @param integer $languagelab
     * @return MdlLanguagelabStudentEval
     */
    public function setLanguagelab($languagelab)
    {
        $this->languagelab = $languagelab;

        return $this;
    }

    /**
     * Get languagelab
     *
     * @return integer 
     */
    public function getLanguagelab()
    {
        return $this->languagelab;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlLanguagelabStudentEval
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
     * Set correctionnotes
     *
     * @param string $correctionnotes
     * @return MdlLanguagelabStudentEval
     */
    public function setCorrectionnotes($correctionnotes)
    {
        $this->correctionnotes = $correctionnotes;

        return $this;
    }

    /**
     * Get correctionnotes
     *
     * @return string 
     */
    public function getCorrectionnotes()
    {
        return $this->correctionnotes;
    }

    /**
     * Set grade
     *
     * @param integer $grade
     * @return MdlLanguagelabStudentEval
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
     * Set teacher
     *
     * @param integer $teacher
     * @return MdlLanguagelabStudentEval
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
     * @return MdlLanguagelabStudentEval
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
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlLanguagelabStudentEval
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
     * @return MdlLanguagelabStudentEval
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
