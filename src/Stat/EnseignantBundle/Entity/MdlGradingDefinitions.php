<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradingDefinitions
 *
 * @ORM\Table(name="mdl_grading_definitions", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_graddefi_aremet_uix", columns={"areaid", "method"})}, indexes={@ORM\Index(name="mdl_graddefi_are_ix", columns={"areaid"}), @ORM\Index(name="mdl_graddefi_use_ix", columns={"usermodified"}), @ORM\Index(name="mdl_graddefi_use2_ix", columns={"usercreated"})})
 * @ORM\Entity
 */
class MdlGradingDefinitions
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
     * @ORM\Column(name="areaid", type="bigint", nullable=false)
     */
    private $areaid;

    /**
     * @var string
     *
     * @ORM\Column(name="method", type="string", length=100, nullable=false)
     */
    private $method = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="descriptionformat", type="boolean", nullable=true)
     */
    private $descriptionformat;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="bigint", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="copiedfromid", type="bigint", nullable=true)
     */
    private $copiedfromid;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="usercreated", type="bigint", nullable=false)
     */
    private $usercreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;

    /**
     * @var integer
     *
     * @ORM\Column(name="usermodified", type="bigint", nullable=false)
     */
    private $usermodified;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecopied", type="bigint", nullable=true)
     */
    private $timecopied = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="options", type="text", nullable=true)
     */
    private $options;



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
     * Set areaid
     *
     * @param integer $areaid
     * @return MdlGradingDefinitions
     */
    public function setAreaid($areaid)
    {
        $this->areaid = $areaid;

        return $this;
    }

    /**
     * Get areaid
     *
     * @return integer 
     */
    public function getAreaid()
    {
        return $this->areaid;
    }

    /**
     * Set method
     *
     * @param string $method
     * @return MdlGradingDefinitions
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method
     *
     * @return string 
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlGradingDefinitions
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
     * Set description
     *
     * @param string $description
     * @return MdlGradingDefinitions
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set descriptionformat
     *
     * @param boolean $descriptionformat
     * @return MdlGradingDefinitions
     */
    public function setDescriptionformat($descriptionformat)
    {
        $this->descriptionformat = $descriptionformat;

        return $this;
    }

    /**
     * Get descriptionformat
     *
     * @return boolean 
     */
    public function getDescriptionformat()
    {
        return $this->descriptionformat;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return MdlGradingDefinitions
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set copiedfromid
     *
     * @param integer $copiedfromid
     * @return MdlGradingDefinitions
     */
    public function setCopiedfromid($copiedfromid)
    {
        $this->copiedfromid = $copiedfromid;

        return $this;
    }

    /**
     * Get copiedfromid
     *
     * @return integer 
     */
    public function getCopiedfromid()
    {
        return $this->copiedfromid;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlGradingDefinitions
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
     * Set usercreated
     *
     * @param integer $usercreated
     * @return MdlGradingDefinitions
     */
    public function setUsercreated($usercreated)
    {
        $this->usercreated = $usercreated;

        return $this;
    }

    /**
     * Get usercreated
     *
     * @return integer 
     */
    public function getUsercreated()
    {
        return $this->usercreated;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlGradingDefinitions
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
     * Set usermodified
     *
     * @param integer $usermodified
     * @return MdlGradingDefinitions
     */
    public function setUsermodified($usermodified)
    {
        $this->usermodified = $usermodified;

        return $this;
    }

    /**
     * Get usermodified
     *
     * @return integer 
     */
    public function getUsermodified()
    {
        return $this->usermodified;
    }

    /**
     * Set timecopied
     *
     * @param integer $timecopied
     * @return MdlGradingDefinitions
     */
    public function setTimecopied($timecopied)
    {
        $this->timecopied = $timecopied;

        return $this;
    }

    /**
     * Get timecopied
     *
     * @return integer 
     */
    public function getTimecopied()
    {
        return $this->timecopied;
    }

    /**
     * Set options
     *
     * @param string $options
     * @return MdlGradingDefinitions
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
}
