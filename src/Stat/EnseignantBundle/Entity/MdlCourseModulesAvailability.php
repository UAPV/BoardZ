<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseModulesAvailability
 *
 * @ORM\Table(name="mdl_course_modules_availability", indexes={@ORM\Index(name="mdl_courmoduavai_cou_ix", columns={"coursemoduleid"}), @ORM\Index(name="mdl_courmoduavai_sou_ix", columns={"sourcecmid"}), @ORM\Index(name="mdl_courmoduavai_gra_ix", columns={"gradeitemid"})})
 * @ORM\Entity
 */
class MdlCourseModulesAvailability
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
     * Set coursemoduleid
     *
     * @param integer $coursemoduleid
     * @return MdlCourseModulesAvailability
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
     * Set sourcecmid
     *
     * @param integer $sourcecmid
     * @return MdlCourseModulesAvailability
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
     * @return MdlCourseModulesAvailability
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
     * @return MdlCourseModulesAvailability
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
     * @return MdlCourseModulesAvailability
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
     * @return MdlCourseModulesAvailability
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
