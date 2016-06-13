<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBook
 *
 * @ORM\Table(name="mdl_book")
 * @ORM\Entity
 */
class MdlBook
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
     * @ORM\Column(name="course", type="bigint", nullable=false)
     */
    private $course = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="intro", type="text", nullable=true)
     */
    private $intro;

    /**
     * @var integer
     *
     * @ORM\Column(name="introformat", type="smallint", nullable=false)
     */
    private $introformat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="numbering", type="smallint", nullable=false)
     */
    private $numbering = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="customtitles", type="boolean", nullable=false)
     */
    private $customtitles = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="revision", type="bigint", nullable=false)
     */
    private $revision = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';



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
     * Set course
     *
     * @param integer $course
     * @return MdlBook
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
     * Set name
     *
     * @param string $name
     * @return MdlBook
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
     * Set intro
     *
     * @param string $intro
     * @return MdlBook
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Get intro
     *
     * @return string 
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * Set introformat
     *
     * @param integer $introformat
     * @return MdlBook
     */
    public function setIntroformat($introformat)
    {
        $this->introformat = $introformat;

        return $this;
    }

    /**
     * Get introformat
     *
     * @return integer 
     */
    public function getIntroformat()
    {
        return $this->introformat;
    }

    /**
     * Set numbering
     *
     * @param integer $numbering
     * @return MdlBook
     */
    public function setNumbering($numbering)
    {
        $this->numbering = $numbering;

        return $this;
    }

    /**
     * Get numbering
     *
     * @return integer 
     */
    public function getNumbering()
    {
        return $this->numbering;
    }

    /**
     * Set customtitles
     *
     * @param boolean $customtitles
     * @return MdlBook
     */
    public function setCustomtitles($customtitles)
    {
        $this->customtitles = $customtitles;

        return $this;
    }

    /**
     * Get customtitles
     *
     * @return boolean 
     */
    public function getCustomtitles()
    {
        return $this->customtitles;
    }

    /**
     * Set revision
     *
     * @param integer $revision
     * @return MdlBook
     */
    public function setRevision($revision)
    {
        $this->revision = $revision;

        return $this;
    }

    /**
     * Get revision
     *
     * @return integer 
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlBook
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
     * @return MdlBook
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
