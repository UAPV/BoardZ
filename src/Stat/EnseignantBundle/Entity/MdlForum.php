<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlForum
 *
 * @ORM\Table(name="mdl_forum", indexes={@ORM\Index(name="mdl_foru_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlForum
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
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type = 'general';

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
     * @ORM\Column(name="maxbytes", type="bigint", nullable=false)
     */
    private $maxbytes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxattachments", type="bigint", nullable=false)
     */
    private $maxattachments = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="forcesubscribe", type="boolean", nullable=false)
     */
    private $forcesubscribe = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="trackingtype", type="boolean", nullable=false)
     */
    private $trackingtype = '1';

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
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="warnafter", type="bigint", nullable=false)
     */
    private $warnafter = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="blockafter", type="bigint", nullable=false)
     */
    private $blockafter = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="blockperiod", type="bigint", nullable=false)
     */
    private $blockperiod = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="completiondiscussions", type="integer", nullable=false)
     */
    private $completiondiscussions = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="completionreplies", type="integer", nullable=false)
     */
    private $completionreplies = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="completionposts", type="integer", nullable=false)
     */
    private $completionposts = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="displaywordcount", type="boolean", nullable=false)
     */
    private $displaywordcount = '0';



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
     * @return MdlForum
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
     * Set type
     *
     * @param string $type
     * @return MdlForum
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlForum
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
     * @return MdlForum
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
     * @return MdlForum
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
     * Set assessed
     *
     * @param integer $assessed
     * @return MdlForum
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
     * @return MdlForum
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
     * @return MdlForum
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
     * @return MdlForum
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
     * Set maxbytes
     *
     * @param integer $maxbytes
     * @return MdlForum
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
     * Set maxattachments
     *
     * @param integer $maxattachments
     * @return MdlForum
     */
    public function setMaxattachments($maxattachments)
    {
        $this->maxattachments = $maxattachments;

        return $this;
    }

    /**
     * Get maxattachments
     *
     * @return integer 
     */
    public function getMaxattachments()
    {
        return $this->maxattachments;
    }

    /**
     * Set forcesubscribe
     *
     * @param boolean $forcesubscribe
     * @return MdlForum
     */
    public function setForcesubscribe($forcesubscribe)
    {
        $this->forcesubscribe = $forcesubscribe;

        return $this;
    }

    /**
     * Get forcesubscribe
     *
     * @return boolean 
     */
    public function getForcesubscribe()
    {
        return $this->forcesubscribe;
    }

    /**
     * Set trackingtype
     *
     * @param boolean $trackingtype
     * @return MdlForum
     */
    public function setTrackingtype($trackingtype)
    {
        $this->trackingtype = $trackingtype;

        return $this;
    }

    /**
     * Get trackingtype
     *
     * @return boolean 
     */
    public function getTrackingtype()
    {
        return $this->trackingtype;
    }

    /**
     * Set rsstype
     *
     * @param boolean $rsstype
     * @return MdlForum
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
     * @return MdlForum
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
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlForum
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
     * Set warnafter
     *
     * @param integer $warnafter
     * @return MdlForum
     */
    public function setWarnafter($warnafter)
    {
        $this->warnafter = $warnafter;

        return $this;
    }

    /**
     * Get warnafter
     *
     * @return integer 
     */
    public function getWarnafter()
    {
        return $this->warnafter;
    }

    /**
     * Set blockafter
     *
     * @param integer $blockafter
     * @return MdlForum
     */
    public function setBlockafter($blockafter)
    {
        $this->blockafter = $blockafter;

        return $this;
    }

    /**
     * Get blockafter
     *
     * @return integer 
     */
    public function getBlockafter()
    {
        return $this->blockafter;
    }

    /**
     * Set blockperiod
     *
     * @param integer $blockperiod
     * @return MdlForum
     */
    public function setBlockperiod($blockperiod)
    {
        $this->blockperiod = $blockperiod;

        return $this;
    }

    /**
     * Get blockperiod
     *
     * @return integer 
     */
    public function getBlockperiod()
    {
        return $this->blockperiod;
    }

    /**
     * Set completiondiscussions
     *
     * @param integer $completiondiscussions
     * @return MdlForum
     */
    public function setCompletiondiscussions($completiondiscussions)
    {
        $this->completiondiscussions = $completiondiscussions;

        return $this;
    }

    /**
     * Get completiondiscussions
     *
     * @return integer 
     */
    public function getCompletiondiscussions()
    {
        return $this->completiondiscussions;
    }

    /**
     * Set completionreplies
     *
     * @param integer $completionreplies
     * @return MdlForum
     */
    public function setCompletionreplies($completionreplies)
    {
        $this->completionreplies = $completionreplies;

        return $this;
    }

    /**
     * Get completionreplies
     *
     * @return integer 
     */
    public function getCompletionreplies()
    {
        return $this->completionreplies;
    }

    /**
     * Set completionposts
     *
     * @param integer $completionposts
     * @return MdlForum
     */
    public function setCompletionposts($completionposts)
    {
        $this->completionposts = $completionposts;

        return $this;
    }

    /**
     * Get completionposts
     *
     * @return integer 
     */
    public function getCompletionposts()
    {
        return $this->completionposts;
    }

    /**
     * Set displaywordcount
     *
     * @param boolean $displaywordcount
     * @return MdlForum
     */
    public function setDisplaywordcount($displaywordcount)
    {
        $this->displaywordcount = $displaywordcount;

        return $this;
    }

    /**
     * Get displaywordcount
     *
     * @return boolean 
     */
    public function getDisplaywordcount()
    {
        return $this->displaywordcount;
    }
}
