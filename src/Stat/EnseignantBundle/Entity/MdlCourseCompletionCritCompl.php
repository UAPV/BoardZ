<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseCompletionCritCompl
 *
 * @ORM\Table(name="mdl_course_completion_crit_compl", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_courcompcritcomp_useco_uix", columns={"userid", "course", "criteriaid"})}, indexes={@ORM\Index(name="mdl_courcompcritcomp_use_ix", columns={"userid"}), @ORM\Index(name="mdl_courcompcritcomp_cou_ix", columns={"course"}), @ORM\Index(name="mdl_courcompcritcomp_cri_ix", columns={"criteriaid"}), @ORM\Index(name="mdl_courcompcritcomp_tim_ix", columns={"timecompleted"})})
 * @ORM\Entity
 */
class MdlCourseCompletionCritCompl
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
     * @ORM\Column(name="criteriaid", type="bigint", nullable=false)
     */
    private $criteriaid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="gradefinal", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $gradefinal;

    /**
     * @var integer
     *
     * @ORM\Column(name="unenroled", type="bigint", nullable=true)
     */
    private $unenroled;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecompleted", type="bigint", nullable=true)
     */
    private $timecompleted;



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
     * @return MdlCourseCompletionCritCompl
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
     * @return MdlCourseCompletionCritCompl
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
     * Set criteriaid
     *
     * @param integer $criteriaid
     * @return MdlCourseCompletionCritCompl
     */
    public function setCriteriaid($criteriaid)
    {
        $this->criteriaid = $criteriaid;

        return $this;
    }

    /**
     * Get criteriaid
     *
     * @return integer 
     */
    public function getCriteriaid()
    {
        return $this->criteriaid;
    }

    /**
     * Set gradefinal
     *
     * @param string $gradefinal
     * @return MdlCourseCompletionCritCompl
     */
    public function setGradefinal($gradefinal)
    {
        $this->gradefinal = $gradefinal;

        return $this;
    }

    /**
     * Get gradefinal
     *
     * @return string 
     */
    public function getGradefinal()
    {
        return $this->gradefinal;
    }

    /**
     * Set unenroled
     *
     * @param integer $unenroled
     * @return MdlCourseCompletionCritCompl
     */
    public function setUnenroled($unenroled)
    {
        $this->unenroled = $unenroled;

        return $this;
    }

    /**
     * Get unenroled
     *
     * @return integer 
     */
    public function getUnenroled()
    {
        return $this->unenroled;
    }

    /**
     * Set timecompleted
     *
     * @param integer $timecompleted
     * @return MdlCourseCompletionCritCompl
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
}
