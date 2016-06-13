<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshopformNumerrorsMap
 *
 * @ORM\Table(name="mdl_workshopform_numerrors_map", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_worknumemap_wornon_uix", columns={"workshopid", "nonegative"})}, indexes={@ORM\Index(name="mdl_worknumemap_wor_ix", columns={"workshopid"})})
 * @ORM\Entity
 */
class MdlWorkshopformNumerrorsMap
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
     * @ORM\Column(name="workshopid", type="bigint", nullable=false)
     */
    private $workshopid;

    /**
     * @var integer
     *
     * @ORM\Column(name="nonegative", type="bigint", nullable=false)
     */
    private $nonegative;

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $grade;



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
     * Set workshopid
     *
     * @param integer $workshopid
     * @return MdlWorkshopformNumerrorsMap
     */
    public function setWorkshopid($workshopid)
    {
        $this->workshopid = $workshopid;

        return $this;
    }

    /**
     * Get workshopid
     *
     * @return integer 
     */
    public function getWorkshopid()
    {
        return $this->workshopid;
    }

    /**
     * Set nonegative
     *
     * @param integer $nonegative
     * @return MdlWorkshopformNumerrorsMap
     */
    public function setNonegative($nonegative)
    {
        $this->nonegative = $nonegative;

        return $this;
    }

    /**
     * Get nonegative
     *
     * @return integer 
     */
    public function getNonegative()
    {
        return $this->nonegative;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return MdlWorkshopformNumerrorsMap
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
}
