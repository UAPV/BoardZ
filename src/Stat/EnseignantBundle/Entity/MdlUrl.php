<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUrl
 *
 * @ORM\Table(name="mdl_url", indexes={@ORM\Index(name="mdl_url_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlUrl
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
     * @var string
     *
     * @ORM\Column(name="externalurl", type="text", nullable=false)
     */
    private $externalurl;

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
     * @var string
     *
     * @ORM\Column(name="parameters", type="text", nullable=true)
     */
    private $parameters;

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
     * @return MdlUrl
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
     * @return MdlUrl
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
     * @return MdlUrl
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
     * @return MdlUrl
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
     * Set externalurl
     *
     * @param string $externalurl
     * @return MdlUrl
     */
    public function setExternalurl($externalurl)
    {
        $this->externalurl = $externalurl;

        return $this;
    }

    /**
     * Get externalurl
     *
     * @return string 
     */
    public function getExternalurl()
    {
        return $this->externalurl;
    }

    /**
     * Set display
     *
     * @param integer $display
     * @return MdlUrl
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
     * @return MdlUrl
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
     * Set parameters
     *
     * @param string $parameters
     * @return MdlUrl
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Get parameters
     *
     * @return string 
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlUrl
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
