<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradingformRubricLevels
 *
 * @ORM\Table(name="mdl_gradingform_rubric_levels", indexes={@ORM\Index(name="mdl_gradrubrleve_cri_ix", columns={"criterionid"})})
 * @ORM\Entity
 */
class MdlGradingformRubricLevels
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
     * @ORM\Column(name="criterionid", type="bigint", nullable=false)
     */
    private $criterionid;

    /**
     * @var string
     *
     * @ORM\Column(name="score", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $score;

    /**
     * @var string
     *
     * @ORM\Column(name="definition", type="text", nullable=true)
     */
    private $definition;

    /**
     * @var integer
     *
     * @ORM\Column(name="definitionformat", type="bigint", nullable=true)
     */
    private $definitionformat;



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
     * Set criterionid
     *
     * @param integer $criterionid
     * @return MdlGradingformRubricLevels
     */
    public function setCriterionid($criterionid)
    {
        $this->criterionid = $criterionid;

        return $this;
    }

    /**
     * Get criterionid
     *
     * @return integer 
     */
    public function getCriterionid()
    {
        return $this->criterionid;
    }

    /**
     * Set score
     *
     * @param string $score
     * @return MdlGradingformRubricLevels
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return string 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set definition
     *
     * @param string $definition
     * @return MdlGradingformRubricLevels
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
     * @return MdlGradingformRubricLevels
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
