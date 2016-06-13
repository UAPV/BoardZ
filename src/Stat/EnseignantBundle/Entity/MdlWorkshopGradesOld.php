<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshopGradesOld
 *
 * @ORM\Table(name="mdl_workshop_grades_old", indexes={@ORM\Index(name="mdl_workgradold_wor_ix", columns={"workshopid"}), @ORM\Index(name="mdl_workgradold_ass_ix", columns={"assessmentid"})})
 * @ORM\Entity
 */
class MdlWorkshopGradesOld
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
     * @ORM\Column(name="workshopid", type="bigint", nullable=false)
     */
    private $workshopid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="assessmentid", type="bigint", nullable=false)
     */
    private $assessmentid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="elementno", type="bigint", nullable=false)
     */
    private $elementno = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="feedback", type="text", nullable=false)
     */
    private $feedback;

    /**
     * @var integer
     *
     * @ORM\Column(name="grade", type="smallint", nullable=false)
     */
    private $grade = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="newplugin", type="string", length=28, nullable=true)
     */
    private $newplugin;

    /**
     * @var integer
     *
     * @ORM\Column(name="newid", type="bigint", nullable=true)
     */
    private $newid;



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
     * Set workshopid
     *
     * @param integer $workshopid
     * @return MdlWorkshopGradesOld
     */
    public function setWorkshopid($workshopid)
    {
        $this->workshopid = $workshopid;

        return $this;
    }

    /**
     * Get workshopid
     *
     * @return integer 
     */
    public function getWorkshopid()
    {
        return $this->workshopid;
    }

    /**
     * Set assessmentid
     *
     * @param integer $assessmentid
     * @return MdlWorkshopGradesOld
     */
    public function setAssessmentid($assessmentid)
    {
        $this->assessmentid = $assessmentid;

        return $this;
    }

    /**
     * Get assessmentid
     *
     * @return integer 
     */
    public function getAssessmentid()
    {
        return $this->assessmentid;
    }

    /**
     * Set elementno
     *
     * @param integer $elementno
     * @return MdlWorkshopGradesOld
     */
    public function setElementno($elementno)
    {
        $this->elementno = $elementno;

        return $this;
    }

    /**
     * Get elementno
     *
     * @return integer 
     */
    public function getElementno()
    {
        return $this->elementno;
    }

    /**
     * Set feedback
     *
     * @param string $feedback
     * @return MdlWorkshopGradesOld
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * Get feedback
     *
     * @return string 
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Set grade
     *
     * @param integer $grade
     * @return MdlWorkshopGradesOld
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
     * Set newplugin
     *
     * @param string $newplugin
     * @return MdlWorkshopGradesOld
     */
    public function setNewplugin($newplugin)
    {
        $this->newplugin = $newplugin;

        return $this;
    }

    /**
     * Get newplugin
     *
     * @return string 
     */
    public function getNewplugin()
    {
        return $this->newplugin;
    }

    /**
     * Set newid
     *
     * @param integer $newid
     * @return MdlWorkshopGradesOld
     */
    public function setNewid($newid)
    {
        $this->newid = $newid;

        return $this;
    }

    /**
     * Get newid
     *
     * @return integer 
     */
    public function getNewid()
    {
        return $this->newid;
    }
}
