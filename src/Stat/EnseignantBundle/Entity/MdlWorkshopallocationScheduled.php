<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshopallocationScheduled
 *
 * @ORM\Table(name="mdl_workshopallocation_scheduled", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_worksche_wor_uix", columns={"workshopid"})})
 * @ORM\Entity
 */
class MdlWorkshopallocationScheduled
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
     * @ORM\Column(name="workshopid", type="bigint", nullable=false)
     */
    private $workshopid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="submissionend", type="bigint", nullable=false)
     */
    private $submissionend;

    /**
     * @var integer
     *
     * @ORM\Column(name="timeallocated", type="bigint", nullable=true)
     */
    private $timeallocated;

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="text", nullable=true)
     */
    private $settings;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultstatus", type="bigint", nullable=true)
     */
    private $resultstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="resultmessage", type="string", length=1333, nullable=true)
     */
    private $resultmessage;

    /**
     * @var string
     *
     * @ORM\Column(name="resultlog", type="text", nullable=true)
     */
    private $resultlog;



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
     * Set workshopid
     *
     * @param integer $workshopid
     * @return MdlWorkshopallocationScheduled
     */
    public function setWorkshopid($workshopid)
    {
        $this->workshopid = $workshopid;

        return $this;
    }

    /**
     * Get workshopid
     *
     * @return integer 
     */
    public function getWorkshopid()
    {
        return $this->workshopid;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return MdlWorkshopallocationScheduled
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
     * Set submissionend
     *
     * @param integer $submissionend
     * @return MdlWorkshopallocationScheduled
     */
    public function setSubmissionend($submissionend)
    {
        $this->submissionend = $submissionend;

        return $this;
    }

    /**
     * Get submissionend
     *
     * @return integer 
     */
    public function getSubmissionend()
    {
        return $this->submissionend;
    }

    /**
     * Set timeallocated
     *
     * @param integer $timeallocated
     * @return MdlWorkshopallocationScheduled
     */
    public function setTimeallocated($timeallocated)
    {
        $this->timeallocated = $timeallocated;

        return $this;
    }

    /**
     * Get timeallocated
     *
     * @return integer 
     */
    public function getTimeallocated()
    {
        return $this->timeallocated;
    }

    /**
     * Set settings
     *
     * @param string $settings
     * @return MdlWorkshopallocationScheduled
     */
    public function setSettings($settings)
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * Get settings
     *
     * @return string 
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Set resultstatus
     *
     * @param integer $resultstatus
     * @return MdlWorkshopallocationScheduled
     */
    public function setResultstatus($resultstatus)
    {
        $this->resultstatus = $resultstatus;

        return $this;
    }

    /**
     * Get resultstatus
     *
     * @return integer 
     */
    public function getResultstatus()
    {
        return $this->resultstatus;
    }

    /**
     * Set resultmessage
     *
     * @param string $resultmessage
     * @return MdlWorkshopallocationScheduled
     */
    public function setResultmessage($resultmessage)
    {
        $this->resultmessage = $resultmessage;

        return $this;
    }

    /**
     * Get resultmessage
     *
     * @return string 
     */
    public function getResultmessage()
    {
        return $this->resultmessage;
    }

    /**
     * Set resultlog
     *
     * @param string $resultlog
     * @return MdlWorkshopallocationScheduled
     */
    public function setResultlog($resultlog)
    {
        $this->resultlog = $resultlog;

        return $this;
    }

    /**
     * Get resultlog
     *
     * @return string 
     */
    public function getResultlog()
    {
        return $this->resultlog;
    }
}
