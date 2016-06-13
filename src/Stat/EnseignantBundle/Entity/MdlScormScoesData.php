<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlScormScoesData
 *
 * @ORM\Table(name="mdl_scorm_scoes_data", indexes={@ORM\Index(name="mdl_scorscoedata_sco_ix", columns={"scoid"})})
 * @ORM\Entity
 */
class MdlScormScoesData
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
     * @ORM\Column(name="scoid", type="bigint", nullable=false)
     */
    private $scoid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=false)
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
     * Set scoid
     *
     * @param integer $scoid
     * @return MdlScormScoesData
     */
    public function setScoid($scoid)
    {
        $this->scoid = $scoid;

        return $this;
    }

    /**
     * Get scoid
     *
     * @return integer 
     */
    public function getScoid()
    {
        return $this->scoid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlScormScoesData
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
     * @return MdlScormScoesData
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
