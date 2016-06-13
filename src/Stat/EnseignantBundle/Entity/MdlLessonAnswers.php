<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLessonAnswers
 *
 * @ORM\Table(name="mdl_lesson_answers", indexes={@ORM\Index(name="mdl_lessansw_les_ix", columns={"lessonid"}), @ORM\Index(name="mdl_lessansw_pag_ix", columns={"pageid"})})
 * @ORM\Entity
 */
class MdlLessonAnswers
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
     * @ORM\Column(name="lessonid", type="bigint", nullable=false)
     */
    private $lessonid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pageid", type="bigint", nullable=false)
     */
    private $pageid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="jumpto", type="bigint", nullable=false)
     */
    private $jumpto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="grade", type="smallint", nullable=false)
     */
    private $grade = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="bigint", nullable=false)
     */
    private $score = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="flags", type="smallint", nullable=false)
     */
    private $flags = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="text", nullable=true)
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
     * @ORM\Column(name="response", type="text", nullable=true)
     */
    private $response;

    /**
     * @var boolean
     *
     * @ORM\Column(name="responseformat", type="boolean", nullable=false)
     */
    private $responseformat = '0';



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
     * Set lessonid
     *
     * @param integer $lessonid
     * @return MdlLessonAnswers
     */
    public function setLessonid($lessonid)
    {
        $this->lessonid = $lessonid;

        return $this;
    }

    /**
     * Get lessonid
     *
     * @return integer 
     */
    public function getLessonid()
    {
        return $this->lessonid;
    }

    /**
     * Set pageid
     *
     * @param integer $pageid
     * @return MdlLessonAnswers
     */
    public function setPageid($pageid)
    {
        $this->pageid = $pageid;

        return $this;
    }

    /**
     * Get pageid
     *
     * @return integer 
     */
    public function getPageid()
    {
        return $this->pageid;
    }

    /**
     * Set jumpto
     *
     * @param integer $jumpto
     * @return MdlLessonAnswers
     */
    public function setJumpto($jumpto)
    {
        $this->jumpto = $jumpto;

        return $this;
    }

    /**
     * Get jumpto
     *
     * @return integer 
     */
    public function getJumpto()
    {
        return $this->jumpto;
    }

    /**
     * Set grade
     *
     * @param integer $grade
     * @return MdlLessonAnswers
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return integer 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set score
     *
     * @param integer $score
     * @return MdlLessonAnswers
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set flags
     *
     * @param integer $flags
     * @return MdlLessonAnswers
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;

        return $this;
    }

    /**
     * Get flags
     *
     * @return integer 
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlLessonAnswers
     */
    public function setTimecreated($timecreated)
    {
        $this->timecreated = $timecreated;

        return $this;
    }

    /**
     * Get timecreated
     *
     * @return integer 
     */
    public function getTimecreated()
    {
        return $this->timecreated;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlLessonAnswers
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
     * Set answer
     *
     * @param string $answer
     * @return MdlLessonAnswers
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
     * @return MdlLessonAnswers
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
     * Set response
     *
     * @param string $response
     * @return MdlLessonAnswers
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get response
     *
     * @return string 
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set responseformat
     *
     * @param boolean $responseformat
     * @return MdlLessonAnswers
     */
    public function setResponseformat($responseformat)
    {
        $this->responseformat = $responseformat;

        return $this;
    }

    /**
     * Get responseformat
     *
     * @return boolean 
     */
    public function getResponseformat()
    {
        return $this->responseformat;
    }
}
