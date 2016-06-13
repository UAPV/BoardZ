<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCacheFlags
 *
 * @ORM\Table(name="mdl_cache_flags", indexes={@ORM\Index(name="mdl_cachflag_fla_ix", columns={"flagtype"}), @ORM\Index(name="mdl_cachflag_nam_ix", columns={"name"})})
 * @ORM\Entity
 */
class MdlCacheFlags
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
     * @ORM\Column(name="flagtype", type="string", length=255, nullable=false)
     */
    private $flagtype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=false)
     */
    private $value;

    /**
     * @var integer
     *
     * @ORM\Column(name="expiry", type="bigint", nullable=false)
     */
    private $expiry;



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
     * Set flagtype
     *
     * @param string $flagtype
     * @return MdlCacheFlags
     */
    public function setFlagtype($flagtype)
    {
        $this->flagtype = $flagtype;

        return $this;
    }

    /**
     * Get flagtype
     *
     * @return string 
     */
    public function getFlagtype()
    {
        return $this->flagtype;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlCacheFlags
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
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlCacheFlags
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
     * Set value
     *
     * @param string $value
     * @return MdlCacheFlags
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
     * Set expiry
     *
     * @param integer $expiry
     * @return MdlCacheFlags
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
}
