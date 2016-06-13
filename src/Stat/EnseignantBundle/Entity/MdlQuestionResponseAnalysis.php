<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestionResponseAnalysis
 *
 * @ORM\Table(name="mdl_question_response_analysis")
 * @ORM\Entity
 */
class MdlQuestionResponseAnalysis
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
     * @var string
     *
     * @ORM\Column(name="hashcode", type="string", length=40, nullable=false)
     */
    private $hashcode = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;

    /**
     * @var integer
     *
     * @ORM\Column(name="questionid", type="bigint", nullable=false)
     */
    private $questionid;

    /**
     * @var string
     *
     * @ORM\Column(name="subqid", type="string", length=100, nullable=false)
     */
    private $subqid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="aid", type="string", length=100, nullable=true)
     */
    private $aid;

    /**
     * @var string
     *
     * @ORM\Column(name="response", type="text", nullable=true)
     */
    private $response;

    /**
     * @var integer
     *
     * @ORM\Column(name="rcount", type="bigint", nullable=true)
     */
    private $rcount;

    /**
     * @var string
     *
     * @ORM\Column(name="credit", type="decimal", precision=15, scale=5, nullable=false)
     */
    private $credit;



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
     * Set hashcode
     *
     * @param string $hashcode
     * @return MdlQuestionResponseAnalysis
     */
    public function setHashcode($hashcode)
    {
        $this->hashcode = $hashcode;

        return $this;
    }

    /**
     * Get hashcode
     *
     * @return string 
     */
    public function getHashcode()
    {
        return $this->hashcode;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlQuestionResponseAnalysis
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
     * Set questionid
     *
     * @param integer $questionid
     * @return MdlQuestionResponseAnalysis
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
     * Set subqid
     *
     * @param string $subqid
     * @return MdlQuestionResponseAnalysis
     */
    public function setSubqid($subqid)
    {
        $this->subqid = $subqid;

        return $this;
    }

    /**
     * Get subqid
     *
     * @return string 
     */
    public function getSubqid()
    {
        return $this->subqid;
    }

    /**
     * Set aid
     *
     * @param string $aid
     * @return MdlQuestionResponseAnalysis
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get aid
     *
     * @return string 
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set response
     *
     * @param string $response
     * @return MdlQuestionResponseAnalysis
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
     * Set rcount
     *
     * @param integer $rcount
     * @return MdlQuestionResponseAnalysis
     */
    public function setRcount($rcount)
    {
        $this->rcount = $rcount;

        return $this;
    }

    /**
     * Get rcount
     *
     * @return integer 
     */
    public function getRcount()
    {
        return $this->rcount;
    }

    /**
     * Set credit
     *
     * @param string $credit
     * @return MdlQuestionResponseAnalysis
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return string 
     */
    public function getCredit()
    {
        return $this->credit;
    }
}
