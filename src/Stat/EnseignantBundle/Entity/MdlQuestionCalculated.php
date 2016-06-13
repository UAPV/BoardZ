<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestionCalculated
 *
 * @ORM\Table(name="mdl_question_calculated", indexes={@ORM\Index(name="mdl_quescalc_ans_ix", columns={"answer"}), @ORM\Index(name="mdl_quescalc_que_ix", columns={"question"})})
 * @ORM\Entity
 */
class MdlQuestionCalculated
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
     * @var integer
     *
     * @ORM\Column(name="answer", type="bigint", nullable=false)
     */
    private $answer = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tolerance", type="string", length=20, nullable=false)
     */
    private $tolerance = '0.0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tolerancetype", type="bigint", nullable=false)
     */
    private $tolerancetype = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="correctanswerlength", type="bigint", nullable=false)
     */
    private $correctanswerlength = '2';

    /**
     * @var integer
     *
     * @ORM\Column(name="correctanswerformat", type="bigint", nullable=false)
     */
    private $correctanswerformat = '2';



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
     * @return MdlQuestionCalculated
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
     * @param integer $answer
     * @return MdlQuestionCalculated
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return integer 
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set tolerance
     *
     * @param string $tolerance
     * @return MdlQuestionCalculated
     */
    public function setTolerance($tolerance)
    {
        $this->tolerance = $tolerance;

        return $this;
    }

    /**
     * Get tolerance
     *
     * @return string 
     */
    public function getTolerance()
    {
        return $this->tolerance;
    }

    /**
     * Set tolerancetype
     *
     * @param integer $tolerancetype
     * @return MdlQuestionCalculated
     */
    public function setTolerancetype($tolerancetype)
    {
        $this->tolerancetype = $tolerancetype;

        return $this;
    }

    /**
     * Get tolerancetype
     *
     * @return integer 
     */
    public function getTolerancetype()
    {
        return $this->tolerancetype;
    }

    /**
     * Set correctanswerlength
     *
     * @param integer $correctanswerlength
     * @return MdlQuestionCalculated
     */
    public function setCorrectanswerlength($correctanswerlength)
    {
        $this->correctanswerlength = $correctanswerlength;

        return $this;
    }

    /**
     * Get correctanswerlength
     *
     * @return integer 
     */
    public function getCorrectanswerlength()
    {
        return $this->correctanswerlength;
    }

    /**
     * Set correctanswerformat
     *
     * @param integer $correctanswerformat
     * @return MdlQuestionCalculated
     */
    public function setCorrectanswerformat($correctanswerformat)
    {
        $this->correctanswerformat = $correctanswerformat;

        return $this;
    }

    /**
     * Get correctanswerformat
     *
     * @return integer 
     */
    public function getCorrectanswerformat()
    {
        return $this->correctanswerformat;
    }
}
