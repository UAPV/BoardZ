<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLessonBranch
 *
 * @ORM\Table(name="mdl_lesson_branch", indexes={@ORM\Index(name="mdl_lessbran_use_ix", columns={"userid"}), @ORM\Index(name="mdl_lessbran_les_ix", columns={"lessonid"}), @ORM\Index(name="mdl_lessbran_pag_ix", columns={"pageid"})})
 * @ORM\Entity
 */
class MdlLessonBranch
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
     * @ORM\Column(name="pageid", type="bigint", nullable=false)
     */
    private $pageid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="retry", type="bigint", nullable=false)
     */
    private $retry = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="flag", type="smallint", nullable=false)
     */
    private $flag = '0';

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
     * @return MdlLessonBranch
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
     * @return MdlLessonBranch
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
     * Set pageid
     *
     * @param integer $pageid
     * @return MdlLessonBranch
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
     * Set retry
     *
     * @param integer $retry
     * @return MdlLessonBranch
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
     * Set flag
     *
     * @param integer $flag
     * @return MdlLessonBranch
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get flag
     *
     * @return integer 
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set timeseen
     *
     * @param integer $timeseen
     * @return MdlLessonBranch
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
