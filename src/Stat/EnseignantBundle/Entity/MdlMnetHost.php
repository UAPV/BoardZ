<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlMnetHost
 *
 * @ORM\Table(name="mdl_mnet_host", indexes={@ORM\Index(name="mdl_mnethost_app_ix", columns={"applicationid"})})
 * @ORM\Entity
 */
class MdlMnetHost
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
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="wwwroot", type="string", length=255, nullable=false)
     */
    private $wwwroot = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=45, nullable=false)
     */
    private $ipAddress = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=80, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="public_key", type="text", nullable=false)
     */
    private $publicKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="public_key_expires", type="bigint", nullable=false)
     */
    private $publicKeyExpires = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="transport", type="boolean", nullable=false)
     */
    private $transport = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="portno", type="integer", nullable=false)
     */
    private $portno = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="last_connect_time", type="bigint", nullable=false)
     */
    private $lastConnectTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="last_log_id", type="bigint", nullable=false)
     */
    private $lastLogId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="force_theme", type="boolean", nullable=false)
     */
    private $forceTheme = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=100, nullable=true)
     */
    private $theme;

    /**
     * @var integer
     *
     * @ORM\Column(name="applicationid", type="bigint", nullable=false)
     */
    private $applicationid = '1';



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
     * Set deleted
     *
     * @param boolean $deleted
     * @return MdlMnetHost
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set wwwroot
     *
     * @param string $wwwroot
     * @return MdlMnetHost
     */
    public function setWwwroot($wwwroot)
    {
        $this->wwwroot = $wwwroot;

        return $this;
    }

    /**
     * Get wwwroot
     *
     * @return string 
     */
    public function getWwwroot()
    {
        return $this->wwwroot;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     * @return MdlMnetHost
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string 
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlMnetHost
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
     * Set publicKey
     *
     * @param string $publicKey
     * @return MdlMnetHost
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;

        return $this;
    }

    /**
     * Get publicKey
     *
     * @return string 
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * Set publicKeyExpires
     *
     * @param integer $publicKeyExpires
     * @return MdlMnetHost
     */
    public function setPublicKeyExpires($publicKeyExpires)
    {
        $this->publicKeyExpires = $publicKeyExpires;

        return $this;
    }

    /**
     * Get publicKeyExpires
     *
     * @return integer 
     */
    public function getPublicKeyExpires()
    {
        return $this->publicKeyExpires;
    }

    /**
     * Set transport
     *
     * @param boolean $transport
     * @return MdlMnetHost
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;

        return $this;
    }

    /**
     * Get transport
     *
     * @return boolean 
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Set portno
     *
     * @param integer $portno
     * @return MdlMnetHost
     */
    public function setPortno($portno)
    {
        $this->portno = $portno;

        return $this;
    }

    /**
     * Get portno
     *
     * @return integer 
     */
    public function getPortno()
    {
        return $this->portno;
    }

    /**
     * Set lastConnectTime
     *
     * @param integer $lastConnectTime
     * @return MdlMnetHost
     */
    public function setLastConnectTime($lastConnectTime)
    {
        $this->lastConnectTime = $lastConnectTime;

        return $this;
    }

    /**
     * Get lastConnectTime
     *
     * @return integer 
     */
    public function getLastConnectTime()
    {
        return $this->lastConnectTime;
    }

    /**
     * Set lastLogId
     *
     * @param integer $lastLogId
     * @return MdlMnetHost
     */
    public function setLastLogId($lastLogId)
    {
        $this->lastLogId = $lastLogId;

        return $this;
    }

    /**
     * Get lastLogId
     *
     * @return integer 
     */
    public function getLastLogId()
    {
        return $this->lastLogId;
    }

    /**
     * Set forceTheme
     *
     * @param boolean $forceTheme
     * @return MdlMnetHost
     */
    public function setForceTheme($forceTheme)
    {
        $this->forceTheme = $forceTheme;

        return $this;
    }

    /**
     * Get forceTheme
     *
     * @return boolean 
     */
    public function getForceTheme()
    {
        return $this->forceTheme;
    }

    /**
     * Set theme
     *
     * @param string $theme
     * @return MdlMnetHost
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set applicationid
     *
     * @param integer $applicationid
     * @return MdlMnetHost
     */
    public function setApplicationid($applicationid)
    {
        $this->applicationid = $applicationid;

        return $this;
    }

    /**
     * Get applicationid
     *
     * @return integer 
     */
    public function getApplicationid()
    {
        return $this->applicationid;
    }
}
