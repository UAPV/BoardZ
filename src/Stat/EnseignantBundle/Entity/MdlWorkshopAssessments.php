<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshopAssessments
 *
 * @ORM\Table(name="mdl_workshop_assessments", indexes={@ORM\Index(name="mdl_workasse_sub_ix", columns={"submissionid"}), @ORM\Index(name="mdl_workasse_gra_ix", columns={"gradinggradeoverby"}), @ORM\Index(name="mdl_workasse_rev_ix", columns={"reviewerid"})})
 * @ORM\Entity
 */
class MdlWorkshopAssessments
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
     * @ORM\Column(name="submissionid", type="bigint", nullable=false)
     */
    private $submissionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="reviewerid", type="bigint", nullable=false)
     */
    private $reviewerid;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="bigint", nullable=false)
     */
    private $weight = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=true)
     */
    private $timecreated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=true)
     */
    private $timemodified = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $grade;

    /**
     * @var string
     *
     * @ORM\Column(name="gradinggrade", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $gradinggrade;

    /**
     * @var string
     *
     * @ORM\Column(name="gradinggradeover", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $gradinggradeover;

    /**
     * @var integer
     *
     * @ORM\Column(name="gradinggradeoverby", type="bigint", nullable=true)
     */
    private $gradinggradeoverby;

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
     * @ORM\Column(name="feedbackauthorattachment", type="smallint", nullable=true)
     */
    private $feedbackauthorattachment = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="feedbackreviewer", type="text", nullable=true)
     */
    private $feedbackreviewer;

    /**
     * @var integer
     *
     * @ORM\Column(name="feedbackreviewerformat", type="smallint", nullable=true)
     */
    private $feedbackreviewerformat = '0';



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
     * Set submissionid
     *
     * @param integer $submissionid
     * @return MdlWorkshopAssessments
     */
    public function setSubmissionid($submissionid)
    {
        $this->submissionid = $submissionid;

        return $this;
    }

    /**
     * Get submissionid
     *
     * @return integer 
     */
    public function getSubmissionid()
    {
        return $this->submissionid;
    }

    /**
     * Set reviewerid
     *
     * @param integer $reviewerid
     * @return MdlWorkshopAssessments
     */
    public function setReviewerid($reviewerid)
    {
        $this->reviewerid = $reviewerid;

        return $this;
    }

    /**
     * Get reviewerid
     *
     * @return integer 
     */
    public function getReviewerid()
    {
        return $this->reviewerid;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return MdlWorkshopAssessments
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlWorkshopAssessments
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
     * @return MdlWorkshopAssessments
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
     * Set grade
     *
     * @param string $grade
     * @return MdlWorkshopAssessments
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
     * Set gradinggrade
     *
     * @param string $gradinggrade
     * @return MdlWorkshopAssessments
     */
    public function setGradinggrade($gradinggrade)
    {
        $this->gradinggrade = $gradinggrade;

        return $this;
    }

    /**
     * Get gradinggrade
     *
     * @return string 
     */
    public function getGradinggrade()
    {
        return $this->gradinggrade;
    }

    /**
     * Set gradinggradeover
     *
     * @param string $gradinggradeover
     * @return MdlWorkshopAssessments
     */
    public function setGradinggradeover($gradinggradeover)
    {
        $this->gradinggradeover = $gradinggradeover;

        return $this;
    }

    /**
     * Get gradinggradeover
     *
     * @return string 
     */
    public function getGradinggradeover()
    {
        return $this->gradinggradeover;
    }

    /**
     * Set gradinggradeoverby
     *
     * @param integer $gradinggradeoverby
     * @return MdlWorkshopAssessments
     */
    public function setGradinggradeoverby($gradinggradeoverby)
    {
        $this->gradinggradeoverby = $gradinggradeoverby;

        return $this;
    }

    /**
     * Get gradinggradeoverby
     *
     * @return integer 
     */
    public function getGradinggradeoverby()
    {
        return $this->gradinggradeoverby;
    }

    /**
     * Set feedbackauthor
     *
     * @param string $feedbackauthor
     * @return MdlWorkshopAssessments
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
     * @return MdlWorkshopAssessments
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
     * Set feedbackauthorattachment
     *
     * @param integer $feedbackauthorattachment
     * @return MdlWorkshopAssessments
     */
    public function setFeedbackauthorattachment($feedbackauthorattachment)
    {
        $this->feedbackauthorattachment = $feedbackauthorattachment;

        return $this;
    }

    /**
     * Get feedbackauthorattachment
     *
     * @return integer 
     */
    public function getFeedbackauthorattachment()
    {
        return $this->feedbackauthorattachment;
    }

    /**
     * Set feedbackreviewer
     *
     * @param string $feedbackreviewer
     * @return MdlWorkshopAssessments
     */
    public function setFeedbackreviewer($feedbackreviewer)
    {
        $this->feedbackreviewer = $feedbackreviewer;

        return $this;
    }

    /**
     * Get feedbackreviewer
     *
     * @return string 
     */
    public function getFeedbackreviewer()
    {
        return $this->feedbackreviewer;
    }

    /**
     * Set feedbackreviewerformat
     *
     * @param integer $feedbackreviewerformat
     * @return MdlWorkshopAssessments
     */
    public function setFeedbackreviewerformat($feedbackreviewerformat)
    {
        $this->feedbackreviewerformat = $feedbackreviewerformat;

        return $this;
    }

    /**
     * Get feedbackreviewerformat
     *
     * @return integer 
     */
    public function getFeedbackreviewerformat()
    {
        return $this->feedbackreviewerformat;
    }
}
