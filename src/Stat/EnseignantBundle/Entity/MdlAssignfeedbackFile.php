<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignfeedbackFile
 *
 * @ORM\Table(name="mdl_assignfeedback_file", indexes={@ORM\Index(name="mdl_assifile_ass2_ix", columns={"assignment"}), @ORM\Index(name="mdl_assifile_gra_ix", columns={"grade"})})
 * @ORM\Entity
 */
class MdlAssignfeedbackFile
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
     * @ORM\Column(name="grade", type="bigint", nullable=false)
     */
    private $grade = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="numfiles", type="bigint", nullable=false)
     */
    private $numfiles = '0';



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
     * @return MdlAssignfeedbackFile
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
     * Set grade
     *
     * @param integer $grade
     * @return MdlAssignfeedbackFile
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
     * Set numfiles
     *
     * @param integer $numfiles
     * @return MdlAssignfeedbackFile
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
}
