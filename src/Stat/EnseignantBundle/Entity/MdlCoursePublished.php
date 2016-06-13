<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCoursePublished
 *
 * @ORM\Table(name="mdl_course_published")
 * @ORM\Entity
 */
class MdlCoursePublished
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
     * @ORM\Column(name="huburl", type="string", length=255, nullable=true)
     */
    private $huburl;

    /**
     * @var integer
     *
     * @ORM\Column(name="courseid", type="bigint", nullable=false)
     */
    private $courseid;

    /**
     * @var integer
     *
     * @ORM\Column(name="timepublished", type="bigint", nullable=false)
     */
    private $timepublished;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enrollable", type="boolean", nullable=false)
     */
    private $enrollable = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="hubcourseid", type="bigint", nullable=false)
     */
    private $hubcourseid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timechecked", type="bigint", nullable=true)
     */
    private $timechecked;



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
     * Set huburl
     *
     * @param string $huburl
     * @return MdlCoursePublished
     */
    public function setHuburl($huburl)
    {
        $this->huburl = $huburl;

        return $this;
    }

    /**
     * Get huburl
     *
     * @return string 
     */
    public function getHuburl()
    {
        return $this->huburl;
    }

    /**
     * Set courseid
     *
     * @param integer $courseid
     * @return MdlCoursePublished
     */
    public function setCourseid($courseid)
    {
        $this->courseid = $courseid;

        return $this;
    }

    /**
     * Get courseid
     *
     * @return integer 
     */
    public function getCourseid()
    {
        return $this->courseid;
    }

    /**
     * Set timepublished
     *
     * @param integer $timepublished
     * @return MdlCoursePublished
     */
    public function setTimepublished($timepublished)
    {
        $this->timepublished = $timepublished;

        return $this;
    }

    /**
     * Get timepublished
     *
     * @return integer 
     */
    public function getTimepublished()
    {
        return $this->timepublished;
    }

    /**
     * Set enrollable
     *
     * @param boolean $enrollable
     * @return MdlCoursePublished
     */
    public function setEnrollable($enrollable)
    {
        $this->enrollable = $enrollable;

        return $this;
    }

    /**
     * Get enrollable
     *
     * @return boolean 
     */
    public function getEnrollable()
    {
        return $this->enrollable;
    }

    /**
     * Set hubcourseid
     *
     * @param integer $hubcourseid
     * @return MdlCoursePublished
     */
    public function setHubcourseid($hubcourseid)
    {
        $this->hubcourseid = $hubcourseid;

        return $this;
    }

    /**
     * Get hubcourseid
     *
     * @return integer 
     */
    public function getHubcourseid()
    {
        return $this->hubcourseid;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return MdlCoursePublished
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set timechecked
     *
     * @param integer $timechecked
     * @return MdlCoursePublished
     */
    public function setTimechecked($timechecked)
    {
        $this->timechecked = $timechecked;

        return $this;
    }

    /**
     * Get timechecked
     *
     * @return integer 
     */
    public function getTimechecked()
    {
        return $this->timechecked;
    }
}
