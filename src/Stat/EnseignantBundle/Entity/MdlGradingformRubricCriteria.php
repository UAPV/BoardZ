<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradingformRubricCriteria
 *
 * @ORM\Table(name="mdl_gradingform_rubric_criteria", indexes={@ORM\Index(name="mdl_gradrubrcrit_def_ix", columns={"definitionid"})})
 * @ORM\Entity
 */
class MdlGradingformRubricCriteria
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
     * @ORM\Column(name="definitionid", type="bigint", nullable=false)
     */
    private $definitionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="descriptionformat", type="boolean", nullable=true)
     */
    private $descriptionformat;



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
     * Set definitionid
     *
     * @param integer $definitionid
     * @return MdlGradingformRubricCriteria
     */
    public function setDefinitionid($definitionid)
    {
        $this->definitionid = $definitionid;

        return $this;
    }

    /**
     * Get definitionid
     *
     * @return integer 
     */
    public function getDefinitionid()
    {
        return $this->definitionid;
    }

    /**
     * Set sortorder
     *
     * @param integer $sortorder
     * @return MdlGradingformRubricCriteria
     */
    public function setSortorder($sortorder)
    {
        $this->sortorder = $sortorder;

        return $this;
    }

    /**
     * Get sortorder
     *
     * @return integer 
     */
    public function getSortorder()
    {
        return $this->sortorder;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return MdlGradingformRubricCriteria
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set descriptionformat
     *
     * @param boolean $descriptionformat
     * @return MdlGradingformRubricCriteria
     */
    public function setDescriptionformat($descriptionformat)
    {
        $this->descriptionformat = $descriptionformat;

        return $this;
    }

    /**
     * Get descriptionformat
     *
     * @return boolean 
     */
    public function getDescriptionformat()
    {
        return $this->descriptionformat;
    }
}
