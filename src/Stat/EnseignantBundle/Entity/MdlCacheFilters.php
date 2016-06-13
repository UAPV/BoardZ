<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCacheFilters
 *
 * @ORM\Table(name="mdl_cache_filters", indexes={@ORM\Index(name="mdl_cachfilt_filmd5_ix", columns={"filter", "md5key"})})
 * @ORM\Entity
 */
class MdlCacheFilters
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
     * @ORM\Column(name="filter", type="string", length=32, nullable=false)
     */
    private $filter = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="version", type="bigint", nullable=false)
     */
    private $version = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="md5key", type="string", length=32, nullable=false)
     */
    private $md5key = '';

    /**
     * @var string
     *
     * @ORM\Column(name="rawtext", type="text", nullable=false)
     */
    private $rawtext;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';



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
     * Set filter
     *
     * @param string $filter
     * @return MdlCacheFilters
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Get filter
     *
     * @return string 
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Set version
     *
     * @param integer $version
     * @return MdlCacheFilters
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return integer 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set md5key
     *
     * @param string $md5key
     * @return MdlCacheFilters
     */
    public function setMd5key($md5key)
    {
        $this->md5key = $md5key;

        return $this;
    }

    /**
     * Get md5key
     *
     * @return string 
     */
    public function getMd5key()
    {
        return $this->md5key;
    }

    /**
     * Set rawtext
     *
     * @param string $rawtext
     * @return MdlCacheFilters
     */
    public function setRawtext($rawtext)
    {
        $this->rawtext = $rawtext;

        return $this;
    }

    /**
     * Get rawtext
     *
     * @return string 
     */
    public function getRawtext()
    {
        return $this->rawtext;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlCacheFilters
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
