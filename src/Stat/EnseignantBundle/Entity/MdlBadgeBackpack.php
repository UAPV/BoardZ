<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeBackpack
 *
 * @ORM\Table(name="mdl_badge_backpack", indexes={@ORM\Index(name="mdl_badgback_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlBadgeBackpack
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
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="backpackurl", type="string", length=255, nullable=false)
     */
    private $backpackurl = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="backpackuid", type="bigint", nullable=false)
     */
    private $backpackuid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="autosync", type="boolean", nullable=false)
     */
    private $autosync = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=true)
     */
    private $password;



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
     * @return MdlBadgeBackpack
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
     * Set email
     *
     * @param string $email
     * @return MdlBadgeBackpack
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set backpackurl
     *
     * @param string $backpackurl
     * @return MdlBadgeBackpack
     */
    public function setBackpackurl($backpackurl)
    {
        $this->backpackurl = $backpackurl;

        return $this;
    }

    /**
     * Get backpackurl
     *
     * @return string 
     */
    public function getBackpackurl()
    {
        return $this->backpackurl;
    }

    /**
     * Set backpackuid
     *
     * @param integer $backpackuid
     * @return MdlBadgeBackpack
     */
    public function setBackpackuid($backpackuid)
    {
        $this->backpackuid = $backpackuid;

        return $this;
    }

    /**
     * Get backpackuid
     *
     * @return integer 
     */
    public function getBackpackuid()
    {
        return $this->backpackuid;
    }

    /**
     * Set autosync
     *
     * @param boolean $autosync
     * @return MdlBadgeBackpack
     */
    public function setAutosync($autosync)
    {
        $this->autosync = $autosync;

        return $this;
    }

    /**
     * Get autosync
     *
     * @return boolean 
     */
    public function getAutosync()
    {
        return $this->autosync;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return MdlBadgeBackpack
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
}
