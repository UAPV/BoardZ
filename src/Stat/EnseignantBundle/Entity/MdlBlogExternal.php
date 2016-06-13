<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlogExternal
 *
 * @ORM\Table(name="mdl_blog_external", indexes={@ORM\Index(name="mdl_blogexte_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlBlogExternal
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="filtertags", type="string", length=255, nullable=true)
     */
    private $filtertags;

    /**
     * @var boolean
     *
     * @ORM\Column(name="failedlastsync", type="boolean", nullable=false)
     */
    private $failedlastsync = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=true)
     */
    private $timemodified;

    /**
     * @var integer
     *
     * @ORM\Column(name="timefetched", type="bigint", nullable=false)
     */
    private $timefetched = '0';



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
     * @return MdlBlogExternal
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
     * Set name
     *
     * @param string $name
     * @return MdlBlogExternal
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
     * Set description
     *
     * @param string $description
     * @return MdlBlogExternal
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return MdlBlogExternal
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set filtertags
     *
     * @param string $filtertags
     * @return MdlBlogExternal
     */
    public function setFiltertags($filtertags)
    {
        $this->filtertags = $filtertags;

        return $this;
    }

    /**
     * Get filtertags
     *
     * @return string 
     */
    public function getFiltertags()
    {
        return $this->filtertags;
    }

    /**
     * Set failedlastsync
     *
     * @param boolean $failedlastsync
     * @return MdlBlogExternal
     */
    public function setFailedlastsync($failedlastsync)
    {
        $this->failedlastsync = $failedlastsync;

        return $this;
    }

    /**
     * Get failedlastsync
     *
     * @return boolean 
     */
    public function getFailedlastsync()
    {
        return $this->failedlastsync;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlBlogExternal
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
     * Set timefetched
     *
     * @param integer $timefetched
     * @return MdlBlogExternal
     */
    public function setTimefetched($timefetched)
    {
        $this->timefetched = $timefetched;

        return $this;
    }

    /**
     * Get timefetched
     *
     * @return integer 
     */
    public function getTimefetched()
    {
        return $this->timefetched;
    }
}
