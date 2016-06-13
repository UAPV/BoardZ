<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlToolCustomlang
 *
 * @ORM\Table(name="mdl_tool_customlang", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_toolcust_lancomstr_uix", columns={"lang", "componentid", "stringid"})}, indexes={@ORM\Index(name="mdl_toolcust_com_ix", columns={"componentid"})})
 * @ORM\Entity
 */
class MdlToolCustomlang
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
     * @ORM\Column(name="lang", type="string", length=20, nullable=false)
     */
    private $lang = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="componentid", type="bigint", nullable=false)
     */
    private $componentid;

    /**
     * @var string
     *
     * @ORM\Column(name="stringid", type="string", length=255, nullable=false)
     */
    private $stringid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="original", type="text", nullable=false)
     */
    private $original;

    /**
     * @var string
     *
     * @ORM\Column(name="master", type="text", nullable=true)
     */
    private $master;

    /**
     * @var string
     *
     * @ORM\Column(name="local", type="text", nullable=true)
     */
    private $local;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecustomized", type="bigint", nullable=true)
     */
    private $timecustomized;

    /**
     * @var integer
     *
     * @ORM\Column(name="outdated", type="smallint", nullable=true)
     */
    private $outdated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="modified", type="smallint", nullable=true)
     */
    private $modified = '0';



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
     * Set lang
     *
     * @param string $lang
     * @return MdlToolCustomlang
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

    /**
     * Set componentid
     *
     * @param integer $componentid
     * @return MdlToolCustomlang
     */
    public function setComponentid($componentid)
    {
        $this->componentid = $componentid;

        return $this;
    }

    /**
     * Get componentid
     *
     * @return integer 
     */
    public function getComponentid()
    {
        return $this->componentid;
    }

    /**
     * Set stringid
     *
     * @param string $stringid
     * @return MdlToolCustomlang
     */
    public function setStringid($stringid)
    {
        $this->stringid = $stringid;

        return $this;
    }

    /**
     * Get stringid
     *
     * @return string 
     */
    public function getStringid()
    {
        return $this->stringid;
    }

    /**
     * Set original
     *
     * @param string $original
     * @return MdlToolCustomlang
     */
    public function setOriginal($original)
    {
        $this->original = $original;

        return $this;
    }

    /**
     * Get original
     *
     * @return string 
     */
    public function getOriginal()
    {
        return $this->original;
    }

    /**
     * Set master
     *
     * @param string $master
     * @return MdlToolCustomlang
     */
    public function setMaster($master)
    {
        $this->master = $master;

        return $this;
    }

    /**
     * Get master
     *
     * @return string 
     */
    public function getMaster()
    {
        return $this->master;
    }

    /**
     * Set local
     *
     * @param string $local
     * @return MdlToolCustomlang
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return string 
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlToolCustomlang
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
     * Set timecustomized
     *
     * @param integer $timecustomized
     * @return MdlToolCustomlang
     */
    public function setTimecustomized($timecustomized)
    {
        $this->timecustomized = $timecustomized;

        return $this;
    }

    /**
     * Get timecustomized
     *
     * @return integer 
     */
    public function getTimecustomized()
    {
        return $this->timecustomized;
    }

    /**
     * Set outdated
     *
     * @param integer $outdated
     * @return MdlToolCustomlang
     */
    public function setOutdated($outdated)
    {
        $this->outdated = $outdated;

        return $this;
    }

    /**
     * Get outdated
     *
     * @return integer 
     */
    public function getOutdated()
    {
        return $this->outdated;
    }

    /**
     * Set modified
     *
     * @param integer $modified
     * @return MdlToolCustomlang
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
}
