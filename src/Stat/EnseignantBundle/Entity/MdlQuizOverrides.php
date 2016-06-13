<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuizOverrides
 *
 * @ORM\Table(name="mdl_quiz_overrides", indexes={@ORM\Index(name="mdl_quizover_qui_ix", columns={"quiz"}), @ORM\Index(name="mdl_quizover_gro_ix", columns={"groupid"}), @ORM\Index(name="mdl_quizover_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlQuizOverrides
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
     * @ORM\Column(name="quiz", type="bigint", nullable=false)
     */
    private $quiz = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groupid", type="bigint", nullable=true)
     */
    private $groupid;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=true)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="timeopen", type="bigint", nullable=true)
     */
    private $timeopen;

    /**
     * @var integer
     *
     * @ORM\Column(name="timeclose", type="bigint", nullable=true)
     */
    private $timeclose;

    /**
     * @var integer
     *
     * @ORM\Column(name="timelimit", type="bigint", nullable=true)
     */
    private $timelimit;

    /**
     * @var integer
     *
     * @ORM\Column(name="attempts", type="integer", nullable=true)
     */
    private $attempts;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;



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
     * Set quiz
     *
     * @param integer $quiz
     * @return MdlQuizOverrides
     */
    public function setQuiz($quiz)
    {
        $this->quiz = $quiz;

        return $this;
    }

    /**
     * Get quiz
     *
     * @return integer 
     */
    public function getQuiz()
    {
        return $this->quiz;
    }

    /**
     * Set groupid
     *
     * @param integer $groupid
     * @return MdlQuizOverrides
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Get groupid
     *
     * @return integer 
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlQuizOverrides
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
     * Set timeopen
     *
     * @param integer $timeopen
     * @return MdlQuizOverrides
     */
    public function setTimeopen($timeopen)
    {
        $this->timeopen = $timeopen;

        return $this;
    }

    /**
     * Get timeopen
     *
     * @return integer 
     */
    public function getTimeopen()
    {
        return $this->timeopen;
    }

    /**
     * Set timeclose
     *
     * @param integer $timeclose
     * @return MdlQuizOverrides
     */
    public function setTimeclose($timeclose)
    {
        $this->timeclose = $timeclose;

        return $this;
    }

    /**
     * Get timeclose
     *
     * @return integer 
     */
    public function getTimeclose()
    {
        return $this->timeclose;
    }

    /**
     * Set timelimit
     *
     * @param integer $timelimit
     * @return MdlQuizOverrides
     */
    public function setTimelimit($timelimit)
    {
        $this->timelimit = $timelimit;

        return $this;
    }

    /**
     * Get timelimit
     *
     * @return integer 
     */
    public function getTimelimit()
    {
        return $this->timelimit;
    }

    /**
     * Set attempts
     *
     * @param integer $attempts
     * @return MdlQuizOverrides
     */
    public function setAttempts($attempts)
    {
        $this->attempts = $attempts;

        return $this;
    }

    /**
     * Get attempts
     *
     * @return integer 
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return MdlQuizOverrides
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
}
