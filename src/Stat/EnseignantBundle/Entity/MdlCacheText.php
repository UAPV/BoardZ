<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCacheText
 *
 * @ORM\Table(name="mdl_cache_text", indexes={@ORM\Index(name="mdl_cachtext_md5_ix", columns={"md5key"}), @ORM\Index(name="mdl_cachtext_tim_ix", columns={"timemodified"})})
 * @ORM\Entity
 */
class MdlCacheText
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
     * @ORM\Column(name="md5key", type="string", length=32, nullable=false)
     */
    private $md5key = '';

    /**
     * @var string
     *
     * @ORM\Column(name="formattedtext", type="text", nullable=false)
     */
    private $formattedtext;

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
     * Set md5key
     *
     * @param string $md5key
     * @return MdlCacheText
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
     * Set formattedtext
     *
     * @param string $formattedtext
     * @return MdlCacheText
     */
    public function setFormattedtext($formattedtext)
    {
        $this->formattedtext = $formattedtext;

        return $this;
    }

    /**
     * Get formattedtext
     *
     * @return string 
     */
    public function getFormattedtext()
    {
        return $this->formattedtext;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlCacheText
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
