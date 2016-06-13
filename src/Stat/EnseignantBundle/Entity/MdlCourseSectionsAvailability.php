<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseSectionsAvailability
 *
 * @ORM\Table(name="mdl_course_sections_availability", indexes={@ORM\Index(name="mdl_coursectavai_cou_ix", columns={"coursesectionid"}), @ORM\Index(name="mdl_coursectavai_sou_ix", columns={"sourcecmid"}), @ORM\Index(name="mdl_coursectavai_gra_ix", columns={"gradeitemid"})})
 * @ORM\Entity
 */
class MdlCourseSectionsAvailability
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
     * @ORM\Column(name="coursesectionid", type="bigint", nullable=false)
     */
    private $coursesectionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="sourcecmid", type="bigint", nullable=true)
     */
    private $sourcecmid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="requiredcompletion", type="boolean", nullable=true)
     */
    private $requiredcompletion;

    /**
     * @var integer
     *
     * @ORM\Column(name="gradeitemid", type="bigint", nullable=true)
     */
    private $gradeitemid;

    /**
     * @var string
     *
     * @ORM\Column(name="grademin", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $grademin;

    /**
     * @var string
     *
     * @ORM\Column(name="grademax", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $grademax;



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
     * Set coursesectionid
     *
     * @param integer $coursesectionid
     * @return MdlCourseSectionsAvailability
     */
    public function setCoursesectionid($coursesectionid)
    {
        $this->coursesectionid = $coursesectionid;

        return $this;
    }

    /**
     * Get coursesectionid
     *
     * @return integer 
     */
    public function getCoursesectionid()
    {
        return $this->coursesectionid;
    }

    /**
     * Set sourcecmid
     *
     * @param integer $sourcecmid
     * @return MdlCourseSectionsAvailability
     */
    public function setSourcecmid($sourcecmid)
    {
        $this->sourcecmid = $sourcecmid;

        return $this;
    }

    /**
     * Get sourcecmid
     *
     * @return integer 
     */
    public function getSourcecmid()
    {
        return $this->sourcecmid;
    }

    /**
     * Set requiredcompletion
     *
     * @param boolean $requiredcompletion
     * @return MdlCourseSectionsAvailability
     */
    public function setRequiredcompletion($requiredcompletion)
    {
        $this->requiredcompletion = $requiredcompletion;

        return $this;
    }

    /**
     * Get requiredcompletion
     *
     * @return boolean 
     */
    public function getRequiredcompletion()
    {
        return $this->requiredcompletion;
    }

    /**
     * Set gradeitemid
     *
     * @param integer $gradeitemid
     * @return MdlCourseSectionsAvailability
     */
    public function setGradeitemid($gradeitemid)
    {
        $this->gradeitemid = $gradeitemid;

        return $this;
    }

    /**
     * Get gradeitemid
     *
     * @return integer 
     */
    public function getGradeitemid()
    {
        return $this->gradeitemid;
    }

    /**
     * Set grademin
     *
     * @param string $grademin
     * @return MdlCourseSectionsAvailability
     */
    public function setGrademin($grademin)
    {
        $this->grademin = $grademin;

        return $this;
    }

    /**
     * Get grademin
     *
     * @return string 
     */
    public function getGrademin()
    {
        return $this->grademin;
    }

    /**
     * Set grademax
     *
     * @param string $grademax
     * @return MdlCourseSectionsAvailability
     */
    public function setGrademax($grademax)
    {
        $this->grademax = $grademax;

        return $this;
    }

    /**
     * Get grademax
     *
     * @return string 
     */
    public function getGrademax()
    {
        return $this->grademax;
    }
}
