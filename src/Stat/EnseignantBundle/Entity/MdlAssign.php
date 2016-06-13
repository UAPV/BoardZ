<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssign
 *
 * @ORM\Table(name="mdl_assign", indexes={@ORM\Index(name="mdl_assi_cou_ix", columns={"course"}), @ORM\Index(name="mdl_assi_tea_ix", columns={"teamsubmissiongroupingid"})})
 * @ORM\Entity
 */
class MdlAssign
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
     * @ORM\Column(name="intro", type="text", nullable=false)
     */
    private $intro;

    /**
     * @var integer
     *
     * @ORM\Column(name="introformat", type="smallint", nullable=false)
     */
    private $introformat = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="alwaysshowdescription", type="boolean", nullable=false)
     */
    private $alwaysshowdescription = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="nosubmissions", type="boolean", nullable=false)
     */
    private $nosubmissions = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="submissiondrafts", type="boolean", nullable=false)
     */
    private $submissiondrafts = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sendnotifications", type="boolean", nullable=false)
     */
    private $sendnotifications = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sendlatenotifications", type="boolean", nullable=false)
     */
    private $sendlatenotifications = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="duedate", type="bigint", nullable=false)
     */
    private $duedate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="allowsubmissionsfromdate", type="bigint", nullable=false)
     */
    private $allowsubmissionsfromdate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="grade", type="bigint", nullable=false)
     */
    private $grade = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="requiresubmissionstatement", type="boolean", nullable=false)
     */
    private $requiresubmissionstatement = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="completionsubmit", type="boolean", nullable=false)
     */
    private $completionsubmit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="cutoffdate", type="bigint", nullable=false)
     */
    private $cutoffdate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="teamsubmission", type="boolean", nullable=false)
     */
    private $teamsubmission = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="requireallteammemberssubmit", type="boolean", nullable=false)
     */
    private $requireallteammemberssubmit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="teamsubmissiongroupingid", type="bigint", nullable=false)
     */
    private $teamsubmissiongroupingid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="blindmarking", type="boolean", nullable=false)
     */
    private $blindmarking = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="revealidentities", type="boolean", nullable=false)
     */
    private $revealidentities = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="attemptreopenmethod", type="string", length=10, nullable=false)
     */
    private $attemptreopenmethod = 'none';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxattempts", type="integer", nullable=false)
     */
    private $maxattempts = '-1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="markingworkflow", type="boolean", nullable=false)
     */
    private $markingworkflow = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="markingallocation", type="boolean", nullable=false)
     */
    private $markingallocation = '0';



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
     * @return MdlAssign
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
     * @return MdlAssign
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
     * Set intro
     *
     * @param string $intro
     * @return MdlAssign
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Get intro
     *
     * @return string 
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * Set introformat
     *
     * @param integer $introformat
     * @return MdlAssign
     */
    public function setIntroformat($introformat)
    {
        $this->introformat = $introformat;

        return $this;
    }

    /**
     * Get introformat
     *
     * @return integer 
     */
    public function getIntroformat()
    {
        return $this->introformat;
    }

    /**
     * Set alwaysshowdescription
     *
     * @param boolean $alwaysshowdescription
     * @return MdlAssign
     */
    public function setAlwaysshowdescription($alwaysshowdescription)
    {
        $this->alwaysshowdescription = $alwaysshowdescription;

        return $this;
    }

    /**
     * Get alwaysshowdescription
     *
     * @return boolean 
     */
    public function getAlwaysshowdescription()
    {
        return $this->alwaysshowdescription;
    }

    /**
     * Set nosubmissions
     *
     * @param boolean $nosubmissions
     * @return MdlAssign
     */
    public function setNosubmissions($nosubmissions)
    {
        $this->nosubmissions = $nosubmissions;

        return $this;
    }

    /**
     * Get nosubmissions
     *
     * @return boolean 
     */
    public function getNosubmissions()
    {
        return $this->nosubmissions;
    }

    /**
     * Set submissiondrafts
     *
     * @param boolean $submissiondrafts
     * @return MdlAssign
     */
    public function setSubmissiondrafts($submissiondrafts)
    {
        $this->submissiondrafts = $submissiondrafts;

        return $this;
    }

    /**
     * Get submissiondrafts
     *
     * @return boolean 
     */
    public function getSubmissiondrafts()
    {
        return $this->submissiondrafts;
    }

    /**
     * Set sendnotifications
     *
     * @param boolean $sendnotifications
     * @return MdlAssign
     */
    public function setSendnotifications($sendnotifications)
    {
        $this->sendnotifications = $sendnotifications;

        return $this;
    }

    /**
     * Get sendnotifications
     *
     * @return boolean 
     */
    public function getSendnotifications()
    {
        return $this->sendnotifications;
    }

    /**
     * Set sendlatenotifications
     *
     * @param boolean $sendlatenotifications
     * @return MdlAssign
     */
    public function setSendlatenotifications($sendlatenotifications)
    {
        $this->sendlatenotifications = $sendlatenotifications;

        return $this;
    }

    /**
     * Get sendlatenotifications
     *
     * @return boolean 
     */
    public function getSendlatenotifications()
    {
        return $this->sendlatenotifications;
    }

    /**
     * Set duedate
     *
     * @param integer $duedate
     * @return MdlAssign
     */
    public function setDuedate($duedate)
    {
        $this->duedate = $duedate;

        return $this;
    }

    /**
     * Get duedate
     *
     * @return integer 
     */
    public function getDuedate()
    {
        return $this->duedate;
    }

    /**
     * Set allowsubmissionsfromdate
     *
     * @param integer $allowsubmissionsfromdate
     * @return MdlAssign
     */
    public function setAllowsubmissionsfromdate($allowsubmissionsfromdate)
    {
        $this->allowsubmissionsfromdate = $allowsubmissionsfromdate;

        return $this;
    }

    /**
     * Get allowsubmissionsfromdate
     *
     * @return integer 
     */
    public function getAllowsubmissionsfromdate()
    {
        return $this->allowsubmissionsfromdate;
    }

    /**
     * Set grade
     *
     * @param integer $grade
     * @return MdlAssign
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
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlAssign
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
     * Set requiresubmissionstatement
     *
     * @param boolean $requiresubmissionstatement
     * @return MdlAssign
     */
    public function setRequiresubmissionstatement($requiresubmissionstatement)
    {
        $this->requiresubmissionstatement = $requiresubmissionstatement;

        return $this;
    }

    /**
     * Get requiresubmissionstatement
     *
     * @return boolean 
     */
    public function getRequiresubmissionstatement()
    {
        return $this->requiresubmissionstatement;
    }

    /**
     * Set completionsubmit
     *
     * @param boolean $completionsubmit
     * @return MdlAssign
     */
    public function setCompletionsubmit($completionsubmit)
    {
        $this->completionsubmit = $completionsubmit;

        return $this;
    }

    /**
     * Get completionsubmit
     *
     * @return boolean 
     */
    public function getCompletionsubmit()
    {
        return $this->completionsubmit;
    }

    /**
     * Set cutoffdate
     *
     * @param integer $cutoffdate
     * @return MdlAssign
     */
    public function setCutoffdate($cutoffdate)
    {
        $this->cutoffdate = $cutoffdate;

        return $this;
    }

    /**
     * Get cutoffdate
     *
     * @return integer 
     */
    public function getCutoffdate()
    {
        return $this->cutoffdate;
    }

    /**
     * Set teamsubmission
     *
     * @param boolean $teamsubmission
     * @return MdlAssign
     */
    public function setTeamsubmission($teamsubmission)
    {
        $this->teamsubmission = $teamsubmission;

        return $this;
    }

    /**
     * Get teamsubmission
     *
     * @return boolean 
     */
    public function getTeamsubmission()
    {
        return $this->teamsubmission;
    }

    /**
     * Set requireallteammemberssubmit
     *
     * @param boolean $requireallteammemberssubmit
     * @return MdlAssign
     */
    public function setRequireallteammemberssubmit($requireallteammemberssubmit)
    {
        $this->requireallteammemberssubmit = $requireallteammemberssubmit;

        return $this;
    }

    /**
     * Get requireallteammemberssubmit
     *
     * @return boolean 
     */
    public function getRequireallteammemberssubmit()
    {
        return $this->requireallteammemberssubmit;
    }

    /**
     * Set teamsubmissiongroupingid
     *
     * @param integer $teamsubmissiongroupingid
     * @return MdlAssign
     */
    public function setTeamsubmissiongroupingid($teamsubmissiongroupingid)
    {
        $this->teamsubmissiongroupingid = $teamsubmissiongroupingid;

        return $this;
    }

    /**
     * Get teamsubmissiongroupingid
     *
     * @return integer 
     */
    public function getTeamsubmissiongroupingid()
    {
        return $this->teamsubmissiongroupingid;
    }

    /**
     * Set blindmarking
     *
     * @param boolean $blindmarking
     * @return MdlAssign
     */
    public function setBlindmarking($blindmarking)
    {
        $this->blindmarking = $blindmarking;

        return $this;
    }

    /**
     * Get blindmarking
     *
     * @return boolean 
     */
    public function getBlindmarking()
    {
        return $this->blindmarking;
    }

    /**
     * Set revealidentities
     *
     * @param boolean $revealidentities
     * @return MdlAssign
     */
    public function setRevealidentities($revealidentities)
    {
        $this->revealidentities = $revealidentities;

        return $this;
    }

    /**
     * Get revealidentities
     *
     * @return boolean 
     */
    public function getRevealidentities()
    {
        return $this->revealidentities;
    }

    /**
     * Set attemptreopenmethod
     *
     * @param string $attemptreopenmethod
     * @return MdlAssign
     */
    public function setAttemptreopenmethod($attemptreopenmethod)
    {
        $this->attemptreopenmethod = $attemptreopenmethod;

        return $this;
    }

    /**
     * Get attemptreopenmethod
     *
     * @return string 
     */
    public function getAttemptreopenmethod()
    {
        return $this->attemptreopenmethod;
    }

    /**
     * Set maxattempts
     *
     * @param integer $maxattempts
     * @return MdlAssign
     */
    public function setMaxattempts($maxattempts)
    {
        $this->maxattempts = $maxattempts;

        return $this;
    }

    /**
     * Get maxattempts
     *
     * @return integer 
     */
    public function getMaxattempts()
    {
        return $this->maxattempts;
    }

    /**
     * Set markingworkflow
     *
     * @param boolean $markingworkflow
     * @return MdlAssign
     */
    public function setMarkingworkflow($markingworkflow)
    {
        $this->markingworkflow = $markingworkflow;

        return $this;
    }

    /**
     * Get markingworkflow
     *
     * @return boolean 
     */
    public function getMarkingworkflow()
    {
        return $this->markingworkflow;
    }

    /**
     * Set markingallocation
     *
     * @param boolean $markingallocation
     * @return MdlAssign
     */
    public function setMarkingallocation($markingallocation)
    {
        $this->markingallocation = $markingallocation;

        return $this;
    }

    /**
     * Get markingallocation
     *
     * @return boolean 
     */
    public function getMarkingallocation()
    {
        return $this->markingallocation;
    }
}
