<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLtiTypes
 *
 * @ORM\Table(name="mdl_lti_types", indexes={@ORM\Index(name="mdl_ltitype_cou_ix", columns={"course"}), @ORM\Index(name="mdl_ltitype_too_ix", columns={"tooldomain"})})
 * @ORM\Entity
 */
class MdlLtiTypes
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = 'basiclti Activity';

    /**
     * @var string
     *
     * @ORM\Column(name="baseurl", type="text", nullable=false)
     */
    private $baseurl;

    /**
     * @var string
     *
     * @ORM\Column(name="tooldomain", type="string", length=255, nullable=false)
     */
    private $tooldomain = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state = '2';

    /**
     * @var integer
     *
     * @ORM\Column(name="course", type="bigint", nullable=false)
     */
    private $course;

    /**
     * @var boolean
     *
     * @ORM\Column(name="coursevisible", type="boolean", nullable=false)
     */
    private $coursevisible = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="createdby", type="bigint", nullable=false)
     */
    private $createdby;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

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
     * Set name
     *
     * @param string $name
     * @return MdlLtiTypes
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set baseurl
     *
     * @param string $baseurl
     * @return MdlLtiTypes
     */
    public function setBaseurl($baseurl)
    {
        $this->baseurl = $baseurl;

        return $this;
    }

    /**
     * Get baseurl
     *
     * @return string 
     */
    public function getBaseurl()
    {
        return $this->baseurl;
    }

    /**
     * Set tooldomain
     *
     * @param string $tooldomain
     * @return MdlLtiTypes
     */
    public function setTooldomain($tooldomain)
    {
        $this->tooldomain = $tooldomain;

        return $this;
    }

    /**
     * Get tooldomain
     *
     * @return string 
     */
    public function getTooldomain()
    {
        return $this->tooldomain;
    }

    /**
     * Set state
     *
     * @param boolean $state
     * @return MdlLtiTypes
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return boolean 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set course
     *
     * @param integer $course
     * @return MdlLtiTypes
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return integer 
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set coursevisible
     *
     * @param boolean $coursevisible
     * @return MdlLtiTypes
     */
    public function setCoursevisible($coursevisible)
    {
        $this->coursevisible = $coursevisible;

        return $this;
    }

    /**
     * Get coursevisible
     *
     * @return boolean 
     */
    public function getCoursevisible()
    {
        return $this->coursevisible;
    }

    /**
     * Set createdby
     *
     * @param integer $createdby
     * @return MdlLtiTypes
     */
    public function setCreatedby($createdby)
    {
        $this->createdby = $createdby;

        return $this;
    }

    /**
     * Get createdby
     *
     * @return integer 
     */
    public function getCreatedby()
    {
        return $this->createdby;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlLtiTypes
     */
    public function setTimecreated($timecreated)
    {
        $this->timecreated = $timecreated;

        return $this;
    }

    /**
     * Get timecreated
     *
     * @return integer 
     */
    public function getTimecreated()
    {
        return $this->timecreated;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlLtiTypes
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
