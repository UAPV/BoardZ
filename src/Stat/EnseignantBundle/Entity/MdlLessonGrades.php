<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLessonGrades
 *
 * @ORM\Table(name="mdl_lesson_grades", indexes={@ORM\Index(name="mdl_lessgrad_use_ix", columns={"userid"}), @ORM\Index(name="mdl_lessgrad_les_ix", columns={"lessonid"})})
 * @ORM\Entity
 */
class MdlLessonGrades
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
     * @ORM\Column(name="lessonid", type="bigint", nullable=false)
     */
    private $lessonid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="grade", type="float", precision=10, scale=0, nullable=false)
     */
    private $grade = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="late", type="smallint", nullable=false)
     */
    private $late = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="completed", type="bigint", nullable=false)
     */
    private $completed = '0';



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
     * Set lessonid
     *
     * @param integer $lessonid
     * @return MdlLessonGrades
     */
    public function setLessonid($lessonid)
    {
        $this->lessonid = $lessonid;

        return $this;
    }

    /**
     * Get lessonid
     *
     * @return integer 
     */
    public function getLessonid()
    {
        return $this->lessonid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlLessonGrades
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
     * Set grade
     *
     * @param float $grade
     * @return MdlLessonGrades
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return float 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set late
     *
     * @param integer $late
     * @return MdlLessonGrades
     */
    public function setLate($late)
    {
        $this->late = $late;

        return $this;
    }

    /**
     * Get late
     *
     * @return integer 
     */
    public function getLate()
    {
        return $this->late;
    }

    /**
     * Set completed
     *
     * @param integer $completed
     * @return MdlLessonGrades
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;

        return $this;
    }

    /**
     * Get completed
     *
     * @return integer 
     */
    public function getCompleted()
    {
        return $this->completed;
    }
}
