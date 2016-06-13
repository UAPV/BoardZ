<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLesson
 *
 * @ORM\Table(name="mdl_lesson", indexes={@ORM\Index(name="mdl_less_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlLesson
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
     * @var integer
     *
     * @ORM\Column(name="practice", type="smallint", nullable=false)
     */
    private $practice = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="modattempts", type="smallint", nullable=false)
     */
    private $modattempts = '0';

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
     * @var integer
     *
     * @ORM\Column(name="dependency", type="bigint", nullable=false)
     */
    private $dependency = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="conditions", type="text", nullable=false)
     */
    private $conditions;

    /**
     * @var integer
     *
     * @ORM\Column(name="grade", type="smallint", nullable=false)
     */
    private $grade = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="custom", type="smallint", nullable=false)
     */
    private $custom = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ongoing", type="smallint", nullable=false)
     */
    private $ongoing = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="usemaxgrade", type="smallint", nullable=false)
     */
    private $usemaxgrade = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxanswers", type="smallint", nullable=false)
     */
    private $maxanswers = '4';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxattempts", type="smallint", nullable=false)
     */
    private $maxattempts = '5';

    /**
     * @var integer
     *
     * @ORM\Column(name="review", type="smallint", nullable=false)
     */
    private $review = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nextpagedefault", type="smallint", nullable=false)
     */
    private $nextpagedefault = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="feedback", type="smallint", nullable=false)
     */
    private $feedback = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="minquestions", type="smallint", nullable=false)
     */
    private $minquestions = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxpages", type="smallint", nullable=false)
     */
    private $maxpages = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timed", type="smallint", nullable=false)
     */
    private $timed = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxtime", type="bigint", nullable=false)
     */
    private $maxtime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="retake", type="smallint", nullable=false)
     */
    private $retake = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="activitylink", type="bigint", nullable=false)
     */
    private $activitylink = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mediafile", type="string", length=255, nullable=false)
     */
    private $mediafile = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="mediaheight", type="bigint", nullable=false)
     */
    private $mediaheight = '100';

    /**
     * @var integer
     *
     * @ORM\Column(name="mediawidth", type="bigint", nullable=false)
     */
    private $mediawidth = '650';

    /**
     * @var integer
     *
     * @ORM\Column(name="mediaclose", type="smallint", nullable=false)
     */
    private $mediaclose = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="slideshow", type="smallint", nullable=false)
     */
    private $slideshow = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="width", type="bigint", nullable=false)
     */
    private $width = '640';

    /**
     * @var integer
     *
     * @ORM\Column(name="height", type="bigint", nullable=false)
     */
    private $height = '480';

    /**
     * @var string
     *
     * @ORM\Column(name="bgcolor", type="string", length=7, nullable=false)
     */
    private $bgcolor = '#FFFFFF';

    /**
     * @var integer
     *
     * @ORM\Column(name="displayleft", type="smallint", nullable=false)
     */
    private $displayleft = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="displayleftif", type="smallint", nullable=false)
     */
    private $displayleftif = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="progressbar", type="smallint", nullable=false)
     */
    private $progressbar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="highscores", type="smallint", nullable=false)
     */
    private $highscores = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxhighscores", type="bigint", nullable=false)
     */
    private $maxhighscores = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="available", type="bigint", nullable=false)
     */
    private $available = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="deadline", type="bigint", nullable=false)
     */
    private $deadline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';



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
     * @return MdlLesson
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
     * @return MdlLesson
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
     * Set practice
     *
     * @param integer $practice
     * @return MdlLesson
     */
    public function setPractice($practice)
    {
        $this->practice = $practice;

        return $this;
    }

    /**
     * Get practice
     *
     * @return integer 
     */
    public function getPractice()
    {
        return $this->practice;
    }

    /**
     * Set modattempts
     *
     * @param integer $modattempts
     * @return MdlLesson
     */
    public function setModattempts($modattempts)
    {
        $this->modattempts = $modattempts;

        return $this;
    }

    /**
     * Get modattempts
     *
     * @return integer 
     */
    public function getModattempts()
    {
        return $this->modattempts;
    }

    /**
     * Set usepassword
     *
     * @param integer $usepassword
     * @return MdlLesson
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
     * @return MdlLesson
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
     * Set dependency
     *
     * @param integer $dependency
     * @return MdlLesson
     */
    public function setDependency($dependency)
    {
        $this->dependency = $dependency;

        return $this;
    }

    /**
     * Get dependency
     *
     * @return integer 
     */
    public function getDependency()
    {
        return $this->dependency;
    }

    /**
     * Set conditions
     *
     * @param string $conditions
     * @return MdlLesson
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * Get conditions
     *
     * @return string 
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Set grade
     *
     * @param integer $grade
     * @return MdlLesson
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
     * Set custom
     *
     * @param integer $custom
     * @return MdlLesson
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * Get custom
     *
     * @return integer 
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * Set ongoing
     *
     * @param integer $ongoing
     * @return MdlLesson
     */
    public function setOngoing($ongoing)
    {
        $this->ongoing = $ongoing;

        return $this;
    }

    /**
     * Get ongoing
     *
     * @return integer 
     */
    public function getOngoing()
    {
        return $this->ongoing;
    }

    /**
     * Set usemaxgrade
     *
     * @param integer $usemaxgrade
     * @return MdlLesson
     */
    public function setUsemaxgrade($usemaxgrade)
    {
        $this->usemaxgrade = $usemaxgrade;

        return $this;
    }

    /**
     * Get usemaxgrade
     *
     * @return integer 
     */
    public function getUsemaxgrade()
    {
        return $this->usemaxgrade;
    }

    /**
     * Set maxanswers
     *
     * @param integer $maxanswers
     * @return MdlLesson
     */
    public function setMaxanswers($maxanswers)
    {
        $this->maxanswers = $maxanswers;

        return $this;
    }

    /**
     * Get maxanswers
     *
     * @return integer 
     */
    public function getMaxanswers()
    {
        return $this->maxanswers;
    }

    /**
     * Set maxattempts
     *
     * @param integer $maxattempts
     * @return MdlLesson
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
     * Set review
     *
     * @param integer $review
     * @return MdlLesson
     */
    public function setReview($review)
    {
        $this->review = $review;

        return $this;
    }

    /**
     * Get review
     *
     * @return integer 
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * Set nextpagedefault
     *
     * @param integer $nextpagedefault
     * @return MdlLesson
     */
    public function setNextpagedefault($nextpagedefault)
    {
        $this->nextpagedefault = $nextpagedefault;

        return $this;
    }

    /**
     * Get nextpagedefault
     *
     * @return integer 
     */
    public function getNextpagedefault()
    {
        return $this->nextpagedefault;
    }

    /**
     * Set feedback
     *
     * @param integer $feedback
     * @return MdlLesson
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * Get feedback
     *
     * @return integer 
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Set minquestions
     *
     * @param integer $minquestions
     * @return MdlLesson
     */
    public function setMinquestions($minquestions)
    {
        $this->minquestions = $minquestions;

        return $this;
    }

    /**
     * Get minquestions
     *
     * @return integer 
     */
    public function getMinquestions()
    {
        return $this->minquestions;
    }

    /**
     * Set maxpages
     *
     * @param integer $maxpages
     * @return MdlLesson
     */
    public function setMaxpages($maxpages)
    {
        $this->maxpages = $maxpages;

        return $this;
    }

    /**
     * Get maxpages
     *
     * @return integer 
     */
    public function getMaxpages()
    {
        return $this->maxpages;
    }

    /**
     * Set timed
     *
     * @param integer $timed
     * @return MdlLesson
     */
    public function setTimed($timed)
    {
        $this->timed = $timed;

        return $this;
    }

    /**
     * Get timed
     *
     * @return integer 
     */
    public function getTimed()
    {
        return $this->timed;
    }

    /**
     * Set maxtime
     *
     * @param integer $maxtime
     * @return MdlLesson
     */
    public function setMaxtime($maxtime)
    {
        $this->maxtime = $maxtime;

        return $this;
    }

    /**
     * Get maxtime
     *
     * @return integer 
     */
    public function getMaxtime()
    {
        return $this->maxtime;
    }

    /**
     * Set retake
     *
     * @param integer $retake
     * @return MdlLesson
     */
    public function setRetake($retake)
    {
        $this->retake = $retake;

        return $this;
    }

    /**
     * Get retake
     *
     * @return integer 
     */
    public function getRetake()
    {
        return $this->retake;
    }

    /**
     * Set activitylink
     *
     * @param integer $activitylink
     * @return MdlLesson
     */
    public function setActivitylink($activitylink)
    {
        $this->activitylink = $activitylink;

        return $this;
    }

    /**
     * Get activitylink
     *
     * @return integer 
     */
    public function getActivitylink()
    {
        return $this->activitylink;
    }

    /**
     * Set mediafile
     *
     * @param string $mediafile
     * @return MdlLesson
     */
    public function setMediafile($mediafile)
    {
        $this->mediafile = $mediafile;

        return $this;
    }

    /**
     * Get mediafile
     *
     * @return string 
     */
    public function getMediafile()
    {
        return $this->mediafile;
    }

    /**
     * Set mediaheight
     *
     * @param integer $mediaheight
     * @return MdlLesson
     */
    public function setMediaheight($mediaheight)
    {
        $this->mediaheight = $mediaheight;

        return $this;
    }

    /**
     * Get mediaheight
     *
     * @return integer 
     */
    public function getMediaheight()
    {
        return $this->mediaheight;
    }

    /**
     * Set mediawidth
     *
     * @param integer $mediawidth
     * @return MdlLesson
     */
    public function setMediawidth($mediawidth)
    {
        $this->mediawidth = $mediawidth;

        return $this;
    }

    /**
     * Get mediawidth
     *
     * @return integer 
     */
    public function getMediawidth()
    {
        return $this->mediawidth;
    }

    /**
     * Set mediaclose
     *
     * @param integer $mediaclose
     * @return MdlLesson
     */
    public function setMediaclose($mediaclose)
    {
        $this->mediaclose = $mediaclose;

        return $this;
    }

    /**
     * Get mediaclose
     *
     * @return integer 
     */
    public function getMediaclose()
    {
        return $this->mediaclose;
    }

    /**
     * Set slideshow
     *
     * @param integer $slideshow
     * @return MdlLesson
     */
    public function setSlideshow($slideshow)
    {
        $this->slideshow = $slideshow;

        return $this;
    }

    /**
     * Get slideshow
     *
     * @return integer 
     */
    public function getSlideshow()
    {
        return $this->slideshow;
    }

    /**
     * Set width
     *
     * @param integer $width
     * @return MdlLesson
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return MdlLesson
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set bgcolor
     *
     * @param string $bgcolor
     * @return MdlLesson
     */
    public function setBgcolor($bgcolor)
    {
        $this->bgcolor = $bgcolor;

        return $this;
    }

    /**
     * Get bgcolor
     *
     * @return string 
     */
    public function getBgcolor()
    {
        return $this->bgcolor;
    }

    /**
     * Set displayleft
     *
     * @param integer $displayleft
     * @return MdlLesson
     */
    public function setDisplayleft($displayleft)
    {
        $this->displayleft = $displayleft;

        return $this;
    }

    /**
     * Get displayleft
     *
     * @return integer 
     */
    public function getDisplayleft()
    {
        return $this->displayleft;
    }

    /**
     * Set displayleftif
     *
     * @param integer $displayleftif
     * @return MdlLesson
     */
    public function setDisplayleftif($displayleftif)
    {
        $this->displayleftif = $displayleftif;

        return $this;
    }

    /**
     * Get displayleftif
     *
     * @return integer 
     */
    public function getDisplayleftif()
    {
        return $this->displayleftif;
    }

    /**
     * Set progressbar
     *
     * @param integer $progressbar
     * @return MdlLesson
     */
    public function setProgressbar($progressbar)
    {
        $this->progressbar = $progressbar;

        return $this;
    }

    /**
     * Get progressbar
     *
     * @return integer 
     */
    public function getProgressbar()
    {
        return $this->progressbar;
    }

    /**
     * Set highscores
     *
     * @param integer $highscores
     * @return MdlLesson
     */
    public function setHighscores($highscores)
    {
        $this->highscores = $highscores;

        return $this;
    }

    /**
     * Get highscores
     *
     * @return integer 
     */
    public function getHighscores()
    {
        return $this->highscores;
    }

    /**
     * Set maxhighscores
     *
     * @param integer $maxhighscores
     * @return MdlLesson
     */
    public function setMaxhighscores($maxhighscores)
    {
        $this->maxhighscores = $maxhighscores;

        return $this;
    }

    /**
     * Get maxhighscores
     *
     * @return integer 
     */
    public function getMaxhighscores()
    {
        return $this->maxhighscores;
    }

    /**
     * Set available
     *
     * @param integer $available
     * @return MdlLesson
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return integer 
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set deadline
     *
     * @param integer $deadline
     * @return MdlLesson
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Get deadline
     *
     * @return integer 
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlLesson
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
}
