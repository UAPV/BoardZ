<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuizAttempts
 *
 * @ORM\Table(name="mdl_quiz_attempts", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_quizatte_quiuseatt_uix", columns={"quiz", "userid", "attempt"}), @ORM\UniqueConstraint(name="mdl_quizatte_uni_uix", columns={"uniqueid"})}, indexes={@ORM\Index(name="mdl_quizatte_statim_ix", columns={"state", "timecheckstate"}), @ORM\Index(name="mdl_quizatte_qui_ix", columns={"quiz"}), @ORM\Index(name="mdl_quizatte_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlQuizAttempts
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
     * @ORM\Column(name="quiz", type="bigint", nullable=false)
     */
    private $quiz = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="attempt", type="integer", nullable=false)
     */
    private $attempt = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uniqueid", type="bigint", nullable=false)
     */
    private $uniqueid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="layout", type="text", nullable=false)
     */
    private $layout;

    /**
     * @var integer
     *
     * @ORM\Column(name="currentpage", type="bigint", nullable=false)
     */
    private $currentpage = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="preview", type="smallint", nullable=false)
     */
    private $preview = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=16, nullable=false)
     */
    private $state = 'inprogress';

    /**
     * @var integer
     *
     * @ORM\Column(name="timestart", type="bigint", nullable=false)
     */
    private $timestart = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timefinish", type="bigint", nullable=false)
     */
    private $timefinish = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timecheckstate", type="bigint", nullable=true)
     */
    private $timecheckstate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sumgrades", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $sumgrades;

    /**
     * @var integer
     *
     * @ORM\Column(name="needsupgradetonewqe", type="smallint", nullable=false)
     */
    private $needsupgradetonewqe = '0';



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
     * Set quiz
     *
     * @param integer $quiz
     * @return MdlQuizAttempts
     */
    public function setQuiz($quiz)
    {
        $this->quiz = $quiz;

        return $this;
    }

    /**
     * Get quiz
     *
     * @return integer 
     */
    public function getQuiz()
    {
        return $this->quiz;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlQuizAttempts
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set attempt
     *
     * @param integer $attempt
     * @return MdlQuizAttempts
     */
    public function setAttempt($attempt)
    {
        $this->attempt = $attempt;

        return $this;
    }

    /**
     * Get attempt
     *
     * @return integer 
     */
    public function getAttempt()
    {
        return $this->attempt;
    }

    /**
     * Set uniqueid
     *
     * @param integer $uniqueid
     * @return MdlQuizAttempts
     */
    public function setUniqueid($uniqueid)
    {
        $this->uniqueid = $uniqueid;

        return $this;
    }

    /**
     * Get uniqueid
     *
     * @return integer 
     */
    public function getUniqueid()
    {
        return $this->uniqueid;
    }

    /**
     * Set layout
     *
     * @param string $layout
     * @return MdlQuizAttempts
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;

        return $this;
    }

    /**
     * Get layout
     *
     * @return string 
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Set currentpage
     *
     * @param integer $currentpage
     * @return MdlQuizAttempts
     */
    public function setCurrentpage($currentpage)
    {
        $this->currentpage = $currentpage;

        return $this;
    }

    /**
     * Get currentpage
     *
     * @return integer 
     */
    public function getCurrentpage()
    {
        return $this->currentpage;
    }

    /**
     * Set preview
     *
     * @param integer $preview
     * @return MdlQuizAttempts
     */
    public function setPreview($preview)
    {
        $this->preview = $preview;

        return $this;
    }

    /**
     * Get preview
     *
     * @return integer 
     */
    public function getPreview()
    {
        return $this->preview;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return MdlQuizAttempts
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set timestart
     *
     * @param integer $timestart
     * @return MdlQuizAttempts
     */
    public function setTimestart($timestart)
    {
        $this->timestart = $timestart;

        return $this;
    }

    /**
     * Get timestart
     *
     * @return integer 
     */
    public function getTimestart()
    {
        return $this->timestart;
    }

    /**
     * Set timefinish
     *
     * @param integer $timefinish
     * @return MdlQuizAttempts
     */
    public function setTimefinish($timefinish)
    {
        $this->timefinish = $timefinish;

        return $this;
    }

    /**
     * Get timefinish
     *
     * @return integer 
     */
    public function getTimefinish()
    {
        return $this->timefinish;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlQuizAttempts
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
     * Set timecheckstate
     *
     * @param integer $timecheckstate
     * @return MdlQuizAttempts
     */
    public function setTimecheckstate($timecheckstate)
    {
        $this->timecheckstate = $timecheckstate;

        return $this;
    }

    /**
     * Get timecheckstate
     *
     * @return integer 
     */
    public function getTimecheckstate()
    {
        return $this->timecheckstate;
    }

    /**
     * Set sumgrades
     *
     * @param string $sumgrades
     * @return MdlQuizAttempts
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
     * Set needsupgradetonewqe
     *
     * @param integer $needsupgradetonewqe
     * @return MdlQuizAttempts
     */
    public function setNeedsupgradetonewqe($needsupgradetonewqe)
    {
        $this->needsupgradetonewqe = $needsupgradetonewqe;

        return $this;
    }

    /**
     * Get needsupgradetonewqe
     *
     * @return integer 
     */
    public function getNeedsupgradetonewqe()
    {
        return $this->needsupgradetonewqe;
    }
}
