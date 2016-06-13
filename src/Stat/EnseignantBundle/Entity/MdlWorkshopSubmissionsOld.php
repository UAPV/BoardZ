<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshopSubmissionsOld
 *
 * @ORM\Table(name="mdl_workshop_submissions_old", indexes={@ORM\Index(name="mdl_worksubmold_use_ix", columns={"userid"}), @ORM\Index(name="mdl_worksubmold_mai_ix", columns={"mailed"}), @ORM\Index(name="mdl_worksubmold_wor_ix", columns={"workshopid"})})
 * @ORM\Entity
 */
class MdlWorkshopSubmissionsOld
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
    private $workshopid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="mailed", type="boolean", nullable=false)
     */
    private $mailed = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="gradinggrade", type="smallint", nullable=false)
     */
    private $gradinggrade = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="finalgrade", type="smallint", nullable=false)
     */
    private $finalgrade = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="late", type="smallint", nullable=false)
     */
    private $late = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nassessments", type="bigint", nullable=false)
     */
    private $nassessments = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="newplugin", type="string", length=28, nullable=true)
     */
    private $newplugin;

    /**
     * @var integer
     *
     * @ORM\Column(name="newid", type="bigint", nullable=true)
     */
    private $newid;



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
     * @return MdlWorkshopSubmissionsOld
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
     * Set userid
     *
     * @param integer $userid
     * @return MdlWorkshopSubmissionsOld
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return MdlWorkshopSubmissionsOld
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
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlWorkshopSubmissionsOld
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
     * Set mailed
     *
     * @param boolean $mailed
     * @return MdlWorkshopSubmissionsOld
     */
    public function setMailed($mailed)
    {
        $this->mailed = $mailed;

        return $this;
    }

    /**
     * Get mailed
     *
     * @return boolean 
     */
    public function getMailed()
    {
        return $this->mailed;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return MdlWorkshopSubmissionsOld
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
     * Set gradinggrade
     *
     * @param integer $gradinggrade
     * @return MdlWorkshopSubmissionsOld
     */
    public function setGradinggrade($gradinggrade)
    {
        $this->gradinggrade = $gradinggrade;

        return $this;
    }

    /**
     * Get gradinggrade
     *
     * @return integer 
     */
    public function getGradinggrade()
    {
        return $this->gradinggrade;
    }

    /**
     * Set finalgrade
     *
     * @param integer $finalgrade
     * @return MdlWorkshopSubmissionsOld
     */
    public function setFinalgrade($finalgrade)
    {
        $this->finalgrade = $finalgrade;

        return $this;
    }

    /**
     * Get finalgrade
     *
     * @return integer 
     */
    public function getFinalgrade()
    {
        return $this->finalgrade;
    }

    /**
     * Set late
     *
     * @param integer $late
     * @return MdlWorkshopSubmissionsOld
     */
    public function setLate($late)
    {
        $this->late = $late;

        return $this;
    }

    /**
     * Get late
     *
     * @return integer 
     */
    public function getLate()
    {
        return $this->late;
    }

    /**
     * Set nassessments
     *
     * @param integer $nassessments
     * @return MdlWorkshopSubmissionsOld
     */
    public function setNassessments($nassessments)
    {
        $this->nassessments = $nassessments;

        return $this;
    }

    /**
     * Get nassessments
     *
     * @return integer 
     */
    public function getNassessments()
    {
        return $this->nassessments;
    }

    /**
     * Set newplugin
     *
     * @param string $newplugin
     * @return MdlWorkshopSubmissionsOld
     */
    public function setNewplugin($newplugin)
    {
        $this->newplugin = $newplugin;

        return $this;
    }

    /**
     * Get newplugin
     *
     * @return string 
     */
    public function getNewplugin()
    {
        return $this->newplugin;
    }

    /**
     * Set newid
     *
     * @param integer $newid
     * @return MdlWorkshopSubmissionsOld
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
}
