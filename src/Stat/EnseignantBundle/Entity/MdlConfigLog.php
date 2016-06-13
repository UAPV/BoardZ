<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlConfigLog
 *
 * @ORM\Table(name="mdl_config_log", indexes={@ORM\Index(name="mdl_conflog_tim_ix", columns={"timemodified"}), @ORM\Index(name="mdl_conflog_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlConfigLog
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
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;

    /**
     * @var string
     *
     * @ORM\Column(name="plugin", type="string", length=100, nullable=true)
     */
    private $plugin;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=true)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="oldvalue", type="text", nullable=true)
     */
    private $oldvalue;



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
     * @return MdlConfigLog
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
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlConfigLog
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
     * Set plugin
     *
     * @param string $plugin
     * @return MdlConfigLog
     */
    public function setPlugin($plugin)
    {
        $this->plugin = $plugin;

        return $this;
    }

    /**
     * Get plugin
     *
     * @return string 
     */
    public function getPlugin()
    {
        return $this->plugin;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlConfigLog
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
     * Set value
     *
     * @param string $value
     * @return MdlConfigLog
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
     * Set oldvalue
     *
     * @param string $oldvalue
     * @return MdlConfigLog
     */
    public function setOldvalue($oldvalue)
    {
        $this->oldvalue = $oldvalue;

        return $this;
    }

    /**
     * Get oldvalue
     *
     * @return string 
     */
    public function getOldvalue()
    {
        return $this->oldvalue;
    }
}
