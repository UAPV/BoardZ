<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshopAggregations
 *
 * @ORM\Table(name="mdl_workshop_aggregations", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_workaggr_woruse_uix", columns={"workshopid", "userid"})}, indexes={@ORM\Index(name="mdl_workaggr_wor_ix", columns={"workshopid"}), @ORM\Index(name="mdl_workaggr_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlWorkshopAggregations
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
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="gradinggrade", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $gradinggrade;

    /**
     * @var integer
     *
     * @ORM\Column(name="timegraded", type="bigint", nullable=true)
     */
    private $timegraded;



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
     * @return MdlWorkshopAggregations
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
     * @return MdlWorkshopAggregations
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
     * Set gradinggrade
     *
     * @param string $gradinggrade
     * @return MdlWorkshopAggregations
     */
    public function setGradinggrade($gradinggrade)
    {
        $this->gradinggrade = $gradinggrade;

        return $this;
    }

    /**
     * Get gradinggrade
     *
     * @return string 
     */
    public function getGradinggrade()
    {
        return $this->gradinggrade;
    }

    /**
     * Set timegraded
     *
     * @param integer $timegraded
     * @return MdlWorkshopAggregations
     */
    public function setTimegraded($timegraded)
    {
        $this->timegraded = $timegraded;

        return $this;
    }

    /**
     * Get timegraded
     *
     * @return integer 
     */
    public function getTimegraded()
    {
        return $this->timegraded;
    }
}
