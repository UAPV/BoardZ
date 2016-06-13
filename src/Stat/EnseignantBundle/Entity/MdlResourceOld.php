<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlResourceOld
 *
 * @ORM\Table(name="mdl_resource_old", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_resoold_old_uix", columns={"oldid"})}, indexes={@ORM\Index(name="mdl_resoold_cmi_ix", columns={"cmid"})})
 * @ORM\Entity
 */
class MdlResourceOld
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
     * @ORM\Column(name="type", type="string", length=30, nullable=false)
     */
    private $type = '';

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255, nullable=false)
     */
    private $reference = '';

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
     * @ORM\Column(name="alltext", type="text", nullable=false)
     */
    private $alltext;

    /**
     * @var string
     *
     * @ORM\Column(name="popup", type="text", nullable=false)
     */
    private $popup;

    /**
     * @var string
     *
     * @ORM\Column(name="options", type="string", length=255, nullable=false)
     */
    private $options = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="oldid", type="bigint", nullable=false)
     */
    private $oldid;

    /**
     * @var integer
     *
     * @ORM\Column(name="cmid", type="bigint", nullable=true)
     */
    private $cmid;

    /**
     * @var string
     *
     * @ORM\Column(name="newmodule", type="string", length=50, nullable=true)
     */
    private $newmodule;

    /**
     * @var integer
     *
     * @ORM\Column(name="newid", type="bigint", nullable=true)
     */
    private $newid;

    /**
     * @var integer
     *
     * @ORM\Column(name="migrated", type="bigint", nullable=false)
     */
    private $migrated = '0';



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
     * @return MdlResourceOld
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
     * @return MdlResourceOld
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
     * Set type
     *
     * @param string $type
     * @return MdlResourceOld
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return MdlResourceOld
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set intro
     *
     * @param string $intro
     * @return MdlResourceOld
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
     * @return MdlResourceOld
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
     * Set alltext
     *
     * @param string $alltext
     * @return MdlResourceOld
     */
    public function setAlltext($alltext)
    {
        $this->alltext = $alltext;

        return $this;
    }

    /**
     * Get alltext
     *
     * @return string 
     */
    public function getAlltext()
    {
        return $this->alltext;
    }

    /**
     * Set popup
     *
     * @param string $popup
     * @return MdlResourceOld
     */
    public function setPopup($popup)
    {
        $this->popup = $popup;

        return $this;
    }

    /**
     * Get popup
     *
     * @return string 
     */
    public function getPopup()
    {
        return $this->popup;
    }

    /**
     * Set options
     *
     * @param string $options
     * @return MdlResourceOld
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get options
     *
     * @return string 
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlResourceOld
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
     * Set oldid
     *
     * @param integer $oldid
     * @return MdlResourceOld
     */
    public function setOldid($oldid)
    {
        $this->oldid = $oldid;

        return $this;
    }

    /**
     * Get oldid
     *
     * @return integer 
     */
    public function getOldid()
    {
        return $this->oldid;
    }

    /**
     * Set cmid
     *
     * @param integer $cmid
     * @return MdlResourceOld
     */
    public function setCmid($cmid)
    {
        $this->cmid = $cmid;

        return $this;
    }

    /**
     * Get cmid
     *
     * @return integer 
     */
    public function getCmid()
    {
        return $this->cmid;
    }

    /**
     * Set newmodule
     *
     * @param string $newmodule
     * @return MdlResourceOld
     */
    public function setNewmodule($newmodule)
    {
        $this->newmodule = $newmodule;

        return $this;
    }

    /**
     * Get newmodule
     *
     * @return string 
     */
    public function getNewmodule()
    {
        return $this->newmodule;
    }

    /**
     * Set newid
     *
     * @param integer $newid
     * @return MdlResourceOld
     */
    public function setNewid($newid)
    {
        $this->newid = $newid;

        return $this;
    }

    /**
     * Get newid
     *
     * @return integer 
     */
    public function getNewid()
    {
        return $this->newid;
    }

    /**
     * Set migrated
     *
     * @param integer $migrated
     * @return MdlResourceOld
     */
    public function setMigrated($migrated)
    {
        $this->migrated = $migrated;

        return $this;
    }

    /**
     * Get migrated
     *
     * @return integer 
     */
    public function getMigrated()
    {
        return $this->migrated;
    }
}
