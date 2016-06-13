<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadge
 *
 * @ORM\Table(name="mdl_badge", indexes={@ORM\Index(name="mdl_badg_typ_ix", columns={"type"}), @ORM\Index(name="mdl_badg_cou_ix", columns={"courseid"}), @ORM\Index(name="mdl_badg_use_ix", columns={"usermodified"}), @ORM\Index(name="mdl_badg_use2_ix", columns={"usercreated"})})
 * @ORM\Entity
 */
class MdlBadge
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
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="usercreated", type="bigint", nullable=false)
     */
    private $usercreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="usermodified", type="bigint", nullable=false)
     */
    private $usermodified;

    /**
     * @var string
     *
     * @ORM\Column(name="issuername", type="string", length=255, nullable=false)
     */
    private $issuername = '';

    /**
     * @var string
     *
     * @ORM\Column(name="issuerurl", type="string", length=255, nullable=false)
     */
    private $issuerurl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="issuercontact", type="string", length=255, nullable=true)
     */
    private $issuercontact;

    /**
     * @var integer
     *
     * @ORM\Column(name="expiredate", type="bigint", nullable=true)
     */
    private $expiredate;

    /**
     * @var integer
     *
     * @ORM\Column(name="expireperiod", type="bigint", nullable=true)
     */
    private $expireperiod;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="courseid", type="bigint", nullable=true)
     */
    private $courseid;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="messagesubject", type="text", nullable=false)
     */
    private $messagesubject;

    /**
     * @var boolean
     *
     * @ORM\Column(name="attachment", type="boolean", nullable=false)
     */
    private $attachment = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="notification", type="boolean", nullable=false)
     */
    private $notification = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nextcron", type="bigint", nullable=true)
     */
    private $nextcron;



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
     * @return MdlBadge
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
     * @return MdlBadge
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
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlBadge
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
     * @return MdlBadge
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
     * Set usercreated
     *
     * @param integer $usercreated
     * @return MdlBadge
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
     * Set usermodified
     *
     * @param integer $usermodified
     * @return MdlBadge
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
     * Set issuername
     *
     * @param string $issuername
     * @return MdlBadge
     */
    public function setIssuername($issuername)
    {
        $this->issuername = $issuername;

        return $this;
    }

    /**
     * Get issuername
     *
     * @return string 
     */
    public function getIssuername()
    {
        return $this->issuername;
    }

    /**
     * Set issuerurl
     *
     * @param string $issuerurl
     * @return MdlBadge
     */
    public function setIssuerurl($issuerurl)
    {
        $this->issuerurl = $issuerurl;

        return $this;
    }

    /**
     * Get issuerurl
     *
     * @return string 
     */
    public function getIssuerurl()
    {
        return $this->issuerurl;
    }

    /**
     * Set issuercontact
     *
     * @param string $issuercontact
     * @return MdlBadge
     */
    public function setIssuercontact($issuercontact)
    {
        $this->issuercontact = $issuercontact;

        return $this;
    }

    /**
     * Get issuercontact
     *
     * @return string 
     */
    public function getIssuercontact()
    {
        return $this->issuercontact;
    }

    /**
     * Set expiredate
     *
     * @param integer $expiredate
     * @return MdlBadge
     */
    public function setExpiredate($expiredate)
    {
        $this->expiredate = $expiredate;

        return $this;
    }

    /**
     * Get expiredate
     *
     * @return integer 
     */
    public function getExpiredate()
    {
        return $this->expiredate;
    }

    /**
     * Set expireperiod
     *
     * @param integer $expireperiod
     * @return MdlBadge
     */
    public function setExpireperiod($expireperiod)
    {
        $this->expireperiod = $expireperiod;

        return $this;
    }

    /**
     * Get expireperiod
     *
     * @return integer 
     */
    public function getExpireperiod()
    {
        return $this->expireperiod;
    }

    /**
     * Set type
     *
     * @param boolean $type
     * @return MdlBadge
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set courseid
     *
     * @param integer $courseid
     * @return MdlBadge
     */
    public function setCourseid($courseid)
    {
        $this->courseid = $courseid;

        return $this;
    }

    /**
     * Get courseid
     *
     * @return integer 
     */
    public function getCourseid()
    {
        return $this->courseid;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return MdlBadge
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set messagesubject
     *
     * @param string $messagesubject
     * @return MdlBadge
     */
    public function setMessagesubject($messagesubject)
    {
        $this->messagesubject = $messagesubject;

        return $this;
    }

    /**
     * Get messagesubject
     *
     * @return string 
     */
    public function getMessagesubject()
    {
        return $this->messagesubject;
    }

    /**
     * Set attachment
     *
     * @param boolean $attachment
     * @return MdlBadge
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return boolean 
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set notification
     *
     * @param boolean $notification
     * @return MdlBadge
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;

        return $this;
    }

    /**
     * Get notification
     *
     * @return boolean 
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return MdlBadge
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set nextcron
     *
     * @param integer $nextcron
     * @return MdlBadge
     */
    public function setNextcron($nextcron)
    {
        $this->nextcron = $nextcron;

        return $this;
    }

    /**
     * Get nextcron
     *
     * @return integer 
     */
    public function getNextcron()
    {
        return $this->nextcron;
    }
}
