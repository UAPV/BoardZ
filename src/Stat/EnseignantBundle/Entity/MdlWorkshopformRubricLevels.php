<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshopformRubricLevels
 *
 * @ORM\Table(name="mdl_workshopform_rubric_levels", indexes={@ORM\Index(name="mdl_workrubrleve_dim_ix", columns={"dimensionid"})})
 * @ORM\Entity
 */
class MdlWorkshopformRubricLevels
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
     * @ORM\Column(name="dimensionid", type="bigint", nullable=false)
     */
    private $dimensionid;

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $grade;

    /**
     * @var string
     *
     * @ORM\Column(name="definition", type="text", nullable=true)
     */
    private $definition;

    /**
     * @var integer
     *
     * @ORM\Column(name="definitionformat", type="smallint", nullable=true)
     */
    private $definitionformat = '0';



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
     * Set dimensionid
     *
     * @param integer $dimensionid
     * @return MdlWorkshopformRubricLevels
     */
    public function setDimensionid($dimensionid)
    {
        $this->dimensionid = $dimensionid;

        return $this;
    }

    /**
     * Get dimensionid
     *
     * @return integer 
     */
    public function getDimensionid()
    {
        return $this->dimensionid;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return MdlWorkshopformRubricLevels
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set definition
     *
     * @param string $definition
     * @return MdlWorkshopformRubricLevels
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;

        return $this;
    }

    /**
     * Get definition
     *
     * @return string 
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Set definitionformat
     *
     * @param integer $definitionformat
     * @return MdlWorkshopformRubricLevels
     */
    public function setDefinitionformat($definitionformat)
    {
        $this->definitionformat = $definitionformat;

        return $this;
    }

    /**
     * Get definitionformat
     *
     * @return integer 
     */
    public function getDefinitionformat()
    {
        return $this->definitionformat;
    }
}
