<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlFeedbackTracking
 *
 * @ORM\Table(name="mdl_feedback_tracking", indexes={@ORM\Index(name="mdl_feedtrac_use_ix", columns={"userid"}), @ORM\Index(name="mdl_feedtrac_fee_ix", columns={"feedback"}), @ORM\Index(name="mdl_feedtrac_com_ix", columns={"completed"})})
 * @ORM\Entity
 */
class MdlFeedbackTracking
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
     * @ORM\Column(name="feedback", type="bigint", nullable=false)
     */
    private $feedback = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="completed", type="bigint", nullable=false)
     */
    private $completed = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tmp_completed", type="bigint", nullable=false)
     */
    private $tmpCompleted = '0';



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
     * @return MdlFeedbackTracking
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
     * Set feedback
     *
     * @param integer $feedback
     * @return MdlFeedbackTracking
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
     * Set completed
     *
     * @param integer $completed
     * @return MdlFeedbackTracking
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;

        return $this;
    }

    /**
     * Get completed
     *
     * @return integer 
     */
    public function getCompleted()
    {
        return $this->completed;
    }

    /**
     * Set tmpCompleted
     *
     * @param integer $tmpCompleted
     * @return MdlFeedbackTracking
     */
    public function setTmpCompleted($tmpCompleted)
    {
        $this->tmpCompleted = $tmpCompleted;

        return $this;
    }

    /**
     * Get tmpCompleted
     *
     * @return integer 
     */
    public function getTmpCompleted()
    {
        return $this->tmpCompleted;
    }
}
