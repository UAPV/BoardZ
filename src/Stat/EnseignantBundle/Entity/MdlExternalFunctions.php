<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlExternalFunctions
 *
 * @ORM\Table(name="mdl_external_functions", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_extefunc_nam_uix", columns={"name"})})
 * @ORM\Entity
 */
class MdlExternalFunctions
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
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="classname", type="string", length=100, nullable=false)
     */
    private $classname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="methodname", type="string", length=100, nullable=false)
     */
    private $methodname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="classpath", type="string", length=255, nullable=true)
     */
    private $classpath;

    /**
     * @var string
     *
     * @ORM\Column(name="component", type="string", length=100, nullable=false)
     */
    private $component = '';

    /**
     * @var string
     *
     * @ORM\Column(name="capabilities", type="string", length=255, nullable=true)
     */
    private $capabilities;



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
     * @return MdlExternalFunctions
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
     * Set classname
     *
     * @param string $classname
     * @return MdlExternalFunctions
     */
    public function setClassname($classname)
    {
        $this->classname = $classname;

        return $this;
    }

    /**
     * Get classname
     *
     * @return string 
     */
    public function getClassname()
    {
        return $this->classname;
    }

    /**
     * Set methodname
     *
     * @param string $methodname
     * @return MdlExternalFunctions
     */
    public function setMethodname($methodname)
    {
        $this->methodname = $methodname;

        return $this;
    }

    /**
     * Get methodname
     *
     * @return string 
     */
    public function getMethodname()
    {
        return $this->methodname;
    }

    /**
     * Set classpath
     *
     * @param string $classpath
     * @return MdlExternalFunctions
     */
    public function setClasspath($classpath)
    {
        $this->classpath = $classpath;

        return $this;
    }

    /**
     * Get classpath
     *
     * @return string 
     */
    public function getClasspath()
    {
        return $this->classpath;
    }

    /**
     * Set component
     *
     * @param string $component
     * @return MdlExternalFunctions
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
     * Set capabilities
     *
     * @param string $capabilities
     * @return MdlExternalFunctions
     */
    public function setCapabilities($capabilities)
    {
        $this->capabilities = $capabilities;

        return $this;
    }

    /**
     * Get capabilities
     *
     * @return string 
     */
    public function getCapabilities()
    {
        return $this->capabilities;
    }
}
