<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlFeedback
 *
 * @ORM\Table(name="mdl_feedback", indexes={@ORM\Index(name="mdl_feed_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlFeedback
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
     * @ORM\Column(name="anonymous", type="boolean", nullable=false)
     */
    private $anonymous = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="email_notification", type="boolean", nullable=false)
     */
    private $emailNotification = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="multiple_submit", type="boolean", nullable=false)
     */
    private $multipleSubmit = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="autonumbering", type="boolean", nullable=false)
     */
    private $autonumbering = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="site_after_submit", type="string", length=255, nullable=false)
     */
    private $siteAfterSubmit = '';

    /**
     * @var string
     *
     * @ORM\Column(name="page_after_submit", type="text", nullable=false)
     */
    private $pageAfterSubmit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="page_after_submitformat", type="boolean", nullable=false)
     */
    private $pageAfterSubmitformat = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="publish_stats", type="boolean", nullable=false)
     */
    private $publishStats = '0';

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
     * @ORM\Column(name="completionsubmit", type="boolean", nullable=false)
     */
    private $completionsubmit = '0';



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
     * @return MdlFeedback
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
     * @return MdlFeedback
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
     * @return MdlFeedback
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
     * @return MdlFeedback
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
     * Set anonymous
     *
     * @param boolean $anonymous
     * @return MdlFeedback
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
     * Set emailNotification
     *
     * @param boolean $emailNotification
     * @return MdlFeedback
     */
    public function setEmailNotification($emailNotification)
    {
        $this->emailNotification = $emailNotification;

        return $this;
    }

    /**
     * Get emailNotification
     *
     * @return boolean 
     */
    public function getEmailNotification()
    {
        return $this->emailNotification;
    }

    /**
     * Set multipleSubmit
     *
     * @param boolean $multipleSubmit
     * @return MdlFeedback
     */
    public function setMultipleSubmit($multipleSubmit)
    {
        $this->multipleSubmit = $multipleSubmit;

        return $this;
    }

    /**
     * Get multipleSubmit
     *
     * @return boolean 
     */
    public function getMultipleSubmit()
    {
        return $this->multipleSubmit;
    }

    /**
     * Set autonumbering
     *
     * @param boolean $autonumbering
     * @return MdlFeedback
     */
    public function setAutonumbering($autonumbering)
    {
        $this->autonumbering = $autonumbering;

        return $this;
    }

    /**
     * Get autonumbering
     *
     * @return boolean 
     */
    public function getAutonumbering()
    {
        return $this->autonumbering;
    }

    /**
     * Set siteAfterSubmit
     *
     * @param string $siteAfterSubmit
     * @return MdlFeedback
     */
    public function setSiteAfterSubmit($siteAfterSubmit)
    {
        $this->siteAfterSubmit = $siteAfterSubmit;

        return $this;
    }

    /**
     * Get siteAfterSubmit
     *
     * @return string 
     */
    public function getSiteAfterSubmit()
    {
        return $this->siteAfterSubmit;
    }

    /**
     * Set pageAfterSubmit
     *
     * @param string $pageAfterSubmit
     * @return MdlFeedback
     */
    public function setPageAfterSubmit($pageAfterSubmit)
    {
        $this->pageAfterSubmit = $pageAfterSubmit;

        return $this;
    }

    /**
     * Get pageAfterSubmit
     *
     * @return string 
     */
    public function getPageAfterSubmit()
    {
        return $this->pageAfterSubmit;
    }

    /**
     * Set pageAfterSubmitformat
     *
     * @param boolean $pageAfterSubmitformat
     * @return MdlFeedback
     */
    public function setPageAfterSubmitformat($pageAfterSubmitformat)
    {
        $this->pageAfterSubmitformat = $pageAfterSubmitformat;

        return $this;
    }

    /**
     * Get pageAfterSubmitformat
     *
     * @return boolean 
     */
    public function getPageAfterSubmitformat()
    {
        return $this->pageAfterSubmitformat;
    }

    /**
     * Set publishStats
     *
     * @param boolean $publishStats
     * @return MdlFeedback
     */
    public function setPublishStats($publishStats)
    {
        $this->publishStats = $publishStats;

        return $this;
    }

    /**
     * Get publishStats
     *
     * @return boolean 
     */
    public function getPublishStats()
    {
        return $this->publishStats;
    }

    /**
     * Set timeopen
     *
     * @param integer $timeopen
     * @return MdlFeedback
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
     * @return MdlFeedback
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
     * @return MdlFeedback
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
     * Set completionsubmit
     *
     * @param boolean $completionsubmit
     * @return MdlFeedback
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
}
