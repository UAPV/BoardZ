<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeCriteriaMet
 *
 * @ORM\Table(name="mdl_badge_criteria_met", indexes={@ORM\Index(name="mdl_badgcritmet_cri_ix", columns={"critid"}), @ORM\Index(name="mdl_badgcritmet_use_ix", columns={"userid"}), @ORM\Index(name="mdl_badgcritmet_iss_ix", columns={"issuedid"})})
 * @ORM\Entity
 */
class MdlBadgeCriteriaMet
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
     * @ORM\Column(name="issuedid", type="bigint", nullable=true)
     */
    private $issuedid;

    /**
     * @var integer
     *
     * @ORM\Column(name="critid", type="bigint", nullable=false)
     */
    private $critid;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="datemet", type="bigint", nullable=false)
     */
    private $datemet;



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
     * Set issuedid
     *
     * @param integer $issuedid
     * @return MdlBadgeCriteriaMet
     */
    public function setIssuedid($issuedid)
    {
        $this->issuedid = $issuedid;

        return $this;
    }

    /**
     * Get issuedid
     *
     * @return integer 
     */
    public function getIssuedid()
    {
        return $this->issuedid;
    }

    /**
     * Set critid
     *
     * @param integer $critid
     * @return MdlBadgeCriteriaMet
     */
    public function setCritid($critid)
    {
        $this->critid = $critid;

        return $this;
    }

    /**
     * Get critid
     *
     * @return integer 
     */
    public function getCritid()
    {
        return $this->critid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlBadgeCriteriaMet
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
     * Set datemet
     *
     * @param integer $datemet
     * @return MdlBadgeCriteriaMet
     */
    public function setDatemet($datemet)
    {
        $this->datemet = $datemet;

        return $this;
    }

    /**
     * Get datemet
     *
     * @return integer 
     */
    public function getDatemet()
    {
        return $this->datemet;
    }
}
