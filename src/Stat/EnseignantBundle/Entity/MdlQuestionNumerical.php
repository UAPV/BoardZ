<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestionNumerical
 *
 * @ORM\Table(name="mdl_question_numerical", indexes={@ORM\Index(name="mdl_quesnume_ans_ix", columns={"answer"}), @ORM\Index(name="mdl_quesnume_que_ix", columns={"question"})})
 * @ORM\Entity
 */
class MdlQuestionNumerical
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
     * @ORM\Column(name="tolerance", type="string", length=255, nullable=false)
     */
    private $tolerance = '0.0';



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
     * @return MdlQuestionNumerical
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
     * @return MdlQuestionNumerical
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
     * @return MdlQuestionNumerical
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
}
