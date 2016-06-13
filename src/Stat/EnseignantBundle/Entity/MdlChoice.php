<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlChoice
 *
 * @ORM\Table(name="mdl_choice", indexes={@ORM\Index(name="mdl_choi_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlChoice
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
     * @ORM\Column(name="publish", type="boolean", nullable=false)
     */
    private $publish = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="showresults", type="boolean", nullable=false)
     */
    private $showresults = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="display", type="smallint", nullable=false)
     */
    private $display = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowupdate", type="boolean", nullable=false)
     */
    private $allowupdate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="showunanswered", type="boolean", nullable=false)
     */
    private $showunanswered = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="limitanswers", type="boolean", nullable=false)
     */
    private $limitanswers = '0';

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
     * @return MdlChoice
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
     * @return MdlChoice
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
     * @return MdlChoice
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
     * @return MdlChoice
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
     * Set publish
     *
     * @param boolean $publish
     * @return MdlChoice
     */
    public function setPublish($publish)
    {
        $this->publish = $publish;

        return $this;
    }

    /**
     * Get publish
     *
     * @return boolean 
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * Set showresults
     *
     * @param boolean $showresults
     * @return MdlChoice
     */
    public function setShowresults($showresults)
    {
        $this->showresults = $showresults;

        return $this;
    }

    /**
     * Get showresults
     *
     * @return boolean 
     */
    public function getShowresults()
    {
        return $this->showresults;
    }

    /**
     * Set display
     *
     * @param integer $display
     * @return MdlChoice
     */
    public function setDisplay($display)
    {
        $this->display = $display;

        return $this;
    }

    /**
     * Get display
     *
     * @return integer 
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Set allowupdate
     *
     * @param boolean $allowupdate
     * @return MdlChoice
     */
    public function setAllowupdate($allowupdate)
    {
        $this->allowupdate = $allowupdate;

        return $this;
    }

    /**
     * Get allowupdate
     *
     * @return boolean 
     */
    public function getAllowupdate()
    {
        return $this->allowupdate;
    }

    /**
     * Set showunanswered
     *
     * @param boolean $showunanswered
     * @return MdlChoice
     */
    public function setShowunanswered($showunanswered)
    {
        $this->showunanswered = $showunanswered;

        return $this;
    }

    /**
     * Get showunanswered
     *
     * @return boolean 
     */
    public function getShowunanswered()
    {
        return $this->showunanswered;
    }

    /**
     * Set limitanswers
     *
     * @param boolean $limitanswers
     * @return MdlChoice
     */
    public function setLimitanswers($limitanswers)
    {
        $this->limitanswers = $limitanswers;

        return $this;
    }

    /**
     * Get limitanswers
     *
     * @return boolean 
     */
    public function getLimitanswers()
    {
        return $this->limitanswers;
    }

    /**
     * Set timeopen
     *
     * @param integer $timeopen
     * @return MdlChoice
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
     * @return MdlChoice
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
     * @return MdlChoice
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
     * @return MdlChoice
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
