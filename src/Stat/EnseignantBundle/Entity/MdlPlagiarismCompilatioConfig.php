<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlPlagiarismCompilatioConfig
 *
 * @ORM\Table(name="mdl_plagiarism_compilatio_config", indexes={@ORM\Index(name="mdl_plagcompconf_cm_ix", columns={"cm"})})
 * @ORM\Entity
 */
class MdlPlagiarismCompilatioConfig
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
     * @ORM\Column(name="cm", type="bigint", nullable=false)
     */
    private $cm = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value = '';



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
     * Set cm
     *
     * @param integer $cm
     * @return MdlPlagiarismCompilatioConfig
     */
    public function setCm($cm)
    {
        $this->cm = $cm;

        return $this;
    }

    /**
     * Get cm
     *
     * @return integer 
     */
    public function getCm()
    {
        return $this->cm;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlPlagiarismCompilatioConfig
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
     * @return MdlPlagiarismCompilatioConfig
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
