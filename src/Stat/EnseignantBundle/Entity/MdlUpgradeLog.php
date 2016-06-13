<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUpgradeLog
 *
 * @ORM\Table(name="mdl_upgrade_log", indexes={@ORM\Index(name="mdl_upgrlog_tim_ix", columns={"timemodified"}), @ORM\Index(name="mdl_upgrlog_typtim_ix", columns={"type", "timemodified"}), @ORM\Index(name="mdl_upgrlog_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlUpgradeLog
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
     * @ORM\Column(name="type", type="bigint", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="plugin", type="string", length=100, nullable=true)
     */
    private $plugin;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=100, nullable=true)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="targetversion", type="string", length=100, nullable=true)
     */
    private $targetversion;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="string", length=255, nullable=false)
     */
    private $info = '';

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="text", nullable=true)
     */
    private $details;

    /**
     * @var string
     *
     * @ORM\Column(name="backtrace", type="text", nullable=true)
     */
    private $backtrace;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return MdlUpgradeLog
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set plugin
     *
     * @param string $plugin
     * @return MdlUpgradeLog
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
     * Set version
     *
     * @param string $version
     * @return MdlUpgradeLog
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
     * Set targetversion
     *
     * @param string $targetversion
     * @return MdlUpgradeLog
     */
    public function setTargetversion($targetversion)
    {
        $this->targetversion = $targetversion;

        return $this;
    }

    /**
     * Get targetversion
     *
     * @return string 
     */
    public function getTargetversion()
    {
        return $this->targetversion;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return MdlUpgradeLog
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set details
     *
     * @param string $details
     * @return MdlUpgradeLog
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string 
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set backtrace
     *
     * @param string $backtrace
     * @return MdlUpgradeLog
     */
    public function setBacktrace($backtrace)
    {
        $this->backtrace = $backtrace;

        return $this;
    }

    /**
     * Get backtrace
     *
     * @return string 
     */
    public function getBacktrace()
    {
        return $this->backtrace;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlUpgradeLog
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
     * @return MdlUpgradeLog
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
