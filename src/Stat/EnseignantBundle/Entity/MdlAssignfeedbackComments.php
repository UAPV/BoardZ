<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignfeedbackComments
 *
 * @ORM\Table(name="mdl_assignfeedback_comments", indexes={@ORM\Index(name="mdl_assicomm_ass_ix", columns={"assignment"}), @ORM\Index(name="mdl_assicomm_gra_ix", columns={"grade"})})
 * @ORM\Entity
 */
class MdlAssignfeedbackComments
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
     * @var string
     *
     * @ORM\Column(name="commenttext", type="text", nullable=true)
     */
    private $commenttext;

    /**
     * @var integer
     *
     * @ORM\Column(name="commentformat", type="smallint", nullable=false)
     */
    private $commentformat = '0';



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
     * @return MdlAssignfeedbackComments
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
     * @return MdlAssignfeedbackComments
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
     * Set commenttext
     *
     * @param string $commenttext
     * @return MdlAssignfeedbackComments
     */
    public function setCommenttext($commenttext)
    {
        $this->commenttext = $commenttext;

        return $this;
    }

    /**
     * Get commenttext
     *
     * @return string 
     */
    public function getCommenttext()
    {
        return $this->commenttext;
    }

    /**
     * Set commentformat
     *
     * @param integer $commentformat
     * @return MdlAssignfeedbackComments
     */
    public function setCommentformat($commentformat)
    {
        $this->commentformat = $commentformat;

        return $this;
    }

    /**
     * Get commentformat
     *
     * @return integer 
     */
    public function getCommentformat()
    {
        return $this->commentformat;
    }
}
