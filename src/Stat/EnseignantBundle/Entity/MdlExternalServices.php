<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlExternalServices
 *
 * @ORM\Table(name="mdl_external_services", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_exteserv_nam_uix", columns={"name"})})
 * @ORM\Entity
 */
class MdlExternalServices
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
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="requiredcapability", type="string", length=150, nullable=true)
     */
    private $requiredcapability;

    /**
     * @var boolean
     *
     * @ORM\Column(name="restrictedusers", type="boolean", nullable=false)
     */
    private $restrictedusers;

    /**
     * @var string
     *
     * @ORM\Column(name="component", type="string", length=100, nullable=true)
     */
    private $component;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=true)
     */
    private $timemodified;

    /**
     * @var string
     *
     * @ORM\Column(name="shortname", type="string", length=255, nullable=true)
     */
    private $shortname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="downloadfiles", type="boolean", nullable=false)
     */
    private $downloadfiles = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="uploadfiles", type="boolean", nullable=false)
     */
    private $uploadfiles = '0';



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
     * @return MdlExternalServices
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
     * Set enabled
     *
     * @param boolean $enabled
     * @return MdlExternalServices
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set requiredcapability
     *
     * @param string $requiredcapability
     * @return MdlExternalServices
     */
    public function setRequiredcapability($requiredcapability)
    {
        $this->requiredcapability = $requiredcapability;

        return $this;
    }

    /**
     * Get requiredcapability
     *
     * @return string 
     */
    public function getRequiredcapability()
    {
        return $this->requiredcapability;
    }

    /**
     * Set restrictedusers
     *
     * @param boolean $restrictedusers
     * @return MdlExternalServices
     */
    public function setRestrictedusers($restrictedusers)
    {
        $this->restrictedusers = $restrictedusers;

        return $this;
    }

    /**
     * Get restrictedusers
     *
     * @return boolean 
     */
    public function getRestrictedusers()
    {
        return $this->restrictedusers;
    }

    /**
     * Set component
     *
     * @param string $component
     * @return MdlExternalServices
     */
    public function setComponent($component)
    {
        $this->component = $component;

        return $this;
    }

    /**
     * Get component
     *
     * @return string 
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlExternalServices
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
     * @return MdlExternalServices
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
     * Set shortname
     *
     * @param string $shortname
     * @return MdlExternalServices
     */
    public function setShortname($shortname)
    {
        $this->shortname = $shortname;

        return $this;
    }

    /**
     * Get shortname
     *
     * @return string 
     */
    public function getShortname()
    {
        return $this->shortname;
    }

    /**
     * Set downloadfiles
     *
     * @param boolean $downloadfiles
     * @return MdlExternalServices
     */
    public function setDownloadfiles($downloadfiles)
    {
        $this->downloadfiles = $downloadfiles;

        return $this;
    }

    /**
     * Get downloadfiles
     *
     * @return boolean 
     */
    public function getDownloadfiles()
    {
        return $this->downloadfiles;
    }

    /**
     * Set uploadfiles
     *
     * @param boolean $uploadfiles
     * @return MdlExternalServices
     */
    public function setUploadfiles($uploadfiles)
    {
        $this->uploadfiles = $uploadfiles;

        return $this;
    }

    /**
     * Get uploadfiles
     *
     * @return boolean 
     */
    public function getUploadfiles()
    {
        return $this->uploadfiles;
    }
}
