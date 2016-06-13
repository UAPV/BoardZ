<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignsubmissionFile
 *
 * @ORM\Table(name="mdl_assignsubmission_file", indexes={@ORM\Index(name="mdl_assifile_ass_ix", columns={"assignment"}), @ORM\Index(name="mdl_assifile_sub_ix", columns={"submission"})})
 * @ORM\Entity
 */
class MdlAssignsubmissionFile
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
     * @ORM\Column(name="submission", type="bigint", nullable=false)
     */
    private $submission = '0';

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
     * @return MdlAssignsubmissionFile
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
     * Set submission
     *
     * @param integer $submission
     * @return MdlAssignsubmissionFile
     */
    public function setSubmission($submission)
    {
        $this->submission = $submission;

        return $this;
    }

    /**
     * Get submission
     *
     * @return integer 
     */
    public function getSubmission()
    {
        return $this->submission;
    }

    /**
     * Set numfiles
     *
     * @param integer $numfiles
     * @return MdlAssignsubmissionFile
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
