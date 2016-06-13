<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeIssued
 *
 * @ORM\Table(name="mdl_badge_issued", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_badgissu_baduse_uix", columns={"badgeid", "userid"})}, indexes={@ORM\Index(name="mdl_badgissu_bad_ix", columns={"badgeid"}), @ORM\Index(name="mdl_badgissu_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlBadgeIssued
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
     * @ORM\Column(name="badgeid", type="bigint", nullable=false)
     */
    private $badgeid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="uniquehash", type="text", nullable=false)
     */
    private $uniquehash;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateissued", type="bigint", nullable=false)
     */
    private $dateissued = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateexpire", type="bigint", nullable=true)
     */
    private $dateexpire;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false)
     */
    private $visible = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="issuernotified", type="bigint", nullable=true)
     */
    private $issuernotified;



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
     * Set badgeid
     *
     * @param integer $badgeid
     * @return MdlBadgeIssued
     */
    public function setBadgeid($badgeid)
    {
        $this->badgeid = $badgeid;

        return $this;
    }

    /**
     * Get badgeid
     *
     * @return integer 
     */
    public function getBadgeid()
    {
        return $this->badgeid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlBadgeIssued
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
     * Set uniquehash
     *
     * @param string $uniquehash
     * @return MdlBadgeIssued
     */
    public function setUniquehash($uniquehash)
    {
        $this->uniquehash = $uniquehash;

        return $this;
    }

    /**
     * Get uniquehash
     *
     * @return string 
     */
    public function getUniquehash()
    {
        return $this->uniquehash;
    }

    /**
     * Set dateissued
     *
     * @param integer $dateissued
     * @return MdlBadgeIssued
     */
    public function setDateissued($dateissued)
    {
        $this->dateissued = $dateissued;

        return $this;
    }

    /**
     * Get dateissued
     *
     * @return integer 
     */
    public function getDateissued()
    {
        return $this->dateissued;
    }

    /**
     * Set dateexpire
     *
     * @param integer $dateexpire
     * @return MdlBadgeIssued
     */
    public function setDateexpire($dateexpire)
    {
        $this->dateexpire = $dateexpire;

        return $this;
    }

    /**
     * Get dateexpire
     *
     * @return integer 
     */
    public function getDateexpire()
    {
        return $this->dateexpire;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return MdlBadgeIssued
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set issuernotified
     *
     * @param integer $issuernotified
     * @return MdlBadgeIssued
     */
    public function setIssuernotified($issuernotified)
    {
        $this->issuernotified = $issuernotified;

        return $this;
    }

    /**
     * Get issuernotified
     *
     * @return integer 
     */
    public function getIssuernotified()
    {
        return $this->issuernotified;
    }
}
