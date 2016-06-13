<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuizFeedback
 *
 * @ORM\Table(name="mdl_quiz_feedback", indexes={@ORM\Index(name="mdl_quizfeed_qui_ix", columns={"quizid"})})
 * @ORM\Entity
 */
class MdlQuizFeedback
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
     * @ORM\Column(name="quizid", type="bigint", nullable=false)
     */
    private $quizid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="feedbacktext", type="text", nullable=false)
     */
    private $feedbacktext;

    /**
     * @var boolean
     *
     * @ORM\Column(name="feedbacktextformat", type="boolean", nullable=false)
     */
    private $feedbacktextformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mingrade", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $mingrade = '0.00000';

    /**
     * @var string
     *
     * @ORM\Column(name="maxgrade", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $maxgrade = '0.00000';



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
     * Set quizid
     *
     * @param integer $quizid
     * @return MdlQuizFeedback
     */
    public function setQuizid($quizid)
    {
        $this->quizid = $quizid;

        return $this;
    }

    /**
     * Get quizid
     *
     * @return integer 
     */
    public function getQuizid()
    {
        return $this->quizid;
    }

    /**
     * Set feedbacktext
     *
     * @param string $feedbacktext
     * @return MdlQuizFeedback
     */
    public function setFeedbacktext($feedbacktext)
    {
        $this->feedbacktext = $feedbacktext;

        return $this;
    }

    /**
     * Get feedbacktext
     *
     * @return string 
     */
    public function getFeedbacktext()
    {
        return $this->feedbacktext;
    }

    /**
     * Set feedbacktextformat
     *
     * @param boolean $feedbacktextformat
     * @return MdlQuizFeedback
     */
    public function setFeedbacktextformat($feedbacktextformat)
    {
        $this->feedbacktextformat = $feedbacktextformat;

        return $this;
    }

    /**
     * Get feedbacktextformat
     *
     * @return boolean 
     */
    public function getFeedbacktextformat()
    {
        return $this->feedbacktextformat;
    }

    /**
     * Set mingrade
     *
     * @param string $mingrade
     * @return MdlQuizFeedback
     */
    public function setMingrade($mingrade)
    {
        $this->mingrade = $mingrade;

        return $this;
    }

    /**
     * Get mingrade
     *
     * @return string 
     */
    public function getMingrade()
    {
        return $this->mingrade;
    }

    /**
     * Set maxgrade
     *
     * @param string $maxgrade
     * @return MdlQuizFeedback
     */
    public function setMaxgrade($maxgrade)
    {
        $this->maxgrade = $maxgrade;

        return $this;
    }

    /**
     * Get maxgrade
     *
     * @return string 
     */
    public function getMaxgrade()
    {
        return $this->maxgrade;
    }
}
