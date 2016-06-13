<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeCriteriaParam
 *
 * @ORM\Table(name="mdl_badge_criteria_param", indexes={@ORM\Index(name="mdl_badgcritpara_cri_ix", columns={"critid"})})
 * @ORM\Entity
 */
class MdlBadgeCriteriaParam
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
     * @ORM\Column(name="critid", type="bigint", nullable=false)
     */
    private $critid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
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
     * Set critid
     *
     * @param integer $critid
     * @return MdlBadgeCriteriaParam
     */
    public function setCritid($critid)
    {
        $this->critid = $critid;

        return $this;
    }

    /**
     * Get critid
     *
     * @return integer 
     */
    public function getCritid()
    {
        return $this->critid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlBadgeCriteriaParam
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
     * @return MdlBadgeCriteriaParam
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
