<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlMessageProviders
 *
 * @ORM\Table(name="mdl_message_providers", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_messprov_comnam_uix", columns={"component", "name"})})
 * @ORM\Entity
 */
class MdlMessageProviders
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
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="component", type="string", length=200, nullable=false)
     */
    private $component = '';

    /**
     * @var string
     *
     * @ORM\Column(name="capability", type="string", length=255, nullable=true)
     */
    private $capability;



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
     * @return MdlMessageProviders
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
     * Set component
     *
     * @param string $component
     * @return MdlMessageProviders
     */
    public function setComponent($component)
    {
        $this->component = $component;

        return $this;
    }

    /**
     * Get component
     *
     * @return string 
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Set capability
     *
     * @param string $capability
     * @return MdlMessageProviders
     */
    public function setCapability($capability)
    {
        $this->capability = $capability;

        return $this;
    }

    /**
     * Get capability
     *
     * @return string 
     */
    public function getCapability()
    {
        return $this->capability;
    }
}
