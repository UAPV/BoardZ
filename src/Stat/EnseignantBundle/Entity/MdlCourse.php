<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourse
 *
 * @ORM\Table(name="mdl_course", indexes={@ORM\Index(name="mdl_cour_cat_ix", columns={"category"}), @ORM\Index(name="mdl_cour_idn_ix", columns={"idnumber"}), @ORM\Index(name="mdl_cour_sho_ix", columns={"shortname"}), @ORM\Index(name="mdl_cour_sor_ix", columns={"sortorder"})})
 * @ORM\Entity
 */
class MdlCourse
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
     * @ORM\Column(name="category", type="bigint", nullable=false)
     */
    private $category = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", length=254, nullable=false)
     */
    private $fullname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="shortname", type="string", length=255, nullable=false)
     */
    private $shortname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="idnumber", type="string", length=100, nullable=false)
     */
    private $idnumber = '';

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", nullable=true)
     */
    private $summary;

    /**
     * @var boolean
     *
     * @ORM\Column(name="summaryformat", type="boolean", nullable=false)
     */
    private $summaryformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=21, nullable=false)
     */
    private $format = 'topics';

    /**
     * @var boolean
     *
     * @ORM\Column(name="showgrades", type="boolean", nullable=false)
     */
    private $showgrades = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="newsitems", type="integer", nullable=false)
     */
    private $newsitems = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="startdate", type="bigint", nullable=false)
     */
    private $startdate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="marker", type="bigint", nullable=false)
     */
    private $marker = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxbytes", type="bigint", nullable=false)
     */
    private $maxbytes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="legacyfiles", type="smallint", nullable=false)
     */
    private $legacyfiles = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="showreports", type="smallint", nullable=false)
     */
    private $showreports = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false)
     */
    private $visible = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="visibleold", type="boolean", nullable=false)
     */
    private $visibleold = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="groupmode", type="smallint", nullable=false)
     */
    private $groupmode = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groupmodeforce", type="smallint", nullable=false)
     */
    private $groupmodeforce = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="defaultgroupingid", type="bigint", nullable=false)
     */
    private $defaultgroupingid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=30, nullable=false)
     */
    private $lang = '';

    /**
     * @var string
     *
     * @ORM\Column(name="calendartype", type="string", length=30, nullable=false)
     */
    private $calendartype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=50, nullable=false)
     */
    private $theme = '';

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
     * @var boolean
     *
     * @ORM\Column(name="requested", type="boolean", nullable=false)
     */
    private $requested = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="enablecompletion", type="boolean", nullable=false)
     */
    private $enablecompletion = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="completionnotify", type="boolean", nullable=false)
     */
    private $completionnotify = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="cacherev", type="bigint", nullable=false)
     */
    private $cacherev = '0';



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
     * Set category
     *
     * @param integer $category
     * @return MdlCourse
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return integer 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set sortorder
     *
     * @param integer $sortorder
     * @return MdlCourse
     */
    public function setSortorder($sortorder)
    {
        $this->sortorder = $sortorder;

        return $this;
    }

    /**
     * Get sortorder
     *
     * @return integer 
     */
    public function getSortorder()
    {
        return $this->sortorder;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     * @return MdlCourse
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set shortname
     *
     * @param string $shortname
     * @return MdlCourse
     */
    public function setShortname($shortname)
    {
        $this->shortname = $shortname;

        return $this;
    }

    /**
     * Get shortname
     *
     * @return string 
     */
    public function getShortname()
    {
        return $this->shortname;
    }

    /**
     * Set idnumber
     *
     * @param string $idnumber
     * @return MdlCourse
     */
    public function setIdnumber($idnumber)
    {
        $this->idnumber = $idnumber;

        return $this;
    }

    /**
     * Get idnumber
     *
     * @return string 
     */
    public function getIdnumber()
    {
        return $this->idnumber;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return MdlCourse
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set summaryformat
     *
     * @param boolean $summaryformat
     * @return MdlCourse
     */
    public function setSummaryformat($summaryformat)
    {
        $this->summaryformat = $summaryformat;

        return $this;
    }

    /**
     * Get summaryformat
     *
     * @return boolean 
     */
    public function getSummaryformat()
    {
        return $this->summaryformat;
    }

    /**
     * Set format
     *
     * @param string $format
     * @return MdlCourse
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return string 
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set showgrades
     *
     * @param boolean $showgrades
     * @return MdlCourse
     */
    public function setShowgrades($showgrades)
    {
        $this->showgrades = $showgrades;

        return $this;
    }

    /**
     * Get showgrades
     *
     * @return boolean 
     */
    public function getShowgrades()
    {
        return $this->showgrades;
    }

    /**
     * Set newsitems
     *
     * @param integer $newsitems
     * @return MdlCourse
     */
    public function setNewsitems($newsitems)
    {
        $this->newsitems = $newsitems;

        return $this;
    }

    /**
     * Get newsitems
     *
     * @return integer 
     */
    public function getNewsitems()
    {
        return $this->newsitems;
    }

    /**
     * Set startdate
     *
     * @param integer $startdate
     * @return MdlCourse
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return integer 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set marker
     *
     * @param integer $marker
     * @return MdlCourse
     */
    public function setMarker($marker)
    {
        $this->marker = $marker;

        return $this;
    }

    /**
     * Get marker
     *
     * @return integer 
     */
    public function getMarker()
    {
        return $this->marker;
    }

    /**
     * Set maxbytes
     *
     * @param integer $maxbytes
     * @return MdlCourse
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
     * Set legacyfiles
     *
     * @param integer $legacyfiles
     * @return MdlCourse
     */
    public function setLegacyfiles($legacyfiles)
    {
        $this->legacyfiles = $legacyfiles;

        return $this;
    }

    /**
     * Get legacyfiles
     *
     * @return integer 
     */
    public function getLegacyfiles()
    {
        return $this->legacyfiles;
    }

    /**
     * Set showreports
     *
     * @param integer $showreports
     * @return MdlCourse
     */
    public function setShowreports($showreports)
    {
        $this->showreports = $showreports;

        return $this;
    }

    /**
     * Get showreports
     *
     * @return integer 
     */
    public function getShowreports()
    {
        return $this->showreports;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return MdlCourse
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set visibleold
     *
     * @param boolean $visibleold
     * @return MdlCourse
     */
    public function setVisibleold($visibleold)
    {
        $this->visibleold = $visibleold;

        return $this;
    }

    /**
     * Get visibleold
     *
     * @return boolean 
     */
    public function getVisibleold()
    {
        return $this->visibleold;
    }

    /**
     * Set groupmode
     *
     * @param integer $groupmode
     * @return MdlCourse
     */
    public function setGroupmode($groupmode)
    {
        $this->groupmode = $groupmode;

        return $this;
    }

    /**
     * Get groupmode
     *
     * @return integer 
     */
    public function getGroupmode()
    {
        return $this->groupmode;
    }

    /**
     * Set groupmodeforce
     *
     * @param integer $groupmodeforce
     * @return MdlCourse
     */
    public function setGroupmodeforce($groupmodeforce)
    {
        $this->groupmodeforce = $groupmodeforce;

        return $this;
    }

    /**
     * Get groupmodeforce
     *
     * @return integer 
     */
    public function getGroupmodeforce()
    {
        return $this->groupmodeforce;
    }

    /**
     * Set defaultgroupingid
     *
     * @param integer $defaultgroupingid
     * @return MdlCourse
     */
    public function setDefaultgroupingid($defaultgroupingid)
    {
        $this->defaultgroupingid = $defaultgroupingid;

        return $this;
    }

    /**
     * Get defaultgroupingid
     *
     * @return integer 
     */
    public function getDefaultgroupingid()
    {
        return $this->defaultgroupingid;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return MdlCourse
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string 
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set calendartype
     *
     * @param string $calendartype
     * @return MdlCourse
     */
    public function setCalendartype($calendartype)
    {
        $this->calendartype = $calendartype;

        return $this;
    }

    /**
     * Get calendartype
     *
     * @return string 
     */
    public function getCalendartype()
    {
        return $this->calendartype;
    }

    /**
     * Set theme
     *
     * @param string $theme
     * @return MdlCourse
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlCourse
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
     * @return MdlCourse
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
     * Set requested
     *
     * @param boolean $requested
     * @return MdlCourse
     */
    public function setRequested($requested)
    {
        $this->requested = $requested;

        return $this;
    }

    /**
     * Get requested
     *
     * @return boolean 
     */
    public function getRequested()
    {
        return $this->requested;
    }

    /**
     * Set enablecompletion
     *
     * @param boolean $enablecompletion
     * @return MdlCourse
     */
    public function setEnablecompletion($enablecompletion)
    {
        $this->enablecompletion = $enablecompletion;

        return $this;
    }

    /**
     * Get enablecompletion
     *
     * @return boolean 
     */
    public function getEnablecompletion()
    {
        return $this->enablecompletion;
    }

    /**
     * Set completionnotify
     *
     * @param boolean $completionnotify
     * @return MdlCourse
     */
    public function setCompletionnotify($completionnotify)
    {
        $this->completionnotify = $completionnotify;

        return $this;
    }

    /**
     * Get completionnotify
     *
     * @return boolean 
     */
    public function getCompletionnotify()
    {
        return $this->completionnotify;
    }

    /**
     * Set cacherev
     *
     * @param integer $cacherev
     * @return MdlCourse
     */
    public function setCacherev($cacherev)
    {
        $this->cacherev = $cacherev;

        return $this;
    }

    /**
     * Get cacherev
     *
     * @return integer 
     */
    public function getCacherev()
    {
        return $this->cacherev;
    }
}
