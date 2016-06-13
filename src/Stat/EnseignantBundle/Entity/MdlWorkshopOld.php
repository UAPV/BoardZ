<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshopOld
 *
 * @ORM\Table(name="mdl_workshop_old", indexes={@ORM\Index(name="mdl_workold_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlWorkshopOld
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
     * @ORM\Column(name="course", type="bigint", nullable=false)
     */
    private $course = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="wtype", type="smallint", nullable=false)
     */
    private $wtype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nelements", type="smallint", nullable=false)
     */
    private $nelements = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="nattachments", type="smallint", nullable=false)
     */
    private $nattachments = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="phase", type="boolean", nullable=false)
     */
    private $phase = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="format", type="boolean", nullable=false)
     */
    private $format = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="gradingstrategy", type="boolean", nullable=false)
     */
    private $gradingstrategy = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="resubmit", type="boolean", nullable=false)
     */
    private $resubmit = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="agreeassessments", type="boolean", nullable=false)
     */
    private $agreeassessments = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="hidegrades", type="boolean", nullable=false)
     */
    private $hidegrades = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="anonymous", type="boolean", nullable=false)
     */
    private $anonymous = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="includeself", type="boolean", nullable=false)
     */
    private $includeself = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxbytes", type="bigint", nullable=false)
     */
    private $maxbytes = '100000';

    /**
     * @var integer
     *
     * @ORM\Column(name="submissionstart", type="bigint", nullable=false)
     */
    private $submissionstart = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="assessmentstart", type="bigint", nullable=false)
     */
    private $assessmentstart = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="submissionend", type="bigint", nullable=false)
     */
    private $submissionend = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="assessmentend", type="bigint", nullable=false)
     */
    private $assessmentend = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="releasegrades", type="bigint", nullable=false)
     */
    private $releasegrades = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="grade", type="smallint", nullable=false)
     */
    private $grade = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="gradinggrade", type="smallint", nullable=false)
     */
    private $gradinggrade = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ntassessments", type="smallint", nullable=false)
     */
    private $ntassessments = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="assessmentcomps", type="smallint", nullable=false)
     */
    private $assessmentcomps = '2';

    /**
     * @var integer
     *
     * @ORM\Column(name="nsassessments", type="smallint", nullable=false)
     */
    private $nsassessments = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="overallocation", type="smallint", nullable=false)
     */
    private $overallocation = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="teacherweight", type="smallint", nullable=false)
     */
    private $teacherweight = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="showleaguetable", type="smallint", nullable=false)
     */
    private $showleaguetable = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="usepassword", type="smallint", nullable=false)
     */
    private $usepassword = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=false)
     */
    private $password = '';

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
     * Set course
     *
     * @param integer $course
     * @return MdlWorkshopOld
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return integer 
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlWorkshopOld
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return MdlWorkshopOld
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set wtype
     *
     * @param integer $wtype
     * @return MdlWorkshopOld
     */
    public function setWtype($wtype)
    {
        $this->wtype = $wtype;

        return $this;
    }

    /**
     * Get wtype
     *
     * @return integer 
     */
    public function getWtype()
    {
        return $this->wtype;
    }

    /**
     * Set nelements
     *
     * @param integer $nelements
     * @return MdlWorkshopOld
     */
    public function setNelements($nelements)
    {
        $this->nelements = $nelements;

        return $this;
    }

    /**
     * Get nelements
     *
     * @return integer 
     */
    public function getNelements()
    {
        return $this->nelements;
    }

    /**
     * Set nattachments
     *
     * @param integer $nattachments
     * @return MdlWorkshopOld
     */
    public function setNattachments($nattachments)
    {
        $this->nattachments = $nattachments;

        return $this;
    }

    /**
     * Get nattachments
     *
     * @return integer 
     */
    public function getNattachments()
    {
        return $this->nattachments;
    }

    /**
     * Set phase
     *
     * @param boolean $phase
     * @return MdlWorkshopOld
     */
    public function setPhase($phase)
    {
        $this->phase = $phase;

        return $this;
    }

    /**
     * Get phase
     *
     * @return boolean 
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * Set format
     *
     * @param boolean $format
     * @return MdlWorkshopOld
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return boolean 
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set gradingstrategy
     *
     * @param boolean $gradingstrategy
     * @return MdlWorkshopOld
     */
    public function setGradingstrategy($gradingstrategy)
    {
        $this->gradingstrategy = $gradingstrategy;

        return $this;
    }

    /**
     * Get gradingstrategy
     *
     * @return boolean 
     */
    public function getGradingstrategy()
    {
        return $this->gradingstrategy;
    }

    /**
     * Set resubmit
     *
     * @param boolean $resubmit
     * @return MdlWorkshopOld
     */
    public function setResubmit($resubmit)
    {
        $this->resubmit = $resubmit;

        return $this;
    }

    /**
     * Get resubmit
     *
     * @return boolean 
     */
    public function getResubmit()
    {
        return $this->resubmit;
    }

    /**
     * Set agreeassessments
     *
     * @param boolean $agreeassessments
     * @return MdlWorkshopOld
     */
    public function setAgreeassessments($agreeassessments)
    {
        $this->agreeassessments = $agreeassessments;

        return $this;
    }

    /**
     * Get agreeassessments
     *
     * @return boolean 
     */
    public function getAgreeassessments()
    {
        return $this->agreeassessments;
    }

    /**
     * Set hidegrades
     *
     * @param boolean $hidegrades
     * @return MdlWorkshopOld
     */
    public function setHidegrades($hidegrades)
    {
        $this->hidegrades = $hidegrades;

        return $this;
    }

    /**
     * Get hidegrades
     *
     * @return boolean 
     */
    public function getHidegrades()
    {
        return $this->hidegrades;
    }

    /**
     * Set anonymous
     *
     * @param boolean $anonymous
     * @return MdlWorkshopOld
     */
    public function setAnonymous($anonymous)
    {
        $this->anonymous = $anonymous;

        return $this;
    }

    /**
     * Get anonymous
     *
     * @return boolean 
     */
    public function getAnonymous()
    {
        return $this->anonymous;
    }

    /**
     * Set includeself
     *
     * @param boolean $includeself
     * @return MdlWorkshopOld
     */
    public function setIncludeself($includeself)
    {
        $this->includeself = $includeself;

        return $this;
    }

    /**
     * Get includeself
     *
     * @return boolean 
     */
    public function getIncludeself()
    {
        return $this->includeself;
    }

    /**
     * Set maxbytes
     *
     * @param integer $maxbytes
     * @return MdlWorkshopOld
     */
    public function setMaxbytes($maxbytes)
    {
        $this->maxbytes = $maxbytes;

        return $this;
    }

    /**
     * Get maxbytes
     *
     * @return integer 
     */
    public function getMaxbytes()
    {
        return $this->maxbytes;
    }

    /**
     * Set submissionstart
     *
     * @param integer $submissionstart
     * @return MdlWorkshopOld
     */
    public function setSubmissionstart($submissionstart)
    {
        $this->submissionstart = $submissionstart;

        return $this;
    }

    /**
     * Get submissionstart
     *
     * @return integer 
     */
    public function getSubmissionstart()
    {
        return $this->submissionstart;
    }

    /**
     * Set assessmentstart
     *
     * @param integer $assessmentstart
     * @return MdlWorkshopOld
     */
    public function setAssessmentstart($assessmentstart)
    {
        $this->assessmentstart = $assessmentstart;

        return $this;
    }

    /**
     * Get assessmentstart
     *
     * @return integer 
     */
    public function getAssessmentstart()
    {
        return $this->assessmentstart;
    }

    /**
     * Set submissionend
     *
     * @param integer $submissionend
     * @return MdlWorkshopOld
     */
    public function setSubmissionend($submissionend)
    {
        $this->submissionend = $submissionend;

        return $this;
    }

    /**
     * Get submissionend
     *
     * @return integer 
     */
    public function getSubmissionend()
    {
        return $this->submissionend;
    }

    /**
     * Set assessmentend
     *
     * @param integer $assessmentend
     * @return MdlWorkshopOld
     */
    public function setAssessmentend($assessmentend)
    {
        $this->assessmentend = $assessmentend;

        return $this;
    }

    /**
     * Get assessmentend
     *
     * @return integer 
     */
    public function getAssessmentend()
    {
        return $this->assessmentend;
    }

    /**
     * Set releasegrades
     *
     * @param integer $releasegrades
     * @return MdlWorkshopOld
     */
    public function setReleasegrades($releasegrades)
    {
        $this->releasegrades = $releasegrades;

        return $this;
    }

    /**
     * Get releasegrades
     *
     * @return integer 
     */
    public function getReleasegrades()
    {
        return $this->releasegrades;
    }

    /**
     * Set grade
     *
     * @param integer $grade
     * @return MdlWorkshopOld
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
     * Set gradinggrade
     *
     * @param integer $gradinggrade
     * @return MdlWorkshopOld
     */
    public function setGradinggrade($gradinggrade)
    {
        $this->gradinggrade = $gradinggrade;

        return $this;
    }

    /**
     * Get gradinggrade
     *
     * @return integer 
     */
    public function getGradinggrade()
    {
        return $this->gradinggrade;
    }

    /**
     * Set ntassessments
     *
     * @param integer $ntassessments
     * @return MdlWorkshopOld
     */
    public function setNtassessments($ntassessments)
    {
        $this->ntassessments = $ntassessments;

        return $this;
    }

    /**
     * Get ntassessments
     *
     * @return integer 
     */
    public function getNtassessments()
    {
        return $this->ntassessments;
    }

    /**
     * Set assessmentcomps
     *
     * @param integer $assessmentcomps
     * @return MdlWorkshopOld
     */
    public function setAssessmentcomps($assessmentcomps)
    {
        $this->assessmentcomps = $assessmentcomps;

        return $this;
    }

    /**
     * Get assessmentcomps
     *
     * @return integer 
     */
    public function getAssessmentcomps()
    {
        return $this->assessmentcomps;
    }

    /**
     * Set nsassessments
     *
     * @param integer $nsassessments
     * @return MdlWorkshopOld
     */
    public function setNsassessments($nsassessments)
    {
        $this->nsassessments = $nsassessments;

        return $this;
    }

    /**
     * Get nsassessments
     *
     * @return integer 
     */
    public function getNsassessments()
    {
        return $this->nsassessments;
    }

    /**
     * Set overallocation
     *
     * @param integer $overallocation
     * @return MdlWorkshopOld
     */
    public function setOverallocation($overallocation)
    {
        $this->overallocation = $overallocation;

        return $this;
    }

    /**
     * Get overallocation
     *
     * @return integer 
     */
    public function getOverallocation()
    {
        return $this->overallocation;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlWorkshopOld
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
     * Set teacherweight
     *
     * @param integer $teacherweight
     * @return MdlWorkshopOld
     */
    public function setTeacherweight($teacherweight)
    {
        $this->teacherweight = $teacherweight;

        return $this;
    }

    /**
     * Get teacherweight
     *
     * @return integer 
     */
    public function getTeacherweight()
    {
        return $this->teacherweight;
    }

    /**
     * Set showleaguetable
     *
     * @param integer $showleaguetable
     * @return MdlWorkshopOld
     */
    public function setShowleaguetable($showleaguetable)
    {
        $this->showleaguetable = $showleaguetable;

        return $this;
    }

    /**
     * Get showleaguetable
     *
     * @return integer 
     */
    public function getShowleaguetable()
    {
        return $this->showleaguetable;
    }

    /**
     * Set usepassword
     *
     * @param integer $usepassword
     * @return MdlWorkshopOld
     */
    public function setUsepassword($usepassword)
    {
        $this->usepassword = $usepassword;

        return $this;
    }

    /**
     * Get usepassword
     *
     * @return integer 
     */
    public function getUsepassword()
    {
        return $this->usepassword;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return MdlWorkshopOld
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set newplugin
     *
     * @param string $newplugin
     * @return MdlWorkshopOld
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
     * @return MdlWorkshopOld
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
