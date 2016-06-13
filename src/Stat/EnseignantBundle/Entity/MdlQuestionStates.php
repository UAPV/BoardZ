<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestionStates
 *
 * @ORM\Table(name="mdl_question_states", indexes={@ORM\Index(name="mdl_quesstat_att_ix", columns={"attempt"}), @ORM\Index(name="mdl_quesstat_que_ix", columns={"question"})})
 * @ORM\Entity
 */
class MdlQuestionStates
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
     * @ORM\Column(name="attempt", type="bigint", nullable=false)
     */
    private $attempt = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="question", type="bigint", nullable=false)
     */
    private $question = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="seq_number", type="integer", nullable=false)
     */
    private $seqNumber = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="text", nullable=false)
     */
    private $answer;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp", type="bigint", nullable=false)
     */
    private $timestamp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="event", type="smallint", nullable=false)
     */
    private $event = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="decimal", precision=12, scale=7, nullable=false)
     */
    private $grade = '0.0000000';

    /**
     * @var string
     *
     * @ORM\Column(name="raw_grade", type="decimal", precision=12, scale=7, nullable=false)
     */
    private $rawGrade = '0.0000000';

    /**
     * @var string
     *
     * @ORM\Column(name="penalty", type="decimal", precision=12, scale=7, nullable=false)
     */
    private $penalty = '0.0000000';



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
     * Set attempt
     *
     * @param integer $attempt
     * @return MdlQuestionStates
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
     * Set question
     *
     * @param integer $question
     * @return MdlQuestionStates
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return integer 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set seqNumber
     *
     * @param integer $seqNumber
     * @return MdlQuestionStates
     */
    public function setSeqNumber($seqNumber)
    {
        $this->seqNumber = $seqNumber;

        return $this;
    }

    /**
     * Get seqNumber
     *
     * @return integer 
     */
    public function getSeqNumber()
    {
        return $this->seqNumber;
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return MdlQuestionStates
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string 
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set timestamp
     *
     * @param integer $timestamp
     * @return MdlQuestionStates
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return integer 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set event
     *
     * @param integer $event
     * @return MdlQuestionStates
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return integer 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return MdlQuestionStates
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set rawGrade
     *
     * @param string $rawGrade
     * @return MdlQuestionStates
     */
    public function setRawGrade($rawGrade)
    {
        $this->rawGrade = $rawGrade;

        return $this;
    }

    /**
     * Get rawGrade
     *
     * @return string 
     */
    public function getRawGrade()
    {
        return $this->rawGrade;
    }

    /**
     * Set penalty
     *
     * @param string $penalty
     * @return MdlQuestionStates
     */
    public function setPenalty($penalty)
    {
        $this->penalty = $penalty;

        return $this;
    }

    /**
     * Get penalty
     *
     * @return string 
     */
    public function getPenalty()
    {
        return $this->penalty;
    }
}
