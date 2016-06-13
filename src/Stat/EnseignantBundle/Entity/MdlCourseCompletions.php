<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseCompletions
 *
 * @ORM\Table(name="mdl_course_completions", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_courcomp_usecou_uix", columns={"userid", "course"})}, indexes={@ORM\Index(name="mdl_courcomp_use_ix", columns={"userid"}), @ORM\Index(name="mdl_courcomp_cou_ix", columns={"course"}), @ORM\Index(name="mdl_courcomp_tim_ix", columns={"timecompleted"})})
 * @ORM\Entity
 */
class MdlCourseCompletions
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
     * @ORM\Column(name="course", type="bigint", nullable=false)
     */
    private $course = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timeenrolled", type="bigint", nullable=false)
     */
    private $timeenrolled = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timestarted", type="bigint", nullable=false)
     */
    private $timestarted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timecompleted", type="bigint", nullable=true)
     */
    private $timecompleted;

    /**
     * @var integer
     *
     * @ORM\Column(name="reaggregate", type="bigint", nullable=false)
     */
    private $reaggregate = '0';



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
     * @return MdlCourseCompletions
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
     * Set course
     *
     * @param integer $course
     * @return MdlCourseCompletions
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
     * Set timeenrolled
     *
     * @param integer $timeenrolled
     * @return MdlCourseCompletions
     */
    public function setTimeenrolled($timeenrolled)
    {
        $this->timeenrolled = $timeenrolled;

        return $this;
    }

    /**
     * Get timeenrolled
     *
     * @return integer 
     */
    public function getTimeenrolled()
    {
        return $this->timeenrolled;
    }

    /**
     * Set timestarted
     *
     * @param integer $timestarted
     * @return MdlCourseCompletions
     */
    public function setTimestarted($timestarted)
    {
        $this->timestarted = $timestarted;

        return $this;
    }

    /**
     * Get timestarted
     *
     * @return integer 
     */
    public function getTimestarted()
    {
        return $this->timestarted;
    }

    /**
     * Set timecompleted
     *
     * @param integer $timecompleted
     * @return MdlCourseCompletions
     */
    public function setTimecompleted($timecompleted)
    {
        $this->timecompleted = $timecompleted;

        return $this;
    }

    /**
     * Get timecompleted
     *
     * @return integer 
     */
    public function getTimecompleted()
    {
        return $this->timecompleted;
    }

    /**
     * Set reaggregate
     *
     * @param integer $reaggregate
     * @return MdlCourseCompletions
     */
    public function setReaggregate($reaggregate)
    {
        $this->reaggregate = $reaggregate;

        return $this;
    }

    /**
     * Get reaggregate
     *
     * @return integer 
     */
    public function getReaggregate()
    {
        return $this->reaggregate;
    }
}
