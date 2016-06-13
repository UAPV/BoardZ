<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLessonPages
 *
 * @ORM\Table(name="mdl_lesson_pages", indexes={@ORM\Index(name="mdl_lesspage_les_ix", columns={"lessonid"})})
 * @ORM\Entity
 */
class MdlLessonPages
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
     * @ORM\Column(name="prevpageid", type="bigint", nullable=false)
     */
    private $prevpageid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nextpageid", type="bigint", nullable=false)
     */
    private $nextpageid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="qtype", type="smallint", nullable=false)
     */
    private $qtype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="qoption", type="smallint", nullable=false)
     */
    private $qoption = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="layout", type="smallint", nullable=false)
     */
    private $layout = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="display", type="smallint", nullable=false)
     */
    private $display = '1';

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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contents", type="text", nullable=false)
     */
    private $contents;

    /**
     * @var boolean
     *
     * @ORM\Column(name="contentsformat", type="boolean", nullable=false)
     */
    private $contentsformat = '0';



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
     * @return MdlLessonPages
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
     * Set prevpageid
     *
     * @param integer $prevpageid
     * @return MdlLessonPages
     */
    public function setPrevpageid($prevpageid)
    {
        $this->prevpageid = $prevpageid;

        return $this;
    }

    /**
     * Get prevpageid
     *
     * @return integer 
     */
    public function getPrevpageid()
    {
        return $this->prevpageid;
    }

    /**
     * Set nextpageid
     *
     * @param integer $nextpageid
     * @return MdlLessonPages
     */
    public function setNextpageid($nextpageid)
    {
        $this->nextpageid = $nextpageid;

        return $this;
    }

    /**
     * Get nextpageid
     *
     * @return integer 
     */
    public function getNextpageid()
    {
        return $this->nextpageid;
    }

    /**
     * Set qtype
     *
     * @param integer $qtype
     * @return MdlLessonPages
     */
    public function setQtype($qtype)
    {
        $this->qtype = $qtype;

        return $this;
    }

    /**
     * Get qtype
     *
     * @return integer 
     */
    public function getQtype()
    {
        return $this->qtype;
    }

    /**
     * Set qoption
     *
     * @param integer $qoption
     * @return MdlLessonPages
     */
    public function setQoption($qoption)
    {
        $this->qoption = $qoption;

        return $this;
    }

    /**
     * Get qoption
     *
     * @return integer 
     */
    public function getQoption()
    {
        return $this->qoption;
    }

    /**
     * Set layout
     *
     * @param integer $layout
     * @return MdlLessonPages
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;

        return $this;
    }

    /**
     * Get layout
     *
     * @return integer 
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Set display
     *
     * @param integer $display
     * @return MdlLessonPages
     */
    public function setDisplay($display)
    {
        $this->display = $display;

        return $this;
    }

    /**
     * Get display
     *
     * @return integer 
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlLessonPages
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
     * @return MdlLessonPages
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

    /**
     * Set title
     *
     * @param string $title
     * @return MdlLessonPages
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set contents
     *
     * @param string $contents
     * @return MdlLessonPages
     */
    public function setContents($contents)
    {
        $this->contents = $contents;

        return $this;
    }

    /**
     * Get contents
     *
     * @return string 
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Set contentsformat
     *
     * @param boolean $contentsformat
     * @return MdlLessonPages
     */
    public function setContentsformat($contentsformat)
    {
        $this->contentsformat = $contentsformat;

        return $this;
    }

    /**
     * Get contentsformat
     *
     * @return boolean 
     */
    public function getContentsformat()
    {
        return $this->contentsformat;
    }
}
