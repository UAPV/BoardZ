<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshop
 *
 * @ORM\Table(name="mdl_workshop", indexes={@ORM\Index(name="mdl_work_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlWorkshop
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
    private $course;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="intro", type="text", nullable=true)
     */
    private $intro;

    /**
     * @var integer
     *
     * @ORM\Column(name="introformat", type="smallint", nullable=false)
     */
    private $introformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="instructauthors", type="text", nullable=true)
     */
    private $instructauthors;

    /**
     * @var integer
     *
     * @ORM\Column(name="instructauthorsformat", type="smallint", nullable=false)
     */
    private $instructauthorsformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="instructreviewers", type="text", nullable=true)
     */
    private $instructreviewers;

    /**
     * @var integer
     *
     * @ORM\Column(name="instructreviewersformat", type="smallint", nullable=false)
     */
    private $instructreviewersformat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;

    /**
     * @var integer
     *
     * @ORM\Column(name="phase", type="smallint", nullable=true)
     */
    private $phase = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="useexamples", type="boolean", nullable=true)
     */
    private $useexamples = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="usepeerassessment", type="boolean", nullable=true)
     */
    private $usepeerassessment = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="useselfassessment", type="boolean", nullable=true)
     */
    private $useselfassessment = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $grade = '80.00000';

    /**
     * @var string
     *
     * @ORM\Column(name="gradinggrade", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $gradinggrade = '20.00000';

    /**
     * @var string
     *
     * @ORM\Column(name="strategy", type="string", length=30, nullable=false)
     */
    private $strategy = '';

    /**
     * @var string
     *
     * @ORM\Column(name="evaluation", type="string", length=30, nullable=false)
     */
    private $evaluation = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="gradedecimals", type="smallint", nullable=true)
     */
    private $gradedecimals = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nattachments", type="smallint", nullable=true)
     */
    private $nattachments = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="latesubmissions", type="boolean", nullable=true)
     */
    private $latesubmissions = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxbytes", type="bigint", nullable=true)
     */
    private $maxbytes = '100000';

    /**
     * @var integer
     *
     * @ORM\Column(name="examplesmode", type="smallint", nullable=true)
     */
    private $examplesmode = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="submissionstart", type="bigint", nullable=true)
     */
    private $submissionstart = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="submissionend", type="bigint", nullable=true)
     */
    private $submissionend = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="assessmentstart", type="bigint", nullable=true)
     */
    private $assessmentstart = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="assessmentend", type="bigint", nullable=true)
     */
    private $assessmentend = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="phaseswitchassessment", type="boolean", nullable=false)
     */
    private $phaseswitchassessment = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="conclusion", type="text", nullable=true)
     */
    private $conclusion;

    /**
     * @var integer
     *
     * @ORM\Column(name="conclusionformat", type="smallint", nullable=false)
     */
    private $conclusionformat = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="overallfeedbackmode", type="smallint", nullable=true)
     */
    private $overallfeedbackmode = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="overallfeedbackfiles", type="smallint", nullable=true)
     */
    private $overallfeedbackfiles = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="overallfeedbackmaxbytes", type="bigint", nullable=true)
     */
    private $overallfeedbackmaxbytes = '100000';



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
     * @return MdlWorkshop
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
     * @return MdlWorkshop
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
     * @return MdlWorkshop
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
     * @return MdlWorkshop
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
     * Set instructauthors
     *
     * @param string $instructauthors
     * @return MdlWorkshop
     */
    public function setInstructauthors($instructauthors)
    {
        $this->instructauthors = $instructauthors;

        return $this;
    }

    /**
     * Get instructauthors
     *
     * @return string 
     */
    public function getInstructauthors()
    {
        return $this->instructauthors;
    }

    /**
     * Set instructauthorsformat
     *
     * @param integer $instructauthorsformat
     * @return MdlWorkshop
     */
    public function setInstructauthorsformat($instructauthorsformat)
    {
        $this->instructauthorsformat = $instructauthorsformat;

        return $this;
    }

    /**
     * Get instructauthorsformat
     *
     * @return integer 
     */
    public function getInstructauthorsformat()
    {
        return $this->instructauthorsformat;
    }

    /**
     * Set instructreviewers
     *
     * @param string $instructreviewers
     * @return MdlWorkshop
     */
    public function setInstructreviewers($instructreviewers)
    {
        $this->instructreviewers = $instructreviewers;

        return $this;
    }

    /**
     * Get instructreviewers
     *
     * @return string 
     */
    public function getInstructreviewers()
    {
        return $this->instructreviewers;
    }

    /**
     * Set instructreviewersformat
     *
     * @param integer $instructreviewersformat
     * @return MdlWorkshop
     */
    public function setInstructreviewersformat($instructreviewersformat)
    {
        $this->instructreviewersformat = $instructreviewersformat;

        return $this;
    }

    /**
     * Get instructreviewersformat
     *
     * @return integer 
     */
    public function getInstructreviewersformat()
    {
        return $this->instructreviewersformat;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlWorkshop
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
     * Set phase
     *
     * @param integer $phase
     * @return MdlWorkshop
     */
    public function setPhase($phase)
    {
        $this->phase = $phase;

        return $this;
    }

    /**
     * Get phase
     *
     * @return integer 
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * Set useexamples
     *
     * @param boolean $useexamples
     * @return MdlWorkshop
     */
    public function setUseexamples($useexamples)
    {
        $this->useexamples = $useexamples;

        return $this;
    }

    /**
     * Get useexamples
     *
     * @return boolean 
     */
    public function getUseexamples()
    {
        return $this->useexamples;
    }

    /**
     * Set usepeerassessment
     *
     * @param boolean $usepeerassessment
     * @return MdlWorkshop
     */
    public function setUsepeerassessment($usepeerassessment)
    {
        $this->usepeerassessment = $usepeerassessment;

        return $this;
    }

    /**
     * Get usepeerassessment
     *
     * @return boolean 
     */
    public function getUsepeerassessment()
    {
        return $this->usepeerassessment;
    }

    /**
     * Set useselfassessment
     *
     * @param boolean $useselfassessment
     * @return MdlWorkshop
     */
    public function setUseselfassessment($useselfassessment)
    {
        $this->useselfassessment = $useselfassessment;

        return $this;
    }

    /**
     * Get useselfassessment
     *
     * @return boolean 
     */
    public function getUseselfassessment()
    {
        return $this->useselfassessment;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return MdlWorkshop
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
     * @return MdlWorkshop
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
     * Set strategy
     *
     * @param string $strategy
     * @return MdlWorkshop
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
     * Set evaluation
     *
     * @param string $evaluation
     * @return MdlWorkshop
     */
    public function setEvaluation($evaluation)
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    /**
     * Get evaluation
     *
     * @return string 
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * Set gradedecimals
     *
     * @param integer $gradedecimals
     * @return MdlWorkshop
     */
    public function setGradedecimals($gradedecimals)
    {
        $this->gradedecimals = $gradedecimals;

        return $this;
    }

    /**
     * Get gradedecimals
     *
     * @return integer 
     */
    public function getGradedecimals()
    {
        return $this->gradedecimals;
    }

    /**
     * Set nattachments
     *
     * @param integer $nattachments
     * @return MdlWorkshop
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
     * Set latesubmissions
     *
     * @param boolean $latesubmissions
     * @return MdlWorkshop
     */
    public function setLatesubmissions($latesubmissions)
    {
        $this->latesubmissions = $latesubmissions;

        return $this;
    }

    /**
     * Get latesubmissions
     *
     * @return boolean 
     */
    public function getLatesubmissions()
    {
        return $this->latesubmissions;
    }

    /**
     * Set maxbytes
     *
     * @param integer $maxbytes
     * @return MdlWorkshop
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
     * Set examplesmode
     *
     * @param integer $examplesmode
     * @return MdlWorkshop
     */
    public function setExamplesmode($examplesmode)
    {
        $this->examplesmode = $examplesmode;

        return $this;
    }

    /**
     * Get examplesmode
     *
     * @return integer 
     */
    public function getExamplesmode()
    {
        return $this->examplesmode;
    }

    /**
     * Set submissionstart
     *
     * @param integer $submissionstart
     * @return MdlWorkshop
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
     * Set submissionend
     *
     * @param integer $submissionend
     * @return MdlWorkshop
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
     * Set assessmentstart
     *
     * @param integer $assessmentstart
     * @return MdlWorkshop
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
     * Set assessmentend
     *
     * @param integer $assessmentend
     * @return MdlWorkshop
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
     * Set phaseswitchassessment
     *
     * @param boolean $phaseswitchassessment
     * @return MdlWorkshop
     */
    public function setPhaseswitchassessment($phaseswitchassessment)
    {
        $this->phaseswitchassessment = $phaseswitchassessment;

        return $this;
    }

    /**
     * Get phaseswitchassessment
     *
     * @return boolean 
     */
    public function getPhaseswitchassessment()
    {
        return $this->phaseswitchassessment;
    }

    /**
     * Set conclusion
     *
     * @param string $conclusion
     * @return MdlWorkshop
     */
    public function setConclusion($conclusion)
    {
        $this->conclusion = $conclusion;

        return $this;
    }

    /**
     * Get conclusion
     *
     * @return string 
     */
    public function getConclusion()
    {
        return $this->conclusion;
    }

    /**
     * Set conclusionformat
     *
     * @param integer $conclusionformat
     * @return MdlWorkshop
     */
    public function setConclusionformat($conclusionformat)
    {
        $this->conclusionformat = $conclusionformat;

        return $this;
    }

    /**
     * Get conclusionformat
     *
     * @return integer 
     */
    public function getConclusionformat()
    {
        return $this->conclusionformat;
    }

    /**
     * Set overallfeedbackmode
     *
     * @param integer $overallfeedbackmode
     * @return MdlWorkshop
     */
    public function setOverallfeedbackmode($overallfeedbackmode)
    {
        $this->overallfeedbackmode = $overallfeedbackmode;

        return $this;
    }

    /**
     * Get overallfeedbackmode
     *
     * @return integer 
     */
    public function getOverallfeedbackmode()
    {
        return $this->overallfeedbackmode;
    }

    /**
     * Set overallfeedbackfiles
     *
     * @param integer $overallfeedbackfiles
     * @return MdlWorkshop
     */
    public function setOverallfeedbackfiles($overallfeedbackfiles)
    {
        $this->overallfeedbackfiles = $overallfeedbackfiles;

        return $this;
    }

    /**
     * Get overallfeedbackfiles
     *
     * @return integer 
     */
    public function getOverallfeedbackfiles()
    {
        return $this->overallfeedbackfiles;
    }

    /**
     * Set overallfeedbackmaxbytes
     *
     * @param integer $overallfeedbackmaxbytes
     * @return MdlWorkshop
     */
    public function setOverallfeedbackmaxbytes($overallfeedbackmaxbytes)
    {
        $this->overallfeedbackmaxbytes = $overallfeedbackmaxbytes;

        return $this;
    }

    /**
     * Get overallfeedbackmaxbytes
     *
     * @return integer 
     */
    public function getOverallfeedbackmaxbytes()
    {
        return $this->overallfeedbackmaxbytes;
    }
}
