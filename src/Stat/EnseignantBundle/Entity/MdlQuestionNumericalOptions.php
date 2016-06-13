<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestionNumericalOptions
 *
 * @ORM\Table(name="mdl_question_numerical_options", indexes={@ORM\Index(name="mdl_quesnumeopti_que_ix", columns={"question"})})
 * @ORM\Entity
 */
class MdlQuestionNumericalOptions
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
     * @var integer
     *
     * @ORM\Column(name="showunits", type="smallint", nullable=false)
     */
    private $showunits = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="unitsleft", type="smallint", nullable=false)
     */
    private $unitsleft = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="unitgradingtype", type="smallint", nullable=false)
     */
    private $unitgradingtype = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="unitpenalty", type="decimal", precision=12, scale=7, nullable=false)
     */
    private $unitpenalty = '0.1000000';



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
     * @return MdlQuestionNumericalOptions
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
     * Set showunits
     *
     * @param integer $showunits
     * @return MdlQuestionNumericalOptions
     */
    public function setShowunits($showunits)
    {
        $this->showunits = $showunits;

        return $this;
    }

    /**
     * Get showunits
     *
     * @return integer 
     */
    public function getShowunits()
    {
        return $this->showunits;
    }

    /**
     * Set unitsleft
     *
     * @param integer $unitsleft
     * @return MdlQuestionNumericalOptions
     */
    public function setUnitsleft($unitsleft)
    {
        $this->unitsleft = $unitsleft;

        return $this;
    }

    /**
     * Get unitsleft
     *
     * @return integer 
     */
    public function getUnitsleft()
    {
        return $this->unitsleft;
    }

    /**
     * Set unitgradingtype
     *
     * @param integer $unitgradingtype
     * @return MdlQuestionNumericalOptions
     */
    public function setUnitgradingtype($unitgradingtype)
    {
        $this->unitgradingtype = $unitgradingtype;

        return $this;
    }

    /**
     * Get unitgradingtype
     *
     * @return integer 
     */
    public function getUnitgradingtype()
    {
        return $this->unitgradingtype;
    }

    /**
     * Set unitpenalty
     *
     * @param string $unitpenalty
     * @return MdlQuestionNumericalOptions
     */
    public function setUnitpenalty($unitpenalty)
    {
        $this->unitpenalty = $unitpenalty;

        return $this;
    }

    /**
     * Get unitpenalty
     *
     * @return string 
     */
    public function getUnitpenalty()
    {
        return $this->unitpenalty;
    }
}
