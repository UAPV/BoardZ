<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestionNumericalUnits
 *
 * @ORM\Table(name="mdl_question_numerical_units", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_quesnumeunit_queuni_uix", columns={"question", "unit"})}, indexes={@ORM\Index(name="mdl_quesnumeunit_que_ix", columns={"question"})})
 * @ORM\Entity
 */
class MdlQuestionNumericalUnits
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
     * @ORM\Column(name="question", type="bigint", nullable=false)
     */
    private $question = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="multiplier", type="decimal", precision=40, scale=20, nullable=false)
     */
    private $multiplier = '1.00000000000000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="string", length=50, nullable=false)
     */
    private $unit = '';



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
     * Set question
     *
     * @param integer $question
     * @return MdlQuestionNumericalUnits
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return integer 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set multiplier
     *
     * @param string $multiplier
     * @return MdlQuestionNumericalUnits
     */
    public function setMultiplier($multiplier)
    {
        $this->multiplier = $multiplier;

        return $this;
    }

    /**
     * Get multiplier
     *
     * @return string 
     */
    public function getMultiplier()
    {
        return $this->multiplier;
    }

    /**
     * Set unit
     *
     * @param string $unit
     * @return MdlQuestionNumericalUnits
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return string 
     */
    public function getUnit()
    {
        return $this->unit;
    }
}
