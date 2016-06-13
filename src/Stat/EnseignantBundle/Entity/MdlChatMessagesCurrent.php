<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlChatMessagesCurrent
 *
 * @ORM\Table(name="mdl_chat_messages_current", indexes={@ORM\Index(name="mdl_chatmesscurr_use_ix", columns={"userid"}), @ORM\Index(name="mdl_chatmesscurr_gro_ix", columns={"groupid"}), @ORM\Index(name="mdl_chatmesscurr_timcha_ix", columns={"timestamp", "chatid"}), @ORM\Index(name="mdl_chatmesscurr_cha_ix", columns={"chatid"})})
 * @ORM\Entity
 */
class MdlChatMessagesCurrent
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
     * @ORM\Column(name="chatid", type="bigint", nullable=false)
     */
    private $chatid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groupid", type="bigint", nullable=false)
     */
    private $groupid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="system", type="boolean", nullable=false)
     */
    private $system = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp", type="bigint", nullable=false)
     */
    private $timestamp = '0';



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
     * Set chatid
     *
     * @param integer $chatid
     * @return MdlChatMessagesCurrent
     */
    public function setChatid($chatid)
    {
        $this->chatid = $chatid;

        return $this;
    }

    /**
     * Get chatid
     *
     * @return integer 
     */
    public function getChatid()
    {
        return $this->chatid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlChatMessagesCurrent
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
     * Set groupid
     *
     * @param integer $groupid
     * @return MdlChatMessagesCurrent
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Get groupid
     *
     * @return integer 
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set system
     *
     * @param boolean $system
     * @return MdlChatMessagesCurrent
     */
    public function setSystem($system)
    {
        $this->system = $system;

        return $this;
    }

    /**
     * Get system
     *
     * @return boolean 
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return MdlChatMessagesCurrent
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
     * Set timestamp
     *
     * @param integer $timestamp
     * @return MdlChatMessagesCurrent
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return integer 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}
