<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlock
 *
 * @ORM\Table(name="mdl_block", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_bloc_nam_uix", columns={"name"})})
 * @ORM\Entity
 */
class MdlBlock
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
     * @ORM\Column(name="name", type="string", length=40, nullable=false)
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
     * @return MdlBlock
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
     * @return MdlBlock
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
     * @return MdlBlock
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
     * Set visible
     *
     * @param boolean $visible
     * @return MdlBlock
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
