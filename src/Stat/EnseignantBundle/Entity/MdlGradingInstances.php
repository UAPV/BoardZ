<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradingInstances
 *
 * @ORM\Table(name="mdl_grading_instances", indexes={@ORM\Index(name="mdl_gradinst_def_ix", columns={"definitionid"}), @ORM\Index(name="mdl_gradinst_rat_ix", columns={"raterid"})})
 * @ORM\Entity
 */
class MdlGradingInstances
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
     * @ORM\Column(name="definitionid", type="bigint", nullable=false)
     */
    private $definitionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="raterid", type="bigint", nullable=false)
     */
    private $raterid;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemid", type="bigint", nullable=true)
     */
    private $itemid;

    /**
     * @var string
     *
     * @ORM\Column(name="rawgrade", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $rawgrade;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="bigint", nullable=false)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="feedback", type="text", nullable=true)
     */
    private $feedback;

    /**
     * @var boolean
     *
     * @ORM\Column(name="feedbackformat", type="boolean", nullable=true)
     */
    private $feedbackformat;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;



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
     * Set definitionid
     *
     * @param integer $definitionid
     * @return MdlGradingInstances
     */
    public function setDefinitionid($definitionid)
    {
        $this->definitionid = $definitionid;

        return $this;
    }

    /**
     * Get definitionid
     *
     * @return integer 
     */
    public function getDefinitionid()
    {
        return $this->definitionid;
    }

    /**
     * Set raterid
     *
     * @param integer $raterid
     * @return MdlGradingInstances
     */
    public function setRaterid($raterid)
    {
        $this->raterid = $raterid;

        return $this;
    }

    /**
     * Get raterid
     *
     * @return integer 
     */
    public function getRaterid()
    {
        return $this->raterid;
    }

    /**
     * Set itemid
     *
     * @param integer $itemid
     * @return MdlGradingInstances
     */
    public function setItemid($itemid)
    {
        $this->itemid = $itemid;

        return $this;
    }

    /**
     * Get itemid
     *
     * @return integer 
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set rawgrade
     *
     * @param string $rawgrade
     * @return MdlGradingInstances
     */
    public function setRawgrade($rawgrade)
    {
        $this->rawgrade = $rawgrade;

        return $this;
    }

    /**
     * Get rawgrade
     *
     * @return string 
     */
    public function getRawgrade()
    {
        return $this->rawgrade;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return MdlGradingInstances
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set feedback
     *
     * @param string $feedback
     * @return MdlGradingInstances
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
     * @return MdlGradingInstances
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

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlGradingInstances
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
}
