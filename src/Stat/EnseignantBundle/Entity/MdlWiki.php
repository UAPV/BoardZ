<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWiki
 *
 * @ORM\Table(name="mdl_wiki", indexes={@ORM\Index(name="mdl_wiki_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlWiki
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
    private $name = 'Wiki';

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
     * @ORM\Column(name="firstpagetitle", type="string", length=255, nullable=false)
     */
    private $firstpagetitle = 'First Page';

    /**
     * @var string
     *
     * @ORM\Column(name="wikimode", type="string", length=20, nullable=false)
     */
    private $wikimode = 'collaborative';

    /**
     * @var string
     *
     * @ORM\Column(name="defaultformat", type="string", length=20, nullable=false)
     */
    private $defaultformat = 'creole';

    /**
     * @var boolean
     *
     * @ORM\Column(name="forceformat", type="boolean", nullable=false)
     */
    private $forceformat = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="editbegin", type="bigint", nullable=false)
     */
    private $editbegin = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="editend", type="bigint", nullable=true)
     */
    private $editend = '0';



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
     * @return MdlWiki
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
     * @return MdlWiki
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
     * @return MdlWiki
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
     * @return MdlWiki
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
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlWiki
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
     * @return MdlWiki
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
     * Set firstpagetitle
     *
     * @param string $firstpagetitle
     * @return MdlWiki
     */
    public function setFirstpagetitle($firstpagetitle)
    {
        $this->firstpagetitle = $firstpagetitle;

        return $this;
    }

    /**
     * Get firstpagetitle
     *
     * @return string 
     */
    public function getFirstpagetitle()
    {
        return $this->firstpagetitle;
    }

    /**
     * Set wikimode
     *
     * @param string $wikimode
     * @return MdlWiki
     */
    public function setWikimode($wikimode)
    {
        $this->wikimode = $wikimode;

        return $this;
    }

    /**
     * Get wikimode
     *
     * @return string 
     */
    public function getWikimode()
    {
        return $this->wikimode;
    }

    /**
     * Set defaultformat
     *
     * @param string $defaultformat
     * @return MdlWiki
     */
    public function setDefaultformat($defaultformat)
    {
        $this->defaultformat = $defaultformat;

        return $this;
    }

    /**
     * Get defaultformat
     *
     * @return string 
     */
    public function getDefaultformat()
    {
        return $this->defaultformat;
    }

    /**
     * Set forceformat
     *
     * @param boolean $forceformat
     * @return MdlWiki
     */
    public function setForceformat($forceformat)
    {
        $this->forceformat = $forceformat;

        return $this;
    }

    /**
     * Get forceformat
     *
     * @return boolean 
     */
    public function getForceformat()
    {
        return $this->forceformat;
    }

    /**
     * Set editbegin
     *
     * @param integer $editbegin
     * @return MdlWiki
     */
    public function setEditbegin($editbegin)
    {
        $this->editbegin = $editbegin;

        return $this;
    }

    /**
     * Get editbegin
     *
     * @return integer 
     */
    public function getEditbegin()
    {
        return $this->editbegin;
    }

    /**
     * Set editend
     *
     * @param integer $editend
     * @return MdlWiki
     */
    public function setEditend($editend)
    {
        $this->editend = $editend;

        return $this;
    }

    /**
     * Get editend
     *
     * @return integer 
     */
    public function getEditend()
    {
        return $this->editend;
    }
}
