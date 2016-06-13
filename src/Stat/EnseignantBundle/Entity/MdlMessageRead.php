<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlMessageRead
 *
 * @ORM\Table(name="mdl_message_read", indexes={@ORM\Index(name="mdl_messread_use_ix", columns={"useridfrom"}), @ORM\Index(name="mdl_messread_use2_ix", columns={"useridto"})})
 * @ORM\Entity
 */
class MdlMessageRead
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
     * @ORM\Column(name="useridfrom", type="bigint", nullable=false)
     */
    private $useridfrom = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="useridto", type="bigint", nullable=false)
     */
    private $useridto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="text", nullable=true)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="fullmessage", type="text", nullable=true)
     */
    private $fullmessage;

    /**
     * @var integer
     *
     * @ORM\Column(name="fullmessageformat", type="smallint", nullable=true)
     */
    private $fullmessageformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fullmessagehtml", type="text", nullable=true)
     */
    private $fullmessagehtml;

    /**
     * @var string
     *
     * @ORM\Column(name="smallmessage", type="text", nullable=true)
     */
    private $smallmessage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="notification", type="boolean", nullable=true)
     */
    private $notification = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="contexturl", type="text", nullable=true)
     */
    private $contexturl;

    /**
     * @var string
     *
     * @ORM\Column(name="contexturlname", type="text", nullable=true)
     */
    private $contexturlname;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timeread", type="bigint", nullable=false)
     */
    private $timeread = '0';



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
     * Set useridfrom
     *
     * @param integer $useridfrom
     * @return MdlMessageRead
     */
    public function setUseridfrom($useridfrom)
    {
        $this->useridfrom = $useridfrom;

        return $this;
    }

    /**
     * Get useridfrom
     *
     * @return integer 
     */
    public function getUseridfrom()
    {
        return $this->useridfrom;
    }

    /**
     * Set useridto
     *
     * @param integer $useridto
     * @return MdlMessageRead
     */
    public function setUseridto($useridto)
    {
        $this->useridto = $useridto;

        return $this;
    }

    /**
     * Get useridto
     *
     * @return integer 
     */
    public function getUseridto()
    {
        return $this->useridto;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return MdlMessageRead
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set fullmessage
     *
     * @param string $fullmessage
     * @return MdlMessageRead
     */
    public function setFullmessage($fullmessage)
    {
        $this->fullmessage = $fullmessage;

        return $this;
    }

    /**
     * Get fullmessage
     *
     * @return string 
     */
    public function getFullmessage()
    {
        return $this->fullmessage;
    }

    /**
     * Set fullmessageformat
     *
     * @param integer $fullmessageformat
     * @return MdlMessageRead
     */
    public function setFullmessageformat($fullmessageformat)
    {
        $this->fullmessageformat = $fullmessageformat;

        return $this;
    }

    /**
     * Get fullmessageformat
     *
     * @return integer 
     */
    public function getFullmessageformat()
    {
        return $this->fullmessageformat;
    }

    /**
     * Set fullmessagehtml
     *
     * @param string $fullmessagehtml
     * @return MdlMessageRead
     */
    public function setFullmessagehtml($fullmessagehtml)
    {
        $this->fullmessagehtml = $fullmessagehtml;

        return $this;
    }

    /**
     * Get fullmessagehtml
     *
     * @return string 
     */
    public function getFullmessagehtml()
    {
        return $this->fullmessagehtml;
    }

    /**
     * Set smallmessage
     *
     * @param string $smallmessage
     * @return MdlMessageRead
     */
    public function setSmallmessage($smallmessage)
    {
        $this->smallmessage = $smallmessage;

        return $this;
    }

    /**
     * Get smallmessage
     *
     * @return string 
     */
    public function getSmallmessage()
    {
        return $this->smallmessage;
    }

    /**
     * Set notification
     *
     * @param boolean $notification
     * @return MdlMessageRead
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
     * Set contexturl
     *
     * @param string $contexturl
     * @return MdlMessageRead
     */
    public function setContexturl($contexturl)
    {
        $this->contexturl = $contexturl;

        return $this;
    }

    /**
     * Get contexturl
     *
     * @return string 
     */
    public function getContexturl()
    {
        return $this->contexturl;
    }

    /**
     * Set contexturlname
     *
     * @param string $contexturlname
     * @return MdlMessageRead
     */
    public function setContexturlname($contexturlname)
    {
        $this->contexturlname = $contexturlname;

        return $this;
    }

    /**
     * Get contexturlname
     *
     * @return string 
     */
    public function getContexturlname()
    {
        return $this->contexturlname;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlMessageRead
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
     * Set timeread
     *
     * @param integer $timeread
     * @return MdlMessageRead
     */
    public function setTimeread($timeread)
    {
        $this->timeread = $timeread;

        return $this;
    }

    /**
     * Get timeread
     *
     * @return integer 
     */
    public function getTimeread()
    {
        return $this->timeread;
    }
}
