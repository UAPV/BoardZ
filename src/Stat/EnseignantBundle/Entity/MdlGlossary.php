<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGlossary
 *
 * @ORM\Table(name="mdl_glossary", indexes={@ORM\Index(name="mdl_glos_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlGlossary
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
     * @ORM\Column(name="allowduplicatedentries", type="boolean", nullable=false)
     */
    private $allowduplicatedentries = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="displayformat", type="string", length=50, nullable=false)
     */
    private $displayformat = 'dictionary';

    /**
     * @var boolean
     *
     * @ORM\Column(name="mainglossary", type="boolean", nullable=false)
     */
    private $mainglossary = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="showspecial", type="boolean", nullable=false)
     */
    private $showspecial = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="showalphabet", type="boolean", nullable=false)
     */
    private $showalphabet = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="showall", type="boolean", nullable=false)
     */
    private $showall = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowcomments", type="boolean", nullable=false)
     */
    private $allowcomments = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowprintview", type="boolean", nullable=false)
     */
    private $allowprintview = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="usedynalink", type="boolean", nullable=false)
     */
    private $usedynalink = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="defaultapproval", type="boolean", nullable=false)
     */
    private $defaultapproval = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="approvaldisplayformat", type="string", length=50, nullable=false)
     */
    private $approvaldisplayformat = 'default';

    /**
     * @var boolean
     *
     * @ORM\Column(name="globalglossary", type="boolean", nullable=false)
     */
    private $globalglossary = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entbypage", type="smallint", nullable=false)
     */
    private $entbypage = '10';

    /**
     * @var boolean
     *
     * @ORM\Column(name="editalways", type="boolean", nullable=false)
     */
    private $editalways = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="rsstype", type="boolean", nullable=false)
     */
    private $rsstype = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="rssarticles", type="boolean", nullable=false)
     */
    private $rssarticles = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="assessed", type="bigint", nullable=false)
     */
    private $assessed = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="assesstimestart", type="bigint", nullable=false)
     */
    private $assesstimestart = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="assesstimefinish", type="bigint", nullable=false)
     */
    private $assesstimefinish = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="scale", type="bigint", nullable=false)
     */
    private $scale = '0';

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
     * @var integer
     *
     * @ORM\Column(name="completionentries", type="integer", nullable=false)
     */
    private $completionentries = '0';



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
     * @return MdlGlossary
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
     * @return MdlGlossary
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
     * @return MdlGlossary
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
     * @return MdlGlossary
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
     * Set allowduplicatedentries
     *
     * @param boolean $allowduplicatedentries
     * @return MdlGlossary
     */
    public function setAllowduplicatedentries($allowduplicatedentries)
    {
        $this->allowduplicatedentries = $allowduplicatedentries;

        return $this;
    }

    /**
     * Get allowduplicatedentries
     *
     * @return boolean 
     */
    public function getAllowduplicatedentries()
    {
        return $this->allowduplicatedentries;
    }

    /**
     * Set displayformat
     *
     * @param string $displayformat
     * @return MdlGlossary
     */
    public function setDisplayformat($displayformat)
    {
        $this->displayformat = $displayformat;

        return $this;
    }

    /**
     * Get displayformat
     *
     * @return string 
     */
    public function getDisplayformat()
    {
        return $this->displayformat;
    }

    /**
     * Set mainglossary
     *
     * @param boolean $mainglossary
     * @return MdlGlossary
     */
    public function setMainglossary($mainglossary)
    {
        $this->mainglossary = $mainglossary;

        return $this;
    }

    /**
     * Get mainglossary
     *
     * @return boolean 
     */
    public function getMainglossary()
    {
        return $this->mainglossary;
    }

    /**
     * Set showspecial
     *
     * @param boolean $showspecial
     * @return MdlGlossary
     */
    public function setShowspecial($showspecial)
    {
        $this->showspecial = $showspecial;

        return $this;
    }

    /**
     * Get showspecial
     *
     * @return boolean 
     */
    public function getShowspecial()
    {
        return $this->showspecial;
    }

    /**
     * Set showalphabet
     *
     * @param boolean $showalphabet
     * @return MdlGlossary
     */
    public function setShowalphabet($showalphabet)
    {
        $this->showalphabet = $showalphabet;

        return $this;
    }

    /**
     * Get showalphabet
     *
     * @return boolean 
     */
    public function getShowalphabet()
    {
        return $this->showalphabet;
    }

    /**
     * Set showall
     *
     * @param boolean $showall
     * @return MdlGlossary
     */
    public function setShowall($showall)
    {
        $this->showall = $showall;

        return $this;
    }

    /**
     * Get showall
     *
     * @return boolean 
     */
    public function getShowall()
    {
        return $this->showall;
    }

    /**
     * Set allowcomments
     *
     * @param boolean $allowcomments
     * @return MdlGlossary
     */
    public function setAllowcomments($allowcomments)
    {
        $this->allowcomments = $allowcomments;

        return $this;
    }

    /**
     * Get allowcomments
     *
     * @return boolean 
     */
    public function getAllowcomments()
    {
        return $this->allowcomments;
    }

    /**
     * Set allowprintview
     *
     * @param boolean $allowprintview
     * @return MdlGlossary
     */
    public function setAllowprintview($allowprintview)
    {
        $this->allowprintview = $allowprintview;

        return $this;
    }

    /**
     * Get allowprintview
     *
     * @return boolean 
     */
    public function getAllowprintview()
    {
        return $this->allowprintview;
    }

    /**
     * Set usedynalink
     *
     * @param boolean $usedynalink
     * @return MdlGlossary
     */
    public function setUsedynalink($usedynalink)
    {
        $this->usedynalink = $usedynalink;

        return $this;
    }

    /**
     * Get usedynalink
     *
     * @return boolean 
     */
    public function getUsedynalink()
    {
        return $this->usedynalink;
    }

    /**
     * Set defaultapproval
     *
     * @param boolean $defaultapproval
     * @return MdlGlossary
     */
    public function setDefaultapproval($defaultapproval)
    {
        $this->defaultapproval = $defaultapproval;

        return $this;
    }

    /**
     * Get defaultapproval
     *
     * @return boolean 
     */
    public function getDefaultapproval()
    {
        return $this->defaultapproval;
    }

    /**
     * Set approvaldisplayformat
     *
     * @param string $approvaldisplayformat
     * @return MdlGlossary
     */
    public function setApprovaldisplayformat($approvaldisplayformat)
    {
        $this->approvaldisplayformat = $approvaldisplayformat;

        return $this;
    }

    /**
     * Get approvaldisplayformat
     *
     * @return string 
     */
    public function getApprovaldisplayformat()
    {
        return $this->approvaldisplayformat;
    }

    /**
     * Set globalglossary
     *
     * @param boolean $globalglossary
     * @return MdlGlossary
     */
    public function setGlobalglossary($globalglossary)
    {
        $this->globalglossary = $globalglossary;

        return $this;
    }

    /**
     * Get globalglossary
     *
     * @return boolean 
     */
    public function getGlobalglossary()
    {
        return $this->globalglossary;
    }

    /**
     * Set entbypage
     *
     * @param integer $entbypage
     * @return MdlGlossary
     */
    public function setEntbypage($entbypage)
    {
        $this->entbypage = $entbypage;

        return $this;
    }

    /**
     * Get entbypage
     *
     * @return integer 
     */
    public function getEntbypage()
    {
        return $this->entbypage;
    }

    /**
     * Set editalways
     *
     * @param boolean $editalways
     * @return MdlGlossary
     */
    public function setEditalways($editalways)
    {
        $this->editalways = $editalways;

        return $this;
    }

    /**
     * Get editalways
     *
     * @return boolean 
     */
    public function getEditalways()
    {
        return $this->editalways;
    }

    /**
     * Set rsstype
     *
     * @param boolean $rsstype
     * @return MdlGlossary
     */
    public function setRsstype($rsstype)
    {
        $this->rsstype = $rsstype;

        return $this;
    }

    /**
     * Get rsstype
     *
     * @return boolean 
     */
    public function getRsstype()
    {
        return $this->rsstype;
    }

    /**
     * Set rssarticles
     *
     * @param boolean $rssarticles
     * @return MdlGlossary
     */
    public function setRssarticles($rssarticles)
    {
        $this->rssarticles = $rssarticles;

        return $this;
    }

    /**
     * Get rssarticles
     *
     * @return boolean 
     */
    public function getRssarticles()
    {
        return $this->rssarticles;
    }

    /**
     * Set assessed
     *
     * @param integer $assessed
     * @return MdlGlossary
     */
    public function setAssessed($assessed)
    {
        $this->assessed = $assessed;

        return $this;
    }

    /**
     * Get assessed
     *
     * @return integer 
     */
    public function getAssessed()
    {
        return $this->assessed;
    }

    /**
     * Set assesstimestart
     *
     * @param integer $assesstimestart
     * @return MdlGlossary
     */
    public function setAssesstimestart($assesstimestart)
    {
        $this->assesstimestart = $assesstimestart;

        return $this;
    }

    /**
     * Get assesstimestart
     *
     * @return integer 
     */
    public function getAssesstimestart()
    {
        return $this->assesstimestart;
    }

    /**
     * Set assesstimefinish
     *
     * @param integer $assesstimefinish
     * @return MdlGlossary
     */
    public function setAssesstimefinish($assesstimefinish)
    {
        $this->assesstimefinish = $assesstimefinish;

        return $this;
    }

    /**
     * Get assesstimefinish
     *
     * @return integer 
     */
    public function getAssesstimefinish()
    {
        return $this->assesstimefinish;
    }

    /**
     * Set scale
     *
     * @param integer $scale
     * @return MdlGlossary
     */
    public function setScale($scale)
    {
        $this->scale = $scale;

        return $this;
    }

    /**
     * Get scale
     *
     * @return integer 
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlGlossary
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
     * @return MdlGlossary
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
     * Set completionentries
     *
     * @param integer $completionentries
     * @return MdlGlossary
     */
    public function setCompletionentries($completionentries)
    {
        $this->completionentries = $completionentries;

        return $this;
    }

    /**
     * Get completionentries
     *
     * @return integer 
     */
    public function getCompletionentries()
    {
        return $this->completionentries;
    }
}
