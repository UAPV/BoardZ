<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlSurveyAnswers
 *
 * @ORM\Table(name="mdl_survey_answers", indexes={@ORM\Index(name="mdl_survansw_use_ix", columns={"userid"}), @ORM\Index(name="mdl_survansw_sur_ix", columns={"survey"}), @ORM\Index(name="mdl_survansw_que_ix", columns={"question"})})
 * @ORM\Entity
 */
class MdlSurveyAnswers
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
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="survey", type="bigint", nullable=false)
     */
    private $survey = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="question", type="bigint", nullable=false)
     */
    private $question = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="bigint", nullable=false)
     */
    private $time = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="answer1", type="text", nullable=false)
     */
    private $answer1;

    /**
     * @var string
     *
     * @ORM\Column(name="answer2", type="text", nullable=false)
     */
    private $answer2;



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
     * Set userid
     *
     * @param integer $userid
     * @return MdlSurveyAnswers
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
     * Set survey
     *
     * @param integer $survey
     * @return MdlSurveyAnswers
     */
    public function setSurvey($survey)
    {
        $this->survey = $survey;

        return $this;
    }

    /**
     * Get survey
     *
     * @return integer 
     */
    public function getSurvey()
    {
        return $this->survey;
    }

    /**
     * Set question
     *
     * @param integer $question
     * @return MdlSurveyAnswers
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
     * Set time
     *
     * @param integer $time
     * @return MdlSurveyAnswers
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return integer 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set answer1
     *
     * @param string $answer1
     * @return MdlSurveyAnswers
     */
    public function setAnswer1($answer1)
    {
        $this->answer1 = $answer1;

        return $this;
    }

    /**
     * Get answer1
     *
     * @return string 
     */
    public function getAnswer1()
    {
        return $this->answer1;
    }

    /**
     * Set answer2
     *
     * @param string $answer2
     * @return MdlSurveyAnswers
     */
    public function setAnswer2($answer2)
    {
        $this->answer2 = $answer2;

        return $this;
    }

    /**
     * Get answer2
     *
     * @return string 
     */
    public function getAnswer2()
    {
        return $this->answer2;
    }
}
