<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignsubmissionOnlinetext
 *
 * @ORM\Table(name="mdl_assignsubmission_onlinetext", indexes={@ORM\Index(name="mdl_assionli_ass_ix", columns={"assignment"}), @ORM\Index(name="mdl_assionli_sub_ix", columns={"submission"})})
 * @ORM\Entity
 */
class MdlAssignsubmissionOnlinetext
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
     * @var string
     *
     * @ORM\Column(name="onlinetext", type="text", nullable=true)
     */
    private $onlinetext;

    /**
     * @var integer
     *
     * @ORM\Column(name="onlineformat", type="smallint", nullable=false)
     */
    private $onlineformat = '0';



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
     * @return MdlAssignsubmissionOnlinetext
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
     * @return MdlAssignsubmissionOnlinetext
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
     * Set onlinetext
     *
     * @param string $onlinetext
     * @return MdlAssignsubmissionOnlinetext
     */
    public function setOnlinetext($onlinetext)
    {
        $this->onlinetext = $onlinetext;

        return $this;
    }

    /**
     * Get onlinetext
     *
     * @return string 
     */
    public function getOnlinetext()
    {
        return $this->onlinetext;
    }

    /**
     * Set onlineformat
     *
     * @param integer $onlineformat
     * @return MdlAssignsubmissionOnlinetext
     */
    public function setOnlineformat($onlineformat)
    {
        $this->onlineformat = $onlineformat;

        return $this;
    }

    /**
     * Get onlineformat
     *
     * @return integer 
     */
    public function getOnlineformat()
    {
        return $this->onlineformat;
    }
}
