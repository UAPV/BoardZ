<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlData
 *
 * @ORM\Table(name="mdl_data", indexes={@ORM\Index(name="mdl_data_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlData
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
     * @ORM\Column(name="comments", type="smallint", nullable=false)
     */
    private $comments = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timeavailablefrom", type="bigint", nullable=false)
     */
    private $timeavailablefrom = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timeavailableto", type="bigint", nullable=false)
     */
    private $timeavailableto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timeviewfrom", type="bigint", nullable=false)
     */
    private $timeviewfrom = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timeviewto", type="bigint", nullable=false)
     */
    private $timeviewto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="requiredentries", type="integer", nullable=false)
     */
    private $requiredentries = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="requiredentriestoview", type="integer", nullable=false)
     */
    private $requiredentriestoview = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxentries", type="integer", nullable=false)
     */
    private $maxentries = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rssarticles", type="smallint", nullable=false)
     */
    private $rssarticles = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="singletemplate", type="text", nullable=true)
     */
    private $singletemplate;

    /**
     * @var string
     *
     * @ORM\Column(name="listtemplate", type="text", nullable=true)
     */
    private $listtemplate;

    /**
     * @var string
     *
     * @ORM\Column(name="listtemplateheader", type="text", nullable=true)
     */
    private $listtemplateheader;

    /**
     * @var string
     *
     * @ORM\Column(name="listtemplatefooter", type="text", nullable=true)
     */
    private $listtemplatefooter;

    /**
     * @var string
     *
     * @ORM\Column(name="addtemplate", type="text", nullable=true)
     */
    private $addtemplate;

    /**
     * @var string
     *
     * @ORM\Column(name="rsstemplate", type="text", nullable=true)
     */
    private $rsstemplate;

    /**
     * @var string
     *
     * @ORM\Column(name="rsstitletemplate", type="text", nullable=true)
     */
    private $rsstitletemplate;

    /**
     * @var string
     *
     * @ORM\Column(name="csstemplate", type="text", nullable=true)
     */
    private $csstemplate;

    /**
     * @var string
     *
     * @ORM\Column(name="jstemplate", type="text", nullable=true)
     */
    private $jstemplate;

    /**
     * @var string
     *
     * @ORM\Column(name="asearchtemplate", type="text", nullable=true)
     */
    private $asearchtemplate;

    /**
     * @var integer
     *
     * @ORM\Column(name="approval", type="smallint", nullable=false)
     */
    private $approval = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="scale", type="bigint", nullable=false)
     */
    private $scale = '0';

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
     * @ORM\Column(name="defaultsort", type="bigint", nullable=false)
     */
    private $defaultsort = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="defaultsortdir", type="smallint", nullable=false)
     */
    private $defaultsortdir = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="editany", type="smallint", nullable=false)
     */
    private $editany = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="notification", type="bigint", nullable=false)
     */
    private $notification = '0';



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
     * @return MdlData
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
     * @return MdlData
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
     * @return MdlData
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
     * @return MdlData
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
     * Set comments
     *
     * @param integer $comments
     * @return MdlData
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return integer 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set timeavailablefrom
     *
     * @param integer $timeavailablefrom
     * @return MdlData
     */
    public function setTimeavailablefrom($timeavailablefrom)
    {
        $this->timeavailablefrom = $timeavailablefrom;

        return $this;
    }

    /**
     * Get timeavailablefrom
     *
     * @return integer 
     */
    public function getTimeavailablefrom()
    {
        return $this->timeavailablefrom;
    }

    /**
     * Set timeavailableto
     *
     * @param integer $timeavailableto
     * @return MdlData
     */
    public function setTimeavailableto($timeavailableto)
    {
        $this->timeavailableto = $timeavailableto;

        return $this;
    }

    /**
     * Get timeavailableto
     *
     * @return integer 
     */
    public function getTimeavailableto()
    {
        return $this->timeavailableto;
    }

    /**
     * Set timeviewfrom
     *
     * @param integer $timeviewfrom
     * @return MdlData
     */
    public function setTimeviewfrom($timeviewfrom)
    {
        $this->timeviewfrom = $timeviewfrom;

        return $this;
    }

    /**
     * Get timeviewfrom
     *
     * @return integer 
     */
    public function getTimeviewfrom()
    {
        return $this->timeviewfrom;
    }

    /**
     * Set timeviewto
     *
     * @param integer $timeviewto
     * @return MdlData
     */
    public function setTimeviewto($timeviewto)
    {
        $this->timeviewto = $timeviewto;

        return $this;
    }

    /**
     * Get timeviewto
     *
     * @return integer 
     */
    public function getTimeviewto()
    {
        return $this->timeviewto;
    }

    /**
     * Set requiredentries
     *
     * @param integer $requiredentries
     * @return MdlData
     */
    public function setRequiredentries($requiredentries)
    {
        $this->requiredentries = $requiredentries;

        return $this;
    }

    /**
     * Get requiredentries
     *
     * @return integer 
     */
    public function getRequiredentries()
    {
        return $this->requiredentries;
    }

    /**
     * Set requiredentriestoview
     *
     * @param integer $requiredentriestoview
     * @return MdlData
     */
    public function setRequiredentriestoview($requiredentriestoview)
    {
        $this->requiredentriestoview = $requiredentriestoview;

        return $this;
    }

    /**
     * Get requiredentriestoview
     *
     * @return integer 
     */
    public function getRequiredentriestoview()
    {
        return $this->requiredentriestoview;
    }

    /**
     * Set maxentries
     *
     * @param integer $maxentries
     * @return MdlData
     */
    public function setMaxentries($maxentries)
    {
        $this->maxentries = $maxentries;

        return $this;
    }

    /**
     * Get maxentries
     *
     * @return integer 
     */
    public function getMaxentries()
    {
        return $this->maxentries;
    }

    /**
     * Set rssarticles
     *
     * @param integer $rssarticles
     * @return MdlData
     */
    public function setRssarticles($rssarticles)
    {
        $this->rssarticles = $rssarticles;

        return $this;
    }

    /**
     * Get rssarticles
     *
     * @return integer 
     */
    public function getRssarticles()
    {
        return $this->rssarticles;
    }

    /**
     * Set singletemplate
     *
     * @param string $singletemplate
     * @return MdlData
     */
    public function setSingletemplate($singletemplate)
    {
        $this->singletemplate = $singletemplate;

        return $this;
    }

    /**
     * Get singletemplate
     *
     * @return string 
     */
    public function getSingletemplate()
    {
        return $this->singletemplate;
    }

    /**
     * Set listtemplate
     *
     * @param string $listtemplate
     * @return MdlData
     */
    public function setListtemplate($listtemplate)
    {
        $this->listtemplate = $listtemplate;

        return $this;
    }

    /**
     * Get listtemplate
     *
     * @return string 
     */
    public function getListtemplate()
    {
        return $this->listtemplate;
    }

    /**
     * Set listtemplateheader
     *
     * @param string $listtemplateheader
     * @return MdlData
     */
    public function setListtemplateheader($listtemplateheader)
    {
        $this->listtemplateheader = $listtemplateheader;

        return $this;
    }

    /**
     * Get listtemplateheader
     *
     * @return string 
     */
    public function getListtemplateheader()
    {
        return $this->listtemplateheader;
    }

    /**
     * Set listtemplatefooter
     *
     * @param string $listtemplatefooter
     * @return MdlData
     */
    public function setListtemplatefooter($listtemplatefooter)
    {
        $this->listtemplatefooter = $listtemplatefooter;

        return $this;
    }

    /**
     * Get listtemplatefooter
     *
     * @return string 
     */
    public function getListtemplatefooter()
    {
        return $this->listtemplatefooter;
    }

    /**
     * Set addtemplate
     *
     * @param string $addtemplate
     * @return MdlData
     */
    public function setAddtemplate($addtemplate)
    {
        $this->addtemplate = $addtemplate;

        return $this;
    }

    /**
     * Get addtemplate
     *
     * @return string 
     */
    public function getAddtemplate()
    {
        return $this->addtemplate;
    }

    /**
     * Set rsstemplate
     *
     * @param string $rsstemplate
     * @return MdlData
     */
    public function setRsstemplate($rsstemplate)
    {
        $this->rsstemplate = $rsstemplate;

        return $this;
    }

    /**
     * Get rsstemplate
     *
     * @return string 
     */
    public function getRsstemplate()
    {
        return $this->rsstemplate;
    }

    /**
     * Set rsstitletemplate
     *
     * @param string $rsstitletemplate
     * @return MdlData
     */
    public function setRsstitletemplate($rsstitletemplate)
    {
        $this->rsstitletemplate = $rsstitletemplate;

        return $this;
    }

    /**
     * Get rsstitletemplate
     *
     * @return string 
     */
    public function getRsstitletemplate()
    {
        return $this->rsstitletemplate;
    }

    /**
     * Set csstemplate
     *
     * @param string $csstemplate
     * @return MdlData
     */
    public function setCsstemplate($csstemplate)
    {
        $this->csstemplate = $csstemplate;

        return $this;
    }

    /**
     * Get csstemplate
     *
     * @return string 
     */
    public function getCsstemplate()
    {
        return $this->csstemplate;
    }

    /**
     * Set jstemplate
     *
     * @param string $jstemplate
     * @return MdlData
     */
    public function setJstemplate($jstemplate)
    {
        $this->jstemplate = $jstemplate;

        return $this;
    }

    /**
     * Get jstemplate
     *
     * @return string 
     */
    public function getJstemplate()
    {
        return $this->jstemplate;
    }

    /**
     * Set asearchtemplate
     *
     * @param string $asearchtemplate
     * @return MdlData
     */
    public function setAsearchtemplate($asearchtemplate)
    {
        $this->asearchtemplate = $asearchtemplate;

        return $this;
    }

    /**
     * Get asearchtemplate
     *
     * @return string 
     */
    public function getAsearchtemplate()
    {
        return $this->asearchtemplate;
    }

    /**
     * Set approval
     *
     * @param integer $approval
     * @return MdlData
     */
    public function setApproval($approval)
    {
        $this->approval = $approval;

        return $this;
    }

    /**
     * Get approval
     *
     * @return integer 
     */
    public function getApproval()
    {
        return $this->approval;
    }

    /**
     * Set scale
     *
     * @param integer $scale
     * @return MdlData
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
     * Set assessed
     *
     * @param integer $assessed
     * @return MdlData
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
     * @return MdlData
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
     * @return MdlData
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
     * Set defaultsort
     *
     * @param integer $defaultsort
     * @return MdlData
     */
    public function setDefaultsort($defaultsort)
    {
        $this->defaultsort = $defaultsort;

        return $this;
    }

    /**
     * Get defaultsort
     *
     * @return integer 
     */
    public function getDefaultsort()
    {
        return $this->defaultsort;
    }

    /**
     * Set defaultsortdir
     *
     * @param integer $defaultsortdir
     * @return MdlData
     */
    public function setDefaultsortdir($defaultsortdir)
    {
        $this->defaultsortdir = $defaultsortdir;

        return $this;
    }

    /**
     * Get defaultsortdir
     *
     * @return integer 
     */
    public function getDefaultsortdir()
    {
        return $this->defaultsortdir;
    }

    /**
     * Set editany
     *
     * @param integer $editany
     * @return MdlData
     */
    public function setEditany($editany)
    {
        $this->editany = $editany;

        return $this;
    }

    /**
     * Get editany
     *
     * @return integer 
     */
    public function getEditany()
    {
        return $this->editany;
    }

    /**
     * Set notification
     *
     * @param integer $notification
     * @return MdlData
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;

        return $this;
    }

    /**
     * Get notification
     *
     * @return integer 
     */
    public function getNotification()
    {
        return $this->notification;
    }
}
