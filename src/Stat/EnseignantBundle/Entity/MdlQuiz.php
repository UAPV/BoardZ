<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuiz
 *
 * @ORM\Table(name="mdl_quiz", indexes={@ORM\Index(name="mdl_quiz_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlQuiz
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
     * @var integer
     *
     * @ORM\Column(name="timeopen", type="bigint", nullable=false)
     */
    private $timeopen = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timeclose", type="bigint", nullable=false)
     */
    private $timeclose = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timelimit", type="bigint", nullable=false)
     */
    private $timelimit = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="overduehandling", type="string", length=16, nullable=false)
     */
    private $overduehandling = 'autoabandon';

    /**
     * @var integer
     *
     * @ORM\Column(name="graceperiod", type="bigint", nullable=false)
     */
    private $graceperiod = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="preferredbehaviour", type="string", length=32, nullable=false)
     */
    private $preferredbehaviour = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="attempts", type="integer", nullable=false)
     */
    private $attempts = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="attemptonlast", type="smallint", nullable=false)
     */
    private $attemptonlast = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="grademethod", type="smallint", nullable=false)
     */
    private $grademethod = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="decimalpoints", type="smallint", nullable=false)
     */
    private $decimalpoints = '2';

    /**
     * @var integer
     *
     * @ORM\Column(name="questiondecimalpoints", type="smallint", nullable=false)
     */
    private $questiondecimalpoints = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="reviewattempt", type="integer", nullable=false)
     */
    private $reviewattempt = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="reviewcorrectness", type="integer", nullable=false)
     */
    private $reviewcorrectness = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="reviewmarks", type="integer", nullable=false)
     */
    private $reviewmarks = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="reviewspecificfeedback", type="integer", nullable=false)
     */
    private $reviewspecificfeedback = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="reviewgeneralfeedback", type="integer", nullable=false)
     */
    private $reviewgeneralfeedback = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="reviewrightanswer", type="integer", nullable=false)
     */
    private $reviewrightanswer = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="reviewoverallfeedback", type="integer", nullable=false)
     */
    private $reviewoverallfeedback = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="questionsperpage", type="bigint", nullable=false)
     */
    private $questionsperpage = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="navmethod", type="string", length=16, nullable=false)
     */
    private $navmethod = 'free';

    /**
     * @var integer
     *
     * @ORM\Column(name="shufflequestions", type="smallint", nullable=false)
     */
    private $shufflequestions = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="shuffleanswers", type="smallint", nullable=false)
     */
    private $shuffleanswers = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="questions", type="text", nullable=false)
     */
    private $questions;

    /**
     * @var string
     *
     * @ORM\Column(name="sumgrades", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $sumgrades = '0.00000';

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $grade = '0.00000';

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password = '';

    /**
     * @var string
     *
     * @ORM\Column(name="subnet", type="string", length=255, nullable=false)
     */
    private $subnet = '';

    /**
     * @var string
     *
     * @ORM\Column(name="browsersecurity", type="string", length=32, nullable=false)
     */
    private $browsersecurity = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="delay1", type="bigint", nullable=false)
     */
    private $delay1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="delay2", type="bigint", nullable=false)
     */
    private $delay2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="showuserpicture", type="smallint", nullable=false)
     */
    private $showuserpicture = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="showblocks", type="smallint", nullable=false)
     */
    private $showblocks = '0';



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
     * @return MdlQuiz
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
     * @return MdlQuiz
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
     * @return MdlQuiz
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
     * @return MdlQuiz
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
     * Set timeopen
     *
     * @param integer $timeopen
     * @return MdlQuiz
     */
    public function setTimeopen($timeopen)
    {
        $this->timeopen = $timeopen;

        return $this;
    }

    /**
     * Get timeopen
     *
     * @return integer 
     */
    public function getTimeopen()
    {
        return $this->timeopen;
    }

    /**
     * Set timeclose
     *
     * @param integer $timeclose
     * @return MdlQuiz
     */
    public function setTimeclose($timeclose)
    {
        $this->timeclose = $timeclose;

        return $this;
    }

    /**
     * Get timeclose
     *
     * @return integer 
     */
    public function getTimeclose()
    {
        return $this->timeclose;
    }

    /**
     * Set timelimit
     *
     * @param integer $timelimit
     * @return MdlQuiz
     */
    public function setTimelimit($timelimit)
    {
        $this->timelimit = $timelimit;

        return $this;
    }

    /**
     * Get timelimit
     *
     * @return integer 
     */
    public function getTimelimit()
    {
        return $this->timelimit;
    }

    /**
     * Set overduehandling
     *
     * @param string $overduehandling
     * @return MdlQuiz
     */
    public function setOverduehandling($overduehandling)
    {
        $this->overduehandling = $overduehandling;

        return $this;
    }

    /**
     * Get overduehandling
     *
     * @return string 
     */
    public function getOverduehandling()
    {
        return $this->overduehandling;
    }

    /**
     * Set graceperiod
     *
     * @param integer $graceperiod
     * @return MdlQuiz
     */
    public function setGraceperiod($graceperiod)
    {
        $this->graceperiod = $graceperiod;

        return $this;
    }

    /**
     * Get graceperiod
     *
     * @return integer 
     */
    public function getGraceperiod()
    {
        return $this->graceperiod;
    }

    /**
     * Set preferredbehaviour
     *
     * @param string $preferredbehaviour
     * @return MdlQuiz
     */
    public function setPreferredbehaviour($preferredbehaviour)
    {
        $this->preferredbehaviour = $preferredbehaviour;

        return $this;
    }

    /**
     * Get preferredbehaviour
     *
     * @return string 
     */
    public function getPreferredbehaviour()
    {
        return $this->preferredbehaviour;
    }

    /**
     * Set attempts
     *
     * @param integer $attempts
     * @return MdlQuiz
     */
    public function setAttempts($attempts)
    {
        $this->attempts = $attempts;

        return $this;
    }

    /**
     * Get attempts
     *
     * @return integer 
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * Set attemptonlast
     *
     * @param integer $attemptonlast
     * @return MdlQuiz
     */
    public function setAttemptonlast($attemptonlast)
    {
        $this->attemptonlast = $attemptonlast;

        return $this;
    }

    /**
     * Get attemptonlast
     *
     * @return integer 
     */
    public function getAttemptonlast()
    {
        return $this->attemptonlast;
    }

    /**
     * Set grademethod
     *
     * @param integer $grademethod
     * @return MdlQuiz
     */
    public function setGrademethod($grademethod)
    {
        $this->grademethod = $grademethod;

        return $this;
    }

    /**
     * Get grademethod
     *
     * @return integer 
     */
    public function getGrademethod()
    {
        return $this->grademethod;
    }

    /**
     * Set decimalpoints
     *
     * @param integer $decimalpoints
     * @return MdlQuiz
     */
    public function setDecimalpoints($decimalpoints)
    {
        $this->decimalpoints = $decimalpoints;

        return $this;
    }

    /**
     * Get decimalpoints
     *
     * @return integer 
     */
    public function getDecimalpoints()
    {
        return $this->decimalpoints;
    }

    /**
     * Set questiondecimalpoints
     *
     * @param integer $questiondecimalpoints
     * @return MdlQuiz
     */
    public function setQuestiondecimalpoints($questiondecimalpoints)
    {
        $this->questiondecimalpoints = $questiondecimalpoints;

        return $this;
    }

    /**
     * Get questiondecimalpoints
     *
     * @return integer 
     */
    public function getQuestiondecimalpoints()
    {
        return $this->questiondecimalpoints;
    }

    /**
     * Set reviewattempt
     *
     * @param integer $reviewattempt
     * @return MdlQuiz
     */
    public function setReviewattempt($reviewattempt)
    {
        $this->reviewattempt = $reviewattempt;

        return $this;
    }

    /**
     * Get reviewattempt
     *
     * @return integer 
     */
    public function getReviewattempt()
    {
        return $this->reviewattempt;
    }

    /**
     * Set reviewcorrectness
     *
     * @param integer $reviewcorrectness
     * @return MdlQuiz
     */
    public function setReviewcorrectness($reviewcorrectness)
    {
        $this->reviewcorrectness = $reviewcorrectness;

        return $this;
    }

    /**
     * Get reviewcorrectness
     *
     * @return integer 
     */
    public function getReviewcorrectness()
    {
        return $this->reviewcorrectness;
    }

    /**
     * Set reviewmarks
     *
     * @param integer $reviewmarks
     * @return MdlQuiz
     */
    public function setReviewmarks($reviewmarks)
    {
        $this->reviewmarks = $reviewmarks;

        return $this;
    }

    /**
     * Get reviewmarks
     *
     * @return integer 
     */
    public function getReviewmarks()
    {
        return $this->reviewmarks;
    }

    /**
     * Set reviewspecificfeedback
     *
     * @param integer $reviewspecificfeedback
     * @return MdlQuiz
     */
    public function setReviewspecificfeedback($reviewspecificfeedback)
    {
        $this->reviewspecificfeedback = $reviewspecificfeedback;

        return $this;
    }

    /**
     * Get reviewspecificfeedback
     *
     * @return integer 
     */
    public function getReviewspecificfeedback()
    {
        return $this->reviewspecificfeedback;
    }

    /**
     * Set reviewgeneralfeedback
     *
     * @param integer $reviewgeneralfeedback
     * @return MdlQuiz
     */
    public function setReviewgeneralfeedback($reviewgeneralfeedback)
    {
        $this->reviewgeneralfeedback = $reviewgeneralfeedback;

        return $this;
    }

    /**
     * Get reviewgeneralfeedback
     *
     * @return integer 
     */
    public function getReviewgeneralfeedback()
    {
        return $this->reviewgeneralfeedback;
    }

    /**
     * Set reviewrightanswer
     *
     * @param integer $reviewrightanswer
     * @return MdlQuiz
     */
    public function setReviewrightanswer($reviewrightanswer)
    {
        $this->reviewrightanswer = $reviewrightanswer;

        return $this;
    }

    /**
     * Get reviewrightanswer
     *
     * @return integer 
     */
    public function getReviewrightanswer()
    {
        return $this->reviewrightanswer;
    }

    /**
     * Set reviewoverallfeedback
     *
     * @param integer $reviewoverallfeedback
     * @return MdlQuiz
     */
    public function setReviewoverallfeedback($reviewoverallfeedback)
    {
        $this->reviewoverallfeedback = $reviewoverallfeedback;

        return $this;
    }

    /**
     * Get reviewoverallfeedback
     *
     * @return integer 
     */
    public function getReviewoverallfeedback()
    {
        return $this->reviewoverallfeedback;
    }

    /**
     * Set questionsperpage
     *
     * @param integer $questionsperpage
     * @return MdlQuiz
     */
    public function setQuestionsperpage($questionsperpage)
    {
        $this->questionsperpage = $questionsperpage;

        return $this;
    }

    /**
     * Get questionsperpage
     *
     * @return integer 
     */
    public function getQuestionsperpage()
    {
        return $this->questionsperpage;
    }

    /**
     * Set navmethod
     *
     * @param string $navmethod
     * @return MdlQuiz
     */
    public function setNavmethod($navmethod)
    {
        $this->navmethod = $navmethod;

        return $this;
    }

    /**
     * Get navmethod
     *
     * @return string 
     */
    public function getNavmethod()
    {
        return $this->navmethod;
    }

    /**
     * Set shufflequestions
     *
     * @param integer $shufflequestions
     * @return MdlQuiz
     */
    public function setShufflequestions($shufflequestions)
    {
        $this->shufflequestions = $shufflequestions;

        return $this;
    }

    /**
     * Get shufflequestions
     *
     * @return integer 
     */
    public function getShufflequestions()
    {
        return $this->shufflequestions;
    }

    /**
     * Set shuffleanswers
     *
     * @param integer $shuffleanswers
     * @return MdlQuiz
     */
    public function setShuffleanswers($shuffleanswers)
    {
        $this->shuffleanswers = $shuffleanswers;

        return $this;
    }

    /**
     * Get shuffleanswers
     *
     * @return integer 
     */
    public function getShuffleanswers()
    {
        return $this->shuffleanswers;
    }

    /**
     * Set questions
     *
     * @param string $questions
     * @return MdlQuiz
     */
    public function setQuestions($questions)
    {
        $this->questions = $questions;

        return $this;
    }

    /**
     * Get questions
     *
     * @return string 
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Set sumgrades
     *
     * @param string $sumgrades
     * @return MdlQuiz
     */
    public function setSumgrades($sumgrades)
    {
        $this->sumgrades = $sumgrades;

        return $this;
    }

    /**
     * Get sumgrades
     *
     * @return string 
     */
    public function getSumgrades()
    {
        return $this->sumgrades;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return MdlQuiz
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
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlQuiz
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
     * @return MdlQuiz
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
     * Set password
     *
     * @param string $password
     * @return MdlQuiz
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
     * Set subnet
     *
     * @param string $subnet
     * @return MdlQuiz
     */
    public function setSubnet($subnet)
    {
        $this->subnet = $subnet;

        return $this;
    }

    /**
     * Get subnet
     *
     * @return string 
     */
    public function getSubnet()
    {
        return $this->subnet;
    }

    /**
     * Set browsersecurity
     *
     * @param string $browsersecurity
     * @return MdlQuiz
     */
    public function setBrowsersecurity($browsersecurity)
    {
        $this->browsersecurity = $browsersecurity;

        return $this;
    }

    /**
     * Get browsersecurity
     *
     * @return string 
     */
    public function getBrowsersecurity()
    {
        return $this->browsersecurity;
    }

    /**
     * Set delay1
     *
     * @param integer $delay1
     * @return MdlQuiz
     */
    public function setDelay1($delay1)
    {
        $this->delay1 = $delay1;

        return $this;
    }

    /**
     * Get delay1
     *
     * @return integer 
     */
    public function getDelay1()
    {
        return $this->delay1;
    }

    /**
     * Set delay2
     *
     * @param integer $delay2
     * @return MdlQuiz
     */
    public function setDelay2($delay2)
    {
        $this->delay2 = $delay2;

        return $this;
    }

    /**
     * Get delay2
     *
     * @return integer 
     */
    public function getDelay2()
    {
        return $this->delay2;
    }

    /**
     * Set showuserpicture
     *
     * @param integer $showuserpicture
     * @return MdlQuiz
     */
    public function setShowuserpicture($showuserpicture)
    {
        $this->showuserpicture = $showuserpicture;

        return $this;
    }

    /**
     * Get showuserpicture
     *
     * @return integer 
     */
    public function getShowuserpicture()
    {
        return $this->showuserpicture;
    }

    /**
     * Set showblocks
     *
     * @param integer $showblocks
     * @return MdlQuiz
     */
    public function setShowblocks($showblocks)
    {
        $this->showblocks = $showblocks;

        return $this;
    }

    /**
     * Get showblocks
     *
     * @return integer 
     */
    public function getShowblocks()
    {
        return $this->showblocks;
    }
}
