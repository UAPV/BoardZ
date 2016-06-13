<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestionAttemptStepData
 *
 * @ORM\Table(name="mdl_question_attempt_step_data", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_quesattestepdata_attna_uix", columns={"attemptstepid", "name"})}, indexes={@ORM\Index(name="mdl_quesattestepdata_att_ix", columns={"attemptstepid"})})
 * @ORM\Entity
 */
class MdlQuestionAttemptStepData
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
     * @ORM\Column(name="attemptstepid", type="bigint", nullable=false)
     */
    private $attemptstepid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
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
     * Set attemptstepid
     *
     * @param integer $attemptstepid
     * @return MdlQuestionAttemptStepData
     */
    public function setAttemptstepid($attemptstepid)
    {
        $this->attemptstepid = $attemptstepid;

        return $this;
    }

    /**
     * Get attemptstepid
     *
     * @return integer 
     */
    public function getAttemptstepid()
    {
        return $this->attemptstepid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlQuestionAttemptStepData
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
     * @return MdlQuestionAttemptStepData
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
