<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLessonHighScores
 *
 * @ORM\Table(name="mdl_lesson_high_scores", indexes={@ORM\Index(name="mdl_lesshighscor_use_ix", columns={"userid"}), @ORM\Index(name="mdl_lesshighscor_les_ix", columns={"lessonid"})})
 * @ORM\Entity
 */
class MdlLessonHighScores
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
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="gradeid", type="bigint", nullable=false)
     */
    private $gradeid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=5, nullable=false)
     */
    private $nickname = '';



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
     * @return MdlLessonHighScores
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
     * Set userid
     *
     * @param integer $userid
     * @return MdlLessonHighScores
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
     * Set gradeid
     *
     * @param integer $gradeid
     * @return MdlLessonHighScores
     */
    public function setGradeid($gradeid)
    {
        $this->gradeid = $gradeid;

        return $this;
    }

    /**
     * Get gradeid
     *
     * @return integer 
     */
    public function getGradeid()
    {
        return $this->gradeid;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     * @return MdlLessonHighScores
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string 
     */
    public function getNickname()
    {
        return $this->nickname;
    }
}
