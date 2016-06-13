<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlResource
 *
 * @ORM\Table(name="mdl_resource", indexes={@ORM\Index(name="mdl_reso_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlResource
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
     * @ORM\Column(name="tobemigrated", type="smallint", nullable=false)
     */
    private $tobemigrated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="legacyfiles", type="smallint", nullable=false)
     */
    private $legacyfiles = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="legacyfileslast", type="bigint", nullable=true)
     */
    private $legacyfileslast;

    /**
     * @var integer
     *
     * @ORM\Column(name="display", type="smallint", nullable=false)
     */
    private $display = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="displayoptions", type="text", nullable=true)
     */
    private $displayoptions;

    /**
     * @var integer
     *
     * @ORM\Column(name="filterfiles", type="smallint", nullable=false)
     */
    private $filterfiles = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="revision", type="bigint", nullable=false)
     */
    private $revision = '0';

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
     * @return MdlResource
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
     * @return MdlResource
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
     * @return MdlResource
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
     * @return MdlResource
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
     * Set tobemigrated
     *
     * @param integer $tobemigrated
     * @return MdlResource
     */
    public function setTobemigrated($tobemigrated)
    {
        $this->tobemigrated = $tobemigrated;

        return $this;
    }

    /**
     * Get tobemigrated
     *
     * @return integer 
     */
    public function getTobemigrated()
    {
        return $this->tobemigrated;
    }

    /**
     * Set legacyfiles
     *
     * @param integer $legacyfiles
     * @return MdlResource
     */
    public function setLegacyfiles($legacyfiles)
    {
        $this->legacyfiles = $legacyfiles;

        return $this;
    }

    /**
     * Get legacyfiles
     *
     * @return integer 
     */
    public function getLegacyfiles()
    {
        return $this->legacyfiles;
    }

    /**
     * Set legacyfileslast
     *
     * @param integer $legacyfileslast
     * @return MdlResource
     */
    public function setLegacyfileslast($legacyfileslast)
    {
        $this->legacyfileslast = $legacyfileslast;

        return $this;
    }

    /**
     * Get legacyfileslast
     *
     * @return integer 
     */
    public function getLegacyfileslast()
    {
        return $this->legacyfileslast;
    }

    /**
     * Set display
     *
     * @param integer $display
     * @return MdlResource
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
     * Set displayoptions
     *
     * @param string $displayoptions
     * @return MdlResource
     */
    public function setDisplayoptions($displayoptions)
    {
        $this->displayoptions = $displayoptions;

        return $this;
    }

    /**
     * Get displayoptions
     *
     * @return string 
     */
    public function getDisplayoptions()
    {
        return $this->displayoptions;
    }

    /**
     * Set filterfiles
     *
     * @param integer $filterfiles
     * @return MdlResource
     */
    public function setFilterfiles($filterfiles)
    {
        $this->filterfiles = $filterfiles;

        return $this;
    }

    /**
     * Get filterfiles
     *
     * @return integer 
     */
    public function getFilterfiles()
    {
        return $this->filterfiles;
    }

    /**
     * Set revision
     *
     * @param integer $revision
     * @return MdlResource
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
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlResource
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
