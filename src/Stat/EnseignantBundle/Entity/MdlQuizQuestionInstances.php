<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuizQuestionInstances
 *
 * @ORM\Table(name="mdl_quiz_question_instances", indexes={@ORM\Index(name="mdl_quizquesinst_qui_ix", columns={"quiz"}), @ORM\Index(name="mdl_quizquesinst_que_ix", columns={"question"})})
 * @ORM\Entity
 */
class MdlQuizQuestionInstances
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
     * @ORM\Column(name="question", type="bigint", nullable=false)
     */
    private $question = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="decimal", precision=12, scale=7, nullable=false)
     */
    private $grade = '0.0000000';



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
     * @return MdlQuizQuestionInstances
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
     * Set question
     *
     * @param integer $question
     * @return MdlQuizQuestionInstances
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
     * Set grade
     *
     * @param string $grade
     * @return MdlQuizQuestionInstances
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
}
