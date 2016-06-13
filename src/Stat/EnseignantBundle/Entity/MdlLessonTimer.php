<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLessonTimer
 *
 * @ORM\Table(name="mdl_lesson_timer", indexes={@ORM\Index(name="mdl_lesstime_use_ix", columns={"userid"}), @ORM\Index(name="mdl_lesstime_les_ix", columns={"lessonid"})})
 * @ORM\Entity
 */
class MdlLessonTimer
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
     * @ORM\Column(name="starttime", type="bigint", nullable=false)
     */
    private $starttime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lessontime", type="bigint", nullable=false)
     */
    private $lessontime = '0';



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
     * @return MdlLessonTimer
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
     * @return MdlLessonTimer
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
     * Set starttime
     *
     * @param integer $starttime
     * @return MdlLessonTimer
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }

    /**
     * Get starttime
     *
     * @return integer 
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set lessontime
     *
     * @param integer $lessontime
     * @return MdlLessonTimer
     */
    public function setLessontime($lessontime)
    {
        $this->lessontime = $lessontime;

        return $this;
    }

    /**
     * Get lessontime
     *
     * @return integer 
     */
    public function getLessontime()
    {
        return $this->lessontime;
    }
}
