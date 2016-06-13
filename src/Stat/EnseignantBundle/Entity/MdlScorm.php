<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlScorm
 *
 * @ORM\Table(name="mdl_scorm", indexes={@ORM\Index(name="mdl_scor_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlScorm
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
     * @ORM\Column(name="scormtype", type="string", length=50, nullable=false)
     */
    private $scormtype = 'local';

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255, nullable=false)
     */
    private $reference = '';

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
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=9, nullable=false)
     */
    private $version = '';

    /**
     * @var float
     *
     * @ORM\Column(name="maxgrade", type="float", precision=10, scale=0, nullable=false)
     */
    private $maxgrade = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="grademethod", type="boolean", nullable=false)
     */
    private $grademethod = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="whatgrade", type="bigint", nullable=false)
     */
    private $whatgrade = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxattempt", type="bigint", nullable=false)
     */
    private $maxattempt = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="forcecompleted", type="boolean", nullable=false)
     */
    private $forcecompleted = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="forcenewattempt", type="boolean", nullable=false)
     */
    private $forcenewattempt = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="lastattemptlock", type="boolean", nullable=false)
     */
    private $lastattemptlock = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="displayattemptstatus", type="boolean", nullable=false)
     */
    private $displayattemptstatus = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="displaycoursestructure", type="boolean", nullable=false)
     */
    private $displaycoursestructure = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="updatefreq", type="boolean", nullable=false)
     */
    private $updatefreq = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sha1hash", type="string", length=40, nullable=true)
     */
    private $sha1hash;

    /**
     * @var string
     *
     * @ORM\Column(name="md5hash", type="string", length=32, nullable=false)
     */
    private $md5hash = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="revision", type="bigint", nullable=false)
     */
    private $revision = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="launch", type="bigint", nullable=false)
     */
    private $launch = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="skipview", type="boolean", nullable=false)
     */
    private $skipview = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="hidebrowse", type="boolean", nullable=false)
     */
    private $hidebrowse = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="hidetoc", type="boolean", nullable=false)
     */
    private $hidetoc = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="nav", type="boolean", nullable=false)
     */
    private $nav = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="navpositionleft", type="bigint", nullable=true)
     */
    private $navpositionleft = '-100';

    /**
     * @var integer
     *
     * @ORM\Column(name="navpositiontop", type="bigint", nullable=true)
     */
    private $navpositiontop = '-100';

    /**
     * @var boolean
     *
     * @ORM\Column(name="auto", type="boolean", nullable=false)
     */
    private $auto = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="popup", type="boolean", nullable=false)
     */
    private $popup = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="options", type="string", length=255, nullable=false)
     */
    private $options = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="width", type="bigint", nullable=false)
     */
    private $width = '100';

    /**
     * @var integer
     *
     * @ORM\Column(name="height", type="bigint", nullable=false)
     */
    private $height = '600';

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
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="completionstatusrequired", type="boolean", nullable=true)
     */
    private $completionstatusrequired;

    /**
     * @var boolean
     *
     * @ORM\Column(name="completionscorerequired", type="boolean", nullable=true)
     */
    private $completionscorerequired;



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
     * @return MdlScorm
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
     * @return MdlScorm
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
     * Set scormtype
     *
     * @param string $scormtype
     * @return MdlScorm
     */
    public function setScormtype($scormtype)
    {
        $this->scormtype = $scormtype;

        return $this;
    }

    /**
     * Get scormtype
     *
     * @return string 
     */
    public function getScormtype()
    {
        return $this->scormtype;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return MdlScorm
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set intro
     *
     * @param string $intro
     * @return MdlScorm
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
     * @return MdlScorm
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
     * Set version
     *
     * @param string $version
     * @return MdlScorm
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set maxgrade
     *
     * @param float $maxgrade
     * @return MdlScorm
     */
    public function setMaxgrade($maxgrade)
    {
        $this->maxgrade = $maxgrade;

        return $this;
    }

    /**
     * Get maxgrade
     *
     * @return float 
     */
    public function getMaxgrade()
    {
        return $this->maxgrade;
    }

    /**
     * Set grademethod
     *
     * @param boolean $grademethod
     * @return MdlScorm
     */
    public function setGrademethod($grademethod)
    {
        $this->grademethod = $grademethod;

        return $this;
    }

    /**
     * Get grademethod
     *
     * @return boolean 
     */
    public function getGrademethod()
    {
        return $this->grademethod;
    }

    /**
     * Set whatgrade
     *
     * @param integer $whatgrade
     * @return MdlScorm
     */
    public function setWhatgrade($whatgrade)
    {
        $this->whatgrade = $whatgrade;

        return $this;
    }

    /**
     * Get whatgrade
     *
     * @return integer 
     */
    public function getWhatgrade()
    {
        return $this->whatgrade;
    }

    /**
     * Set maxattempt
     *
     * @param integer $maxattempt
     * @return MdlScorm
     */
    public function setMaxattempt($maxattempt)
    {
        $this->maxattempt = $maxattempt;

        return $this;
    }

    /**
     * Get maxattempt
     *
     * @return integer 
     */
    public function getMaxattempt()
    {
        return $this->maxattempt;
    }

    /**
     * Set forcecompleted
     *
     * @param boolean $forcecompleted
     * @return MdlScorm
     */
    public function setForcecompleted($forcecompleted)
    {
        $this->forcecompleted = $forcecompleted;

        return $this;
    }

    /**
     * Get forcecompleted
     *
     * @return boolean 
     */
    public function getForcecompleted()
    {
        return $this->forcecompleted;
    }

    /**
     * Set forcenewattempt
     *
     * @param boolean $forcenewattempt
     * @return MdlScorm
     */
    public function setForcenewattempt($forcenewattempt)
    {
        $this->forcenewattempt = $forcenewattempt;

        return $this;
    }

    /**
     * Get forcenewattempt
     *
     * @return boolean 
     */
    public function getForcenewattempt()
    {
        return $this->forcenewattempt;
    }

    /**
     * Set lastattemptlock
     *
     * @param boolean $lastattemptlock
     * @return MdlScorm
     */
    public function setLastattemptlock($lastattemptlock)
    {
        $this->lastattemptlock = $lastattemptlock;

        return $this;
    }

    /**
     * Get lastattemptlock
     *
     * @return boolean 
     */
    public function getLastattemptlock()
    {
        return $this->lastattemptlock;
    }

    /**
     * Set displayattemptstatus
     *
     * @param boolean $displayattemptstatus
     * @return MdlScorm
     */
    public function setDisplayattemptstatus($displayattemptstatus)
    {
        $this->displayattemptstatus = $displayattemptstatus;

        return $this;
    }

    /**
     * Get displayattemptstatus
     *
     * @return boolean 
     */
    public function getDisplayattemptstatus()
    {
        return $this->displayattemptstatus;
    }

    /**
     * Set displaycoursestructure
     *
     * @param boolean $displaycoursestructure
     * @return MdlScorm
     */
    public function setDisplaycoursestructure($displaycoursestructure)
    {
        $this->displaycoursestructure = $displaycoursestructure;

        return $this;
    }

    /**
     * Get displaycoursestructure
     *
     * @return boolean 
     */
    public function getDisplaycoursestructure()
    {
        return $this->displaycoursestructure;
    }

    /**
     * Set updatefreq
     *
     * @param boolean $updatefreq
     * @return MdlScorm
     */
    public function setUpdatefreq($updatefreq)
    {
        $this->updatefreq = $updatefreq;

        return $this;
    }

    /**
     * Get updatefreq
     *
     * @return boolean 
     */
    public function getUpdatefreq()
    {
        return $this->updatefreq;
    }

    /**
     * Set sha1hash
     *
     * @param string $sha1hash
     * @return MdlScorm
     */
    public function setSha1hash($sha1hash)
    {
        $this->sha1hash = $sha1hash;

        return $this;
    }

    /**
     * Get sha1hash
     *
     * @return string 
     */
    public function getSha1hash()
    {
        return $this->sha1hash;
    }

    /**
     * Set md5hash
     *
     * @param string $md5hash
     * @return MdlScorm
     */
    public function setMd5hash($md5hash)
    {
        $this->md5hash = $md5hash;

        return $this;
    }

    /**
     * Get md5hash
     *
     * @return string 
     */
    public function getMd5hash()
    {
        return $this->md5hash;
    }

    /**
     * Set revision
     *
     * @param integer $revision
     * @return MdlScorm
     */
    public function setRevision($revision)
    {
        $this->revision = $revision;

        return $this;
    }

    /**
     * Get revision
     *
     * @return integer 
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * Set launch
     *
     * @param integer $launch
     * @return MdlScorm
     */
    public function setLaunch($launch)
    {
        $this->launch = $launch;

        return $this;
    }

    /**
     * Get launch
     *
     * @return integer 
     */
    public function getLaunch()
    {
        return $this->launch;
    }

    /**
     * Set skipview
     *
     * @param boolean $skipview
     * @return MdlScorm
     */
    public function setSkipview($skipview)
    {
        $this->skipview = $skipview;

        return $this;
    }

    /**
     * Get skipview
     *
     * @return boolean 
     */
    public function getSkipview()
    {
        return $this->skipview;
    }

    /**
     * Set hidebrowse
     *
     * @param boolean $hidebrowse
     * @return MdlScorm
     */
    public function setHidebrowse($hidebrowse)
    {
        $this->hidebrowse = $hidebrowse;

        return $this;
    }

    /**
     * Get hidebrowse
     *
     * @return boolean 
     */
    public function getHidebrowse()
    {
        return $this->hidebrowse;
    }

    /**
     * Set hidetoc
     *
     * @param boolean $hidetoc
     * @return MdlScorm
     */
    public function setHidetoc($hidetoc)
    {
        $this->hidetoc = $hidetoc;

        return $this;
    }

    /**
     * Get hidetoc
     *
     * @return boolean 
     */
    public function getHidetoc()
    {
        return $this->hidetoc;
    }

    /**
     * Set nav
     *
     * @param boolean $nav
     * @return MdlScorm
     */
    public function setNav($nav)
    {
        $this->nav = $nav;

        return $this;
    }

    /**
     * Get nav
     *
     * @return boolean 
     */
    public function getNav()
    {
        return $this->nav;
    }

    /**
     * Set navpositionleft
     *
     * @param integer $navpositionleft
     * @return MdlScorm
     */
    public function setNavpositionleft($navpositionleft)
    {
        $this->navpositionleft = $navpositionleft;

        return $this;
    }

    /**
     * Get navpositionleft
     *
     * @return integer 
     */
    public function getNavpositionleft()
    {
        return $this->navpositionleft;
    }

    /**
     * Set navpositiontop
     *
     * @param integer $navpositiontop
     * @return MdlScorm
     */
    public function setNavpositiontop($navpositiontop)
    {
        $this->navpositiontop = $navpositiontop;

        return $this;
    }

    /**
     * Get navpositiontop
     *
     * @return integer 
     */
    public function getNavpositiontop()
    {
        return $this->navpositiontop;
    }

    /**
     * Set auto
     *
     * @param boolean $auto
     * @return MdlScorm
     */
    public function setAuto($auto)
    {
        $this->auto = $auto;

        return $this;
    }

    /**
     * Get auto
     *
     * @return boolean 
     */
    public function getAuto()
    {
        return $this->auto;
    }

    /**
     * Set popup
     *
     * @param boolean $popup
     * @return MdlScorm
     */
    public function setPopup($popup)
    {
        $this->popup = $popup;

        return $this;
    }

    /**
     * Get popup
     *
     * @return boolean 
     */
    public function getPopup()
    {
        return $this->popup;
    }

    /**
     * Set options
     *
     * @param string $options
     * @return MdlScorm
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get options
     *
     * @return string 
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set width
     *
     * @param integer $width
     * @return MdlScorm
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
     * @return MdlScorm
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
     * Set timeopen
     *
     * @param integer $timeopen
     * @return MdlScorm
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
     * @return MdlScorm
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
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlScorm
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
     * Set completionstatusrequired
     *
     * @param boolean $completionstatusrequired
     * @return MdlScorm
     */
    public function setCompletionstatusrequired($completionstatusrequired)
    {
        $this->completionstatusrequired = $completionstatusrequired;

        return $this;
    }

    /**
     * Get completionstatusrequired
     *
     * @return boolean 
     */
    public function getCompletionstatusrequired()
    {
        return $this->completionstatusrequired;
    }

    /**
     * Set completionscorerequired
     *
     * @param boolean $completionscorerequired
     * @return MdlScorm
     */
    public function setCompletionscorerequired($completionscorerequired)
    {
        $this->completionscorerequired = $completionscorerequired;

        return $this;
    }

    /**
     * Get completionscorerequired
     *
     * @return boolean 
     */
    public function getCompletionscorerequired()
    {
        return $this->completionscorerequired;
    }
}
