<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestionAttempts
 *
 * @ORM\Table(name="mdl_question_attempts", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_quesatte_queslo_uix", columns={"questionusageid", "slot"})}, indexes={@ORM\Index(name="mdl_quesatte_que_ix", columns={"questionid"}), @ORM\Index(name="mdl_quesatte_que2_ix", columns={"questionusageid"})})
 * @ORM\Entity
 */
class MdlQuestionAttempts
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
     * @ORM\Column(name="questionusageid", type="bigint", nullable=false)
     */
    private $questionusageid;

    /**
     * @var integer
     *
     * @ORM\Column(name="slot", type="bigint", nullable=false)
     */
    private $slot;

    /**
     * @var string
     *
     * @ORM\Column(name="behaviour", type="string", length=32, nullable=false)
     */
    private $behaviour = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="questionid", type="bigint", nullable=false)
     */
    private $questionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="variant", type="bigint", nullable=false)
     */
    private $variant = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="maxmark", type="decimal", precision=12, scale=7, nullable=false)
     */
    private $maxmark;

    /**
     * @var string
     *
     * @ORM\Column(name="minfraction", type="decimal", precision=12, scale=7, nullable=false)
     */
    private $minfraction;

    /**
     * @var string
     *
     * @ORM\Column(name="maxfraction", type="decimal", precision=12, scale=7, nullable=false)
     */
    private $maxfraction = '1.0000000';

    /**
     * @var boolean
     *
     * @ORM\Column(name="flagged", type="boolean", nullable=false)
     */
    private $flagged = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="questionsummary", type="text", nullable=true)
     */
    private $questionsummary;

    /**
     * @var string
     *
     * @ORM\Column(name="rightanswer", type="text", nullable=true)
     */
    private $rightanswer;

    /**
     * @var string
     *
     * @ORM\Column(name="responsesummary", type="text", nullable=true)
     */
    private $responsesummary;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;



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
     * Set questionusageid
     *
     * @param integer $questionusageid
     * @return MdlQuestionAttempts
     */
    public function setQuestionusageid($questionusageid)
    {
        $this->questionusageid = $questionusageid;

        return $this;
    }

    /**
     * Get questionusageid
     *
     * @return integer 
     */
    public function getQuestionusageid()
    {
        return $this->questionusageid;
    }

    /**
     * Set slot
     *
     * @param integer $slot
     * @return MdlQuestionAttempts
     */
    public function setSlot($slot)
    {
        $this->slot = $slot;

        return $this;
    }

    /**
     * Get slot
     *
     * @return integer 
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * Set behaviour
     *
     * @param string $behaviour
     * @return MdlQuestionAttempts
     */
    public function setBehaviour($behaviour)
    {
        $this->behaviour = $behaviour;

        return $this;
    }

    /**
     * Get behaviour
     *
     * @return string 
     */
    public function getBehaviour()
    {
        return $this->behaviour;
    }

    /**
     * Set questionid
     *
     * @param integer $questionid
     * @return MdlQuestionAttempts
     */
    public function setQuestionid($questionid)
    {
        $this->questionid = $questionid;

        return $this;
    }

    /**
     * Get questionid
     *
     * @return integer 
     */
    public function getQuestionid()
    {
        return $this->questionid;
    }

    /**
     * Set variant
     *
     * @param integer $variant
     * @return MdlQuestionAttempts
     */
    public function setVariant($variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * Get variant
     *
     * @return integer 
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * Set maxmark
     *
     * @param string $maxmark
     * @return MdlQuestionAttempts
     */
    public function setMaxmark($maxmark)
    {
        $this->maxmark = $maxmark;

        return $this;
    }

    /**
     * Get maxmark
     *
     * @return string 
     */
    public function getMaxmark()
    {
        return $this->maxmark;
    }

    /**
     * Set minfraction
     *
     * @param string $minfraction
     * @return MdlQuestionAttempts
     */
    public function setMinfraction($minfraction)
    {
        $this->minfraction = $minfraction;

        return $this;
    }

    /**
     * Get minfraction
     *
     * @return string 
     */
    public function getMinfraction()
    {
        return $this->minfraction;
    }

    /**
     * Set maxfraction
     *
     * @param string $maxfraction
     * @return MdlQuestionAttempts
     */
    public function setMaxfraction($maxfraction)
    {
        $this->maxfraction = $maxfraction;

        return $this;
    }

    /**
     * Get maxfraction
     *
     * @return string 
     */
    public function getMaxfraction()
    {
        return $this->maxfraction;
    }

    /**
     * Set flagged
     *
     * @param boolean $flagged
     * @return MdlQuestionAttempts
     */
    public function setFlagged($flagged)
    {
        $this->flagged = $flagged;

        return $this;
    }

    /**
     * Get flagged
     *
     * @return boolean 
     */
    public function getFlagged()
    {
        return $this->flagged;
    }

    /**
     * Set questionsummary
     *
     * @param string $questionsummary
     * @return MdlQuestionAttempts
     */
    public function setQuestionsummary($questionsummary)
    {
        $this->questionsummary = $questionsummary;

        return $this;
    }

    /**
     * Get questionsummary
     *
     * @return string 
     */
    public function getQuestionsummary()
    {
        return $this->questionsummary;
    }

    /**
     * Set rightanswer
     *
     * @param string $rightanswer
     * @return MdlQuestionAttempts
     */
    public function setRightanswer($rightanswer)
    {
        $this->rightanswer = $rightanswer;

        return $this;
    }

    /**
     * Get rightanswer
     *
     * @return string 
     */
    public function getRightanswer()
    {
        return $this->rightanswer;
    }

    /**
     * Set responsesummary
     *
     * @param string $responsesummary
     * @return MdlQuestionAttempts
     */
    public function setResponsesummary($responsesummary)
    {
        $this->responsesummary = $responsesummary;

        return $this;
    }

    /**
     * Get responsesummary
     *
     * @return string 
     */
    public function getResponsesummary()
    {
        return $this->responsesummary;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlQuestionAttempts
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
