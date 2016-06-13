<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWebdavLocks
 *
 * @ORM\Table(name="mdl_webdav_locks", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_webdlock_tok_uix", columns={"token"})}, indexes={@ORM\Index(name="mdl_webdlock_pat_ix", columns={"path"}), @ORM\Index(name="mdl_webdlock_exp_ix", columns={"expiry"})})
 * @ORM\Entity
 */
class MdlWebdavLocks
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
     * @ORM\Column(name="token", type="string", length=255, nullable=false)
     */
    private $token = '';

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=false)
     */
    private $path = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="expiry", type="bigint", nullable=false)
     */
    private $expiry = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="recursive", type="boolean", nullable=false)
     */
    private $recursive = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="exclusivelock", type="boolean", nullable=false)
     */
    private $exclusivelock = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="created", type="bigint", nullable=false)
     */
    private $created = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="modified", type="bigint", nullable=false)
     */
    private $modified = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=255, nullable=true)
     */
    private $owner;



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
     * Set token
     *
     * @param string $token
     * @return MdlWebdavLocks
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return MdlWebdavLocks
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set expiry
     *
     * @param integer $expiry
     * @return MdlWebdavLocks
     */
    public function setExpiry($expiry)
    {
        $this->expiry = $expiry;

        return $this;
    }

    /**
     * Get expiry
     *
     * @return integer 
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlWebdavLocks
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
     * Set recursive
     *
     * @param boolean $recursive
     * @return MdlWebdavLocks
     */
    public function setRecursive($recursive)
    {
        $this->recursive = $recursive;

        return $this;
    }

    /**
     * Get recursive
     *
     * @return boolean 
     */
    public function getRecursive()
    {
        return $this->recursive;
    }

    /**
     * Set exclusivelock
     *
     * @param boolean $exclusivelock
     * @return MdlWebdavLocks
     */
    public function setExclusivelock($exclusivelock)
    {
        $this->exclusivelock = $exclusivelock;

        return $this;
    }

    /**
     * Get exclusivelock
     *
     * @return boolean 
     */
    public function getExclusivelock()
    {
        return $this->exclusivelock;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return MdlWebdavLocks
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return integer 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param integer $modified
     * @return MdlWebdavLocks
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return integer 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set owner
     *
     * @param string $owner
     * @return MdlWebdavLocks
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string 
     */
    public function getOwner()
    {
        return $this->owner;
    }
}
