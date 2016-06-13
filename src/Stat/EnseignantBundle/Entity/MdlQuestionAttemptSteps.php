<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestionAttemptSteps
 *
 * @ORM\Table(name="mdl_question_attempt_steps", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_quesattestep_queseq_uix", columns={"questionattemptid", "sequencenumber"})}, indexes={@ORM\Index(name="mdl_quesattestep_que_ix", columns={"questionattemptid"}), @ORM\Index(name="mdl_quesattestep_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlQuestionAttemptSteps
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
     * @ORM\Column(name="questionattemptid", type="bigint", nullable=false)
     */
    private $questionattemptid;

    /**
     * @var integer
     *
     * @ORM\Column(name="sequencenumber", type="bigint", nullable=false)
     */
    private $sequencenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=13, nullable=false)
     */
    private $state = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fraction", type="decimal", precision=12, scale=7, nullable=true)
     */
    private $fraction;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=true)
     */
    private $userid;



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
     * Set questionattemptid
     *
     * @param integer $questionattemptid
     * @return MdlQuestionAttemptSteps
     */
    public function setQuestionattemptid($questionattemptid)
    {
        $this->questionattemptid = $questionattemptid;

        return $this;
    }

    /**
     * Get questionattemptid
     *
     * @return integer 
     */
    public function getQuestionattemptid()
    {
        return $this->questionattemptid;
    }

    /**
     * Set sequencenumber
     *
     * @param integer $sequencenumber
     * @return MdlQuestionAttemptSteps
     */
    public function setSequencenumber($sequencenumber)
    {
        $this->sequencenumber = $sequencenumber;

        return $this;
    }

    /**
     * Get sequencenumber
     *
     * @return integer 
     */
    public function getSequencenumber()
    {
        return $this->sequencenumber;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return MdlQuestionAttemptSteps
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
     * Set fraction
     *
     * @param string $fraction
     * @return MdlQuestionAttemptSteps
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
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlQuestionAttemptSteps
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
     * Set userid
     *
     * @param integer $userid
     * @return MdlQuestionAttemptSteps
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
}
