<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCapabilities
 *
 * @ORM\Table(name="mdl_capabilities", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_capa_nam_uix", columns={"name"})})
 * @ORM\Entity
 */
class MdlCapabilities
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="captype", type="string", length=50, nullable=false)
     */
    private $captype = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="contextlevel", type="bigint", nullable=false)
     */
    private $contextlevel = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="component", type="string", length=100, nullable=false)
     */
    private $component = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="riskbitmask", type="bigint", nullable=false)
     */
    private $riskbitmask = '0';



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
     * @return MdlCapabilities
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
     * Set captype
     *
     * @param string $captype
     * @return MdlCapabilities
     */
    public function setCaptype($captype)
    {
        $this->captype = $captype;

        return $this;
    }

    /**
     * Get captype
     *
     * @return string 
     */
    public function getCaptype()
    {
        return $this->captype;
    }

    /**
     * Set contextlevel
     *
     * @param integer $contextlevel
     * @return MdlCapabilities
     */
    public function setContextlevel($contextlevel)
    {
        $this->contextlevel = $contextlevel;

        return $this;
    }

    /**
     * Get contextlevel
     *
     * @return integer 
     */
    public function getContextlevel()
    {
        return $this->contextlevel;
    }

    /**
     * Set component
     *
     * @param string $component
     * @return MdlCapabilities
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
     * Set riskbitmask
     *
     * @param integer $riskbitmask
     * @return MdlCapabilities
     */
    public function setRiskbitmask($riskbitmask)
    {
        $this->riskbitmask = $riskbitmask;

        return $this;
    }

    /**
     * Get riskbitmask
     *
     * @return integer 
     */
    public function getRiskbitmask()
    {
        return $this->riskbitmask;
    }
}
