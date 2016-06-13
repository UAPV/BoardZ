<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshopGrades
 *
 * @ORM\Table(name="mdl_workshop_grades", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_workgrad_assstrdim_uix", columns={"assessmentid", "strategy", "dimensionid"})}, indexes={@ORM\Index(name="mdl_workgrad_ass_ix", columns={"assessmentid"})})
 * @ORM\Entity
 */
class MdlWorkshopGrades
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
     * @ORM\Column(name="assessmentid", type="bigint", nullable=false)
     */
    private $assessmentid;

    /**
     * @var string
     *
     * @ORM\Column(name="strategy", type="string", length=30, nullable=false)
     */
    private $strategy = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="dimensionid", type="bigint", nullable=false)
     */
    private $dimensionid;

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $grade;

    /**
     * @var string
     *
     * @ORM\Column(name="peercomment", type="text", nullable=true)
     */
    private $peercomment;

    /**
     * @var integer
     *
     * @ORM\Column(name="peercommentformat", type="smallint", nullable=true)
     */
    private $peercommentformat = '0';



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
     * Set assessmentid
     *
     * @param integer $assessmentid
     * @return MdlWorkshopGrades
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
     * Set strategy
     *
     * @param string $strategy
     * @return MdlWorkshopGrades
     */
    public function setStrategy($strategy)
    {
        $this->strategy = $strategy;

        return $this;
    }

    /**
     * Get strategy
     *
     * @return string 
     */
    public function getStrategy()
    {
        return $this->strategy;
    }

    /**
     * Set dimensionid
     *
     * @param integer $dimensionid
     * @return MdlWorkshopGrades
     */
    public function setDimensionid($dimensionid)
    {
        $this->dimensionid = $dimensionid;

        return $this;
    }

    /**
     * Get dimensionid
     *
     * @return integer 
     */
    public function getDimensionid()
    {
        return $this->dimensionid;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return MdlWorkshopGrades
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
     * Set peercomment
     *
     * @param string $peercomment
     * @return MdlWorkshopGrades
     */
    public function setPeercomment($peercomment)
    {
        $this->peercomment = $peercomment;

        return $this;
    }

    /**
     * Get peercomment
     *
     * @return string 
     */
    public function getPeercomment()
    {
        return $this->peercomment;
    }

    /**
     * Set peercommentformat
     *
     * @param integer $peercommentformat
     * @return MdlWorkshopGrades
     */
    public function setPeercommentformat($peercommentformat)
    {
        $this->peercommentformat = $peercommentformat;

        return $this;
    }

    /**
     * Get peercommentformat
     *
     * @return integer 
     */
    public function getPeercommentformat()
    {
        return $this->peercommentformat;
    }
}
