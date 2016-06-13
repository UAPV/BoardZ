<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignPluginConfig
 *
 * @ORM\Table(name="mdl_assign_plugin_config", indexes={@ORM\Index(name="mdl_assiplugconf_plu_ix", columns={"plugin"}), @ORM\Index(name="mdl_assiplugconf_sub_ix", columns={"subtype"}), @ORM\Index(name="mdl_assiplugconf_nam_ix", columns={"name"}), @ORM\Index(name="mdl_assiplugconf_ass_ix", columns={"assignment"})})
 * @ORM\Entity
 */
class MdlAssignPluginConfig
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
     * @ORM\Column(name="assignment", type="bigint", nullable=false)
     */
    private $assignment = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="plugin", type="string", length=28, nullable=false)
     */
    private $plugin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="subtype", type="string", length=28, nullable=false)
     */
    private $subtype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=28, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=true)
     */
    private $value;



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
     * Set assignment
     *
     * @param integer $assignment
     * @return MdlAssignPluginConfig
     */
    public function setAssignment($assignment)
    {
        $this->assignment = $assignment;

        return $this;
    }

    /**
     * Get assignment
     *
     * @return integer 
     */
    public function getAssignment()
    {
        return $this->assignment;
    }

    /**
     * Set plugin
     *
     * @param string $plugin
     * @return MdlAssignPluginConfig
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
     * Set subtype
     *
     * @param string $subtype
     * @return MdlAssignPluginConfig
     */
    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;

        return $this;
    }

    /**
     * Get subtype
     *
     * @return string 
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlAssignPluginConfig
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
     * @return MdlAssignPluginConfig
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
}
