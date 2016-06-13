<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlModules
 *
 * @ORM\Table(name="mdl_modules", indexes={@ORM\Index(name="mdl_modu_nam_ix", columns={"name"})})
 * @ORM\Entity
 */
class MdlModules
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
     * @ORM\Column(name="name", type="string", length=20, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="cron", type="bigint", nullable=false)
     */
    private $cron = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastcron", type="bigint", nullable=false)
     */
    private $lastcron = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="search", type="string", length=255, nullable=false)
     */
    private $search = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false)
     */
    private $visible = '1';



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
     * Set name
     *
     * @param string $name
     * @return MdlModules
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
     * Set cron
     *
     * @param integer $cron
     * @return MdlModules
     */
    public function setCron($cron)
    {
        $this->cron = $cron;

        return $this;
    }

    /**
     * Get cron
     *
     * @return integer 
     */
    public function getCron()
    {
        return $this->cron;
    }

    /**
     * Set lastcron
     *
     * @param integer $lastcron
     * @return MdlModules
     */
    public function setLastcron($lastcron)
    {
        $this->lastcron = $lastcron;

        return $this;
    }

    /**
     * Get lastcron
     *
     * @return integer 
     */
    public function getLastcron()
    {
        return $this->lastcron;
    }

    /**
     * Set search
     *
     * @param string $search
     * @return MdlModules
     */
    public function setSearch($search)
    {
        $this->search = $search;

        return $this;
    }

    /**
     * Get search
     *
     * @return string 
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return MdlModules
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }
}
