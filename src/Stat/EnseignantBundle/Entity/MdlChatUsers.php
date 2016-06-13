<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlChatUsers
 *
 * @ORM\Table(name="mdl_chat_users", indexes={@ORM\Index(name="mdl_chatuser_use_ix", columns={"userid"}), @ORM\Index(name="mdl_chatuser_las_ix", columns={"lastping"}), @ORM\Index(name="mdl_chatuser_gro_ix", columns={"groupid"}), @ORM\Index(name="mdl_chatuser_cha_ix", columns={"chatid"})})
 * @ORM\Entity
 */
class MdlChatUsers
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
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=16, nullable=false)
     */
    private $version = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=45, nullable=false)
     */
    private $ip = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="firstping", type="bigint", nullable=false)
     */
    private $firstping = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastping", type="bigint", nullable=false)
     */
    private $lastping = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastmessageping", type="bigint", nullable=false)
     */
    private $lastmessageping = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sid", type="string", length=32, nullable=false)
     */
    private $sid = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="course", type="bigint", nullable=false)
     */
    private $course = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=30, nullable=false)
     */
    private $lang = '';



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
     * @return MdlChatUsers
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
     * @return MdlChatUsers
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
     * @return MdlChatUsers
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
     * Set version
     *
     * @param string $version
     * @return MdlChatUsers
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return MdlChatUsers
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set firstping
     *
     * @param integer $firstping
     * @return MdlChatUsers
     */
    public function setFirstping($firstping)
    {
        $this->firstping = $firstping;

        return $this;
    }

    /**
     * Get firstping
     *
     * @return integer 
     */
    public function getFirstping()
    {
        return $this->firstping;
    }

    /**
     * Set lastping
     *
     * @param integer $lastping
     * @return MdlChatUsers
     */
    public function setLastping($lastping)
    {
        $this->lastping = $lastping;

        return $this;
    }

    /**
     * Get lastping
     *
     * @return integer 
     */
    public function getLastping()
    {
        return $this->lastping;
    }

    /**
     * Set lastmessageping
     *
     * @param integer $lastmessageping
     * @return MdlChatUsers
     */
    public function setLastmessageping($lastmessageping)
    {
        $this->lastmessageping = $lastmessageping;

        return $this;
    }

    /**
     * Get lastmessageping
     *
     * @return integer 
     */
    public function getLastmessageping()
    {
        return $this->lastmessageping;
    }

    /**
     * Set sid
     *
     * @param string $sid
     * @return MdlChatUsers
     */
    public function setSid($sid)
    {
        $this->sid = $sid;

        return $this;
    }

    /**
     * Get sid
     *
     * @return string 
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set course
     *
     * @param integer $course
     * @return MdlChatUsers
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return integer 
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return MdlChatUsers
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string 
     */
    public function getLang()
    {
        return $this->lang;
    }
}
