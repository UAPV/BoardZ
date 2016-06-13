<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradeLetters
 *
 * @ORM\Table(name="mdl_grade_letters", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_gradlett_conlowlet_uix", columns={"contextid", "lowerboundary", "letter"})})
 * @ORM\Entity
 */
class MdlGradeLetters
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
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid;

    /**
     * @var string
     *
     * @ORM\Column(name="lowerboundary", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $lowerboundary;

    /**
     * @var string
     *
     * @ORM\Column(name="letter", type="string", length=255, nullable=false)
     */
    private $letter = '';



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
     * Set contextid
     *
     * @param integer $contextid
     * @return MdlGradeLetters
     */
    public function setContextid($contextid)
    {
        $this->contextid = $contextid;

        return $this;
    }

    /**
     * Get contextid
     *
     * @return integer 
     */
    public function getContextid()
    {
        return $this->contextid;
    }

    /**
     * Set lowerboundary
     *
     * @param string $lowerboundary
     * @return MdlGradeLetters
     */
    public function setLowerboundary($lowerboundary)
    {
        $this->lowerboundary = $lowerboundary;

        return $this;
    }

    /**
     * Get lowerboundary
     *
     * @return string 
     */
    public function getLowerboundary()
    {
        return $this->lowerboundary;
    }

    /**
     * Set letter
     *
     * @param string $letter
     * @return MdlGradeLetters
     */
    public function setLetter($letter)
    {
        $this->letter = $letter;

        return $this;
    }

    /**
     * Get letter
     *
     * @return string 
     */
    public function getLetter()
    {
        return $this->letter;
    }
}
