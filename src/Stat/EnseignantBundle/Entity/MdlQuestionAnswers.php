<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestionAnswers
 *
 * @ORM\Table(name="mdl_question_answers", indexes={@ORM\Index(name="mdl_quesansw_que_ix", columns={"question"})})
 * @ORM\Entity
 */
class MdlQuestionAnswers
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
     * @ORM\Column(name="question", type="bigint", nullable=false)
     */
    private $question = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="text", nullable=false)
     */
    private $answer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="answerformat", type="boolean", nullable=false)
     */
    private $answerformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fraction", type="decimal", precision=12, scale=7, nullable=false)
     */
    private $fraction = '0.0000000';

    /**
     * @var string
     *
     * @ORM\Column(name="feedback", type="text", nullable=false)
     */
    private $feedback;

    /**
     * @var boolean
     *
     * @ORM\Column(name="feedbackformat", type="boolean", nullable=false)
     */
    private $feedbackformat = '0';



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
     * Set question
     *
     * @param integer $question
     * @return MdlQuestionAnswers
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
     * Set answer
     *
     * @param string $answer
     * @return MdlQuestionAnswers
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
     * Set answerformat
     *
     * @param boolean $answerformat
     * @return MdlQuestionAnswers
     */
    public function setAnswerformat($answerformat)
    {
        $this->answerformat = $answerformat;

        return $this;
    }

    /**
     * Get answerformat
     *
     * @return boolean 
     */
    public function getAnswerformat()
    {
        return $this->answerformat;
    }

    /**
     * Set fraction
     *
     * @param string $fraction
     * @return MdlQuestionAnswers
     */
    public function setFraction($fraction)
    {
        $this->fraction = $fraction;

        return $this;
    }

    /**
     * Get fraction
     *
     * @return string 
     */
    public function getFraction()
    {
        return $this->fraction;
    }

    /**
     * Set feedback
     *
     * @param string $feedback
     * @return MdlQuestionAnswers
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * Get feedback
     *
     * @return string 
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Set feedbackformat
     *
     * @param boolean $feedbackformat
     * @return MdlQuestionAnswers
     */
    public function setFeedbackformat($feedbackformat)
    {
        $this->feedbackformat = $feedbackformat;

        return $this;
    }

    /**
     * Get feedbackformat
     *
     * @return boolean 
     */
    public function getFeedbackformat()
    {
        return $this->feedbackformat;
    }
}
