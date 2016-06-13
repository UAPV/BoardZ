<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestionSessions
 *
 * @ORM\Table(name="mdl_question_sessions", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_quessess_attque_uix", columns={"attemptid", "questionid"})}, indexes={@ORM\Index(name="mdl_quessess_att_ix", columns={"attemptid"}), @ORM\Index(name="mdl_quessess_que_ix", columns={"questionid"}), @ORM\Index(name="mdl_quessess_new_ix", columns={"newest"}), @ORM\Index(name="mdl_quessess_new2_ix", columns={"newgraded"})})
 * @ORM\Entity
 */
class MdlQuestionSessions
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
     * @ORM\Column(name="attemptid", type="bigint", nullable=false)
     */
    private $attemptid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="questionid", type="bigint", nullable=false)
     */
    private $questionid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="newest", type="bigint", nullable=false)
     */
    private $newest = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="newgraded", type="bigint", nullable=false)
     */
    private $newgraded = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sumpenalty", type="decimal", precision=12, scale=7, nullable=false)
     */
    private $sumpenalty = '0.0000000';

    /**
     * @var string
     *
     * @ORM\Column(name="manualcomment", type="text", nullable=false)
     */
    private $manualcomment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="manualcommentformat", type="boolean", nullable=false)
     */
    private $manualcommentformat = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="flagged", type="boolean", nullable=false)
     */
    private $flagged = '0';



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
     * Set attemptid
     *
     * @param integer $attemptid
     * @return MdlQuestionSessions
     */
    public function setAttemptid($attemptid)
    {
        $this->attemptid = $attemptid;

        return $this;
    }

    /**
     * Get attemptid
     *
     * @return integer 
     */
    public function getAttemptid()
    {
        return $this->attemptid;
    }

    /**
     * Set questionid
     *
     * @param integer $questionid
     * @return MdlQuestionSessions
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
     * Set newest
     *
     * @param integer $newest
     * @return MdlQuestionSessions
     */
    public function setNewest($newest)
    {
        $this->newest = $newest;

        return $this;
    }

    /**
     * Get newest
     *
     * @return integer 
     */
    public function getNewest()
    {
        return $this->newest;
    }

    /**
     * Set newgraded
     *
     * @param integer $newgraded
     * @return MdlQuestionSessions
     */
    public function setNewgraded($newgraded)
    {
        $this->newgraded = $newgraded;

        return $this;
    }

    /**
     * Get newgraded
     *
     * @return integer 
     */
    public function getNewgraded()
    {
        return $this->newgraded;
    }

    /**
     * Set sumpenalty
     *
     * @param string $sumpenalty
     * @return MdlQuestionSessions
     */
    public function setSumpenalty($sumpenalty)
    {
        $this->sumpenalty = $sumpenalty;

        return $this;
    }

    /**
     * Get sumpenalty
     *
     * @return string 
     */
    public function getSumpenalty()
    {
        return $this->sumpenalty;
    }

    /**
     * Set manualcomment
     *
     * @param string $manualcomment
     * @return MdlQuestionSessions
     */
    public function setManualcomment($manualcomment)
    {
        $this->manualcomment = $manualcomment;

        return $this;
    }

    /**
     * Get manualcomment
     *
     * @return string 
     */
    public function getManualcomment()
    {
        return $this->manualcomment;
    }

    /**
     * Set manualcommentformat
     *
     * @param boolean $manualcommentformat
     * @return MdlQuestionSessions
     */
    public function setManualcommentformat($manualcommentformat)
    {
        $this->manualcommentformat = $manualcommentformat;

        return $this;
    }

    /**
     * Get manualcommentformat
     *
     * @return boolean 
     */
    public function getManualcommentformat()
    {
        return $this->manualcommentformat;
    }

    /**
     * Set flagged
     *
     * @param boolean $flagged
     * @return MdlQuestionSessions
     */
    public function setFlagged($flagged)
    {
        $this->flagged = $flagged;

        return $this;
    }

    /**
     * Get flagged
     *
     * @return boolean 
     */
    public function getFlagged()
    {
        return $this->flagged;
    }
}
