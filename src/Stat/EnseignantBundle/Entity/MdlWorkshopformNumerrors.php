<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshopformNumerrors
 *
 * @ORM\Table(name="mdl_workshopform_numerrors", indexes={@ORM\Index(name="mdl_worknume_wor_ix", columns={"workshopid"})})
 * @ORM\Entity
 */
class MdlWorkshopformNumerrors
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
     * @ORM\Column(name="sort", type="bigint", nullable=true)
     */
    private $sort = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="descriptionformat", type="smallint", nullable=true)
     */
    private $descriptionformat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="descriptiontrust", type="bigint", nullable=true)
     */
    private $descriptiontrust;

    /**
     * @var string
     *
     * @ORM\Column(name="grade0", type="string", length=50, nullable=true)
     */
    private $grade0;

    /**
     * @var string
     *
     * @ORM\Column(name="grade1", type="string", length=50, nullable=true)
     */
    private $grade1;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="integer", nullable=true)
     */
    private $weight = '1';



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
     * @return MdlWorkshopformNumerrors
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
     * Set sort
     *
     * @param integer $sort
     * @return MdlWorkshopformNumerrors
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return integer 
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return MdlWorkshopformNumerrors
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
     * @param integer $descriptionformat
     * @return MdlWorkshopformNumerrors
     */
    public function setDescriptionformat($descriptionformat)
    {
        $this->descriptionformat = $descriptionformat;

        return $this;
    }

    /**
     * Get descriptionformat
     *
     * @return integer 
     */
    public function getDescriptionformat()
    {
        return $this->descriptionformat;
    }

    /**
     * Set descriptiontrust
     *
     * @param integer $descriptiontrust
     * @return MdlWorkshopformNumerrors
     */
    public function setDescriptiontrust($descriptiontrust)
    {
        $this->descriptiontrust = $descriptiontrust;

        return $this;
    }

    /**
     * Get descriptiontrust
     *
     * @return integer 
     */
    public function getDescriptiontrust()
    {
        return $this->descriptiontrust;
    }

    /**
     * Set grade0
     *
     * @param string $grade0
     * @return MdlWorkshopformNumerrors
     */
    public function setGrade0($grade0)
    {
        $this->grade0 = $grade0;

        return $this;
    }

    /**
     * Get grade0
     *
     * @return string 
     */
    public function getGrade0()
    {
        return $this->grade0;
    }

    /**
     * Set grade1
     *
     * @param string $grade1
     * @return MdlWorkshopformNumerrors
     */
    public function setGrade1($grade1)
    {
        $this->grade1 = $grade1;

        return $this;
    }

    /**
     * Get grade1
     *
     * @return string 
     */
    public function getGrade1()
    {
        return $this->grade1;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return MdlWorkshopformNumerrors
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
