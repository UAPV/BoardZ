<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeManualAward
 *
 * @ORM\Table(name="mdl_badge_manual_award", indexes={@ORM\Index(name="mdl_badgmanuawar_bad_ix", columns={"badgeid"}), @ORM\Index(name="mdl_badgmanuawar_rec_ix", columns={"recipientid"}), @ORM\Index(name="mdl_badgmanuawar_iss_ix", columns={"issuerid"}), @ORM\Index(name="mdl_badgmanuawar_iss2_ix", columns={"issuerrole"})})
 * @ORM\Entity
 */
class MdlBadgeManualAward
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
    private $badgeid;

    /**
     * @var integer
     *
     * @ORM\Column(name="recipientid", type="bigint", nullable=false)
     */
    private $recipientid;

    /**
     * @var integer
     *
     * @ORM\Column(name="issuerid", type="bigint", nullable=false)
     */
    private $issuerid;

    /**
     * @var integer
     *
     * @ORM\Column(name="issuerrole", type="bigint", nullable=false)
     */
    private $issuerrole;

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
     * Set badgeid
     *
     * @param integer $badgeid
     * @return MdlBadgeManualAward
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
     * Set recipientid
     *
     * @param integer $recipientid
     * @return MdlBadgeManualAward
     */
    public function setRecipientid($recipientid)
    {
        $this->recipientid = $recipientid;

        return $this;
    }

    /**
     * Get recipientid
     *
     * @return integer 
     */
    public function getRecipientid()
    {
        return $this->recipientid;
    }

    /**
     * Set issuerid
     *
     * @param integer $issuerid
     * @return MdlBadgeManualAward
     */
    public function setIssuerid($issuerid)
    {
        $this->issuerid = $issuerid;

        return $this;
    }

    /**
     * Get issuerid
     *
     * @return integer 
     */
    public function getIssuerid()
    {
        return $this->issuerid;
    }

    /**
     * Set issuerrole
     *
     * @param integer $issuerrole
     * @return MdlBadgeManualAward
     */
    public function setIssuerrole($issuerrole)
    {
        $this->issuerrole = $issuerrole;

        return $this;
    }

    /**
     * Get issuerrole
     *
     * @return integer 
     */
    public function getIssuerrole()
    {
        return $this->issuerrole;
    }

    /**
     * Set datemet
     *
     * @param integer $datemet
     * @return MdlBadgeManualAward
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
