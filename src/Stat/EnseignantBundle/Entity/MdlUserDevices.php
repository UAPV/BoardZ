<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUserDevices
 *
 * @ORM\Table(name="mdl_user_devices", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_userdevi_pususe_uix", columns={"pushid", "userid"}), @ORM\UniqueConstraint(name="mdl_userdevi_puspla_uix", columns={"pushid", "platform"})}, indexes={@ORM\Index(name="mdl_userdevi_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlUserDevices
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
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="appid", type="string", length=128, nullable=false)
     */
    private $appid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=32, nullable=false)
     */
    private $model = '';

    /**
     * @var string
     *
     * @ORM\Column(name="platform", type="string", length=32, nullable=false)
     */
    private $platform = '';

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=32, nullable=false)
     */
    private $version = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pushid", type="string", length=255, nullable=false)
     */
    private $pushid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="uuid", type="string", length=255, nullable=false)
     */
    private $uuid = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;



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
     * Set userid
     *
     * @param integer $userid
     * @return MdlUserDevices
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
     * Set appid
     *
     * @param string $appid
     * @return MdlUserDevices
     */
    public function setAppid($appid)
    {
        $this->appid = $appid;

        return $this;
    }

    /**
     * Get appid
     *
     * @return string 
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlUserDevices
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
     * Set model
     *
     * @param string $model
     * @return MdlUserDevices
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set platform
     *
     * @param string $platform
     * @return MdlUserDevices
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * Get platform
     *
     * @return string 
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return MdlUserDevices
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
     * Set pushid
     *
     * @param string $pushid
     * @return MdlUserDevices
     */
    public function setPushid($pushid)
    {
        $this->pushid = $pushid;

        return $this;
    }

    /**
     * Get pushid
     *
     * @return string 
     */
    public function getPushid()
    {
        return $this->pushid;
    }

    /**
     * Set uuid
     *
     * @param string $uuid
     * @return MdlUserDevices
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * Get uuid
     *
     * @return string 
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlUserDevices
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
     * @return MdlUserDevices
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
}
