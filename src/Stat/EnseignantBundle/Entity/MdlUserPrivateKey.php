<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUserPrivateKey
 *
 * @ORM\Table(name="mdl_user_private_key", indexes={@ORM\Index(name="mdl_userprivkey_scrval_ix", columns={"script", "value"}), @ORM\Index(name="mdl_userprivkey_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlUserPrivateKey
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
     * @ORM\Column(name="script", type="string", length=128, nullable=false)
     */
    private $script = '';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=128, nullable=false)
     */
    private $value = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="instance", type="bigint", nullable=true)
     */
    private $instance;

    /**
     * @var string
     *
     * @ORM\Column(name="iprestriction", type="string", length=255, nullable=true)
     */
    private $iprestriction;

    /**
     * @var integer
     *
     * @ORM\Column(name="validuntil", type="bigint", nullable=true)
     */
    private $validuntil;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=true)
     */
    private $timecreated;



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
     * Set script
     *
     * @param string $script
     * @return MdlUserPrivateKey
     */
    public function setScript($script)
    {
        $this->script = $script;

        return $this;
    }

    /**
     * Get script
     *
     * @return string 
     */
    public function getScript()
    {
        return $this->script;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return MdlUserPrivateKey
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlUserPrivateKey
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
     * Set instance
     *
     * @param integer $instance
     * @return MdlUserPrivateKey
     */
    public function setInstance($instance)
    {
        $this->instance = $instance;

        return $this;
    }

    /**
     * Get instance
     *
     * @return integer 
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Set iprestriction
     *
     * @param string $iprestriction
     * @return MdlUserPrivateKey
     */
    public function setIprestriction($iprestriction)
    {
        $this->iprestriction = $iprestriction;

        return $this;
    }

    /**
     * Get iprestriction
     *
     * @return string 
     */
    public function getIprestriction()
    {
        return $this->iprestriction;
    }

    /**
     * Set validuntil
     *
     * @param integer $validuntil
     * @return MdlUserPrivateKey
     */
    public function setValiduntil($validuntil)
    {
        $this->validuntil = $validuntil;

        return $this;
    }

    /**
     * Get validuntil
     *
     * @return integer 
     */
    public function getValiduntil()
    {
        return $this->validuntil;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlUserPrivateKey
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
}
