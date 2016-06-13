<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshopSubmissions
 *
 * @ORM\Table(name="mdl_workshop_submissions", indexes={@ORM\Index(name="mdl_worksubm_wor_ix", columns={"workshopid"}), @ORM\Index(name="mdl_worksubm_gra_ix", columns={"gradeoverby"}), @ORM\Index(name="mdl_worksubm_aut_ix", columns={"authorid"})})
 * @ORM\Entity
 */
class MdlWorkshopSubmissions
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
    private $workshopid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="example", type="boolean", nullable=true)
     */
    private $example = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="authorid", type="bigint", nullable=false)
     */
    private $authorid;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="contentformat", type="smallint", nullable=false)
     */
    private $contentformat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="contenttrust", type="smallint", nullable=false)
     */
    private $contenttrust = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="attachment", type="boolean", nullable=true)
     */
    private $attachment = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $grade;

    /**
     * @var string
     *
     * @ORM\Column(name="gradeover", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $gradeover;

    /**
     * @var integer
     *
     * @ORM\Column(name="gradeoverby", type="bigint", nullable=true)
     */
    private $gradeoverby;

    /**
     * @var string
     *
     * @ORM\Column(name="feedbackauthor", type="text", nullable=true)
     */
    private $feedbackauthor;

    /**
     * @var integer
     *
     * @ORM\Column(name="feedbackauthorformat", type="smallint", nullable=true)
     */
    private $feedbackauthorformat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timegraded", type="bigint", nullable=true)
     */
    private $timegraded;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=true)
     */
    private $published = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="late", type="boolean", nullable=false)
     */
    private $late = '0';



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
     * @return MdlWorkshopSubmissions
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
     * Set example
     *
     * @param boolean $example
     * @return MdlWorkshopSubmissions
     */
    public function setExample($example)
    {
        $this->example = $example;

        return $this;
    }

    /**
     * Get example
     *
     * @return boolean 
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * Set authorid
     *
     * @param integer $authorid
     * @return MdlWorkshopSubmissions
     */
    public function setAuthorid($authorid)
    {
        $this->authorid = $authorid;

        return $this;
    }

    /**
     * Get authorid
     *
     * @return integer 
     */
    public function getAuthorid()
    {
        return $this->authorid;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlWorkshopSubmissions
     */
    public function setTimecreated($timecreated)
    {
        $this->timecreated = $timecreated;

        return $this;
    }

    /**
     * Get timecreated
     *
     * @return integer 
     */
    public function getTimecreated()
    {
        return $this->timecreated;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlWorkshopSubmissions
     */
    public function setTimemodified($timemodified)
    {
        $this->timemodified = $timemodified;

        return $this;
    }

    /**
     * Get timemodified
     *
     * @return integer 
     */
    public function getTimemodified()
    {
        return $this->timemodified;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return MdlWorkshopSubmissions
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return MdlWorkshopSubmissions
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set contentformat
     *
     * @param integer $contentformat
     * @return MdlWorkshopSubmissions
     */
    public function setContentformat($contentformat)
    {
        $this->contentformat = $contentformat;

        return $this;
    }

    /**
     * Get contentformat
     *
     * @return integer 
     */
    public function getContentformat()
    {
        return $this->contentformat;
    }

    /**
     * Set contenttrust
     *
     * @param integer $contenttrust
     * @return MdlWorkshopSubmissions
     */
    public function setContenttrust($contenttrust)
    {
        $this->contenttrust = $contenttrust;

        return $this;
    }

    /**
     * Get contenttrust
     *
     * @return integer 
     */
    public function getContenttrust()
    {
        return $this->contenttrust;
    }

    /**
     * Set attachment
     *
     * @param boolean $attachment
     * @return MdlWorkshopSubmissions
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return boolean 
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return MdlWorkshopSubmissions
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
     * Set gradeover
     *
     * @param string $gradeover
     * @return MdlWorkshopSubmissions
     */
    public function setGradeover($gradeover)
    {
        $this->gradeover = $gradeover;

        return $this;
    }

    /**
     * Get gradeover
     *
     * @return string 
     */
    public function getGradeover()
    {
        return $this->gradeover;
    }

    /**
     * Set gradeoverby
     *
     * @param integer $gradeoverby
     * @return MdlWorkshopSubmissions
     */
    public function setGradeoverby($gradeoverby)
    {
        $this->gradeoverby = $gradeoverby;

        return $this;
    }

    /**
     * Get gradeoverby
     *
     * @return integer 
     */
    public function getGradeoverby()
    {
        return $this->gradeoverby;
    }

    /**
     * Set feedbackauthor
     *
     * @param string $feedbackauthor
     * @return MdlWorkshopSubmissions
     */
    public function setFeedbackauthor($feedbackauthor)
    {
        $this->feedbackauthor = $feedbackauthor;

        return $this;
    }

    /**
     * Get feedbackauthor
     *
     * @return string 
     */
    public function getFeedbackauthor()
    {
        return $this->feedbackauthor;
    }

    /**
     * Set feedbackauthorformat
     *
     * @param integer $feedbackauthorformat
     * @return MdlWorkshopSubmissions
     */
    public function setFeedbackauthorformat($feedbackauthorformat)
    {
        $this->feedbackauthorformat = $feedbackauthorformat;

        return $this;
    }

    /**
     * Get feedbackauthorformat
     *
     * @return integer 
     */
    public function getFeedbackauthorformat()
    {
        return $this->feedbackauthorformat;
    }

    /**
     * Set timegraded
     *
     * @param integer $timegraded
     * @return MdlWorkshopSubmissions
     */
    public function setTimegraded($timegraded)
    {
        $this->timegraded = $timegraded;

        return $this;
    }

    /**
     * Get timegraded
     *
     * @return integer 
     */
    public function getTimegraded()
    {
        return $this->timegraded;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return MdlWorkshopSubmissions
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set late
     *
     * @param boolean $late
     * @return MdlWorkshopSubmissions
     */
    public function setLate($late)
    {
        $this->late = $late;

        return $this;
    }

    /**
     * Get late
     *
     * @return boolean 
     */
    public function getLate()
    {
        return $this->late;
    }
}
