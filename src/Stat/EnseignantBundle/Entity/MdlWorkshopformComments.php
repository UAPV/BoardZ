<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshopformComments
 *
 * @ORM\Table(name="mdl_workshopform_comments", indexes={@ORM\Index(name="mdl_workcomm_wor_ix", columns={"workshopid"})})
 * @ORM\Entity
 */
class MdlWorkshopformComments
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
     * @return MdlWorkshopformComments
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
     * @return MdlWorkshopformComments
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
     * @return MdlWorkshopformComments
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
     * @return MdlWorkshopformComments
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
}
