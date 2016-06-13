<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLessonAttempts
 *
 * @ORM\Table(name="mdl_lesson_attempts", indexes={@ORM\Index(name="mdl_lessatte_use_ix", columns={"userid"}), @ORM\Index(name="mdl_lessatte_les_ix", columns={"lessonid"}), @ORM\Index(name="mdl_lessatte_pag_ix", columns={"pageid"}), @ORM\Index(name="mdl_lessatte_ans_ix", columns={"answerid"})})
 * @ORM\Entity
 */
class MdlLessonAttempts
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
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="answerid", type="bigint", nullable=false)
     */
    private $answerid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="retry", type="smallint", nullable=false)
     */
    private $retry = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="correct", type="bigint", nullable=false)
     */
    private $correct = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="useranswer", type="text", nullable=true)
     */
    private $useranswer;

    /**
     * @var integer
     *
     * @ORM\Column(name="timeseen", type="bigint", nullable=false)
     */
    private $timeseen = '0';



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
     * @return MdlLessonAttempts
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
     * @return MdlLessonAttempts
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
     * Set userid
     *
     * @param integer $userid
     * @return MdlLessonAttempts
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
     * Set answerid
     *
     * @param integer $answerid
     * @return MdlLessonAttempts
     */
    public function setAnswerid($answerid)
    {
        $this->answerid = $answerid;

        return $this;
    }

    /**
     * Get answerid
     *
     * @return integer 
     */
    public function getAnswerid()
    {
        return $this->answerid;
    }

    /**
     * Set retry
     *
     * @param integer $retry
     * @return MdlLessonAttempts
     */
    public function setRetry($retry)
    {
        $this->retry = $retry;

        return $this;
    }

    /**
     * Get retry
     *
     * @return integer 
     */
    public function getRetry()
    {
        return $this->retry;
    }

    /**
     * Set correct
     *
     * @param integer $correct
     * @return MdlLessonAttempts
     */
    public function setCorrect($correct)
    {
        $this->correct = $correct;

        return $this;
    }

    /**
     * Get correct
     *
     * @return integer 
     */
    public function getCorrect()
    {
        return $this->correct;
    }

    /**
     * Set useranswer
     *
     * @param string $useranswer
     * @return MdlLessonAttempts
     */
    public function setUseranswer($useranswer)
    {
        $this->useranswer = $useranswer;

        return $this;
    }

    /**
     * Get useranswer
     *
     * @return string 
     */
    public function getUseranswer()
    {
        return $this->useranswer;
    }

    /**
     * Set timeseen
     *
     * @param integer $timeseen
     * @return MdlLessonAttempts
     */
    public function setTimeseen($timeseen)
    {
        $this->timeseen = $timeseen;

        return $this;
    }

    /**
     * Get timeseen
     *
     * @return integer 
     */
    public function getTimeseen()
    {
        return $this->timeseen;
    }
}
