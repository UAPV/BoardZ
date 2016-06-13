<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlFeedbackCompleted
 *
 * @ORM\Table(name="mdl_feedback_completed", indexes={@ORM\Index(name="mdl_feedcomp_use_ix", columns={"userid"}), @ORM\Index(name="mdl_feedcomp_fee_ix", columns={"feedback"})})
 * @ORM\Entity
 */
class MdlFeedbackCompleted
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
     * @ORM\Column(name="feedback", type="bigint", nullable=false)
     */
    private $feedback = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="random_response", type="bigint", nullable=false)
     */
    private $randomResponse = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="anonymous_response", type="boolean", nullable=false)
     */
    private $anonymousResponse = '0';



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
     * Set feedback
     *
     * @param integer $feedback
     * @return MdlFeedbackCompleted
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * Get feedback
     *
     * @return integer 
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlFeedbackCompleted
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
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlFeedbackCompleted
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
     * Set randomResponse
     *
     * @param integer $randomResponse
     * @return MdlFeedbackCompleted
     */
    public function setRandomResponse($randomResponse)
    {
        $this->randomResponse = $randomResponse;

        return $this;
    }

    /**
     * Get randomResponse
     *
     * @return integer 
     */
    public function getRandomResponse()
    {
        return $this->randomResponse;
    }

    /**
     * Set anonymousResponse
     *
     * @param boolean $anonymousResponse
     * @return MdlFeedbackCompleted
     */
    public function setAnonymousResponse($anonymousResponse)
    {
        $this->anonymousResponse = $anonymousResponse;

        return $this;
    }

    /**
     * Get anonymousResponse
     *
     * @return boolean 
     */
    public function getAnonymousResponse()
    {
        return $this->anonymousResponse;
    }
}
