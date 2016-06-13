<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlPortfolioInstanceConfig
 *
 * @ORM\Table(name="mdl_portfolio_instance_config", indexes={@ORM\Index(name="mdl_portinstconf_nam_ix", columns={"name"}), @ORM\Index(name="mdl_portinstconf_ins_ix", columns={"instance"})})
 * @ORM\Entity
 */
class MdlPortfolioInstanceConfig
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
     * @ORM\Column(name="instance", type="bigint", nullable=false)
     */
    private $instance;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
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
     * Set instance
     *
     * @param integer $instance
     * @return MdlPortfolioInstanceConfig
     */
    public function setInstance($instance)
    {
        $this->instance = $instance;

        return $this;
    }

    /**
     * Get instance
     *
     * @return integer 
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlPortfolioInstanceConfig
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
     * @return MdlPortfolioInstanceConfig
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
