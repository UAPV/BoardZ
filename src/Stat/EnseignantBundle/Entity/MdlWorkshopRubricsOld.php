<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshopRubricsOld
 *
 * @ORM\Table(name="mdl_workshop_rubrics_old", indexes={@ORM\Index(name="mdl_workrubrold_wor_ix", columns={"workshopid"})})
 * @ORM\Entity
 */
class MdlWorkshopRubricsOld
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
    private $workshopid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="elementno", type="bigint", nullable=false)
     */
    private $elementno = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rubricno", type="smallint", nullable=false)
     */
    private $rubricno = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="newplugin", type="string", length=28, nullable=true)
     */
    private $newplugin;

    /**
     * @var integer
     *
     * @ORM\Column(name="newid", type="bigint", nullable=true)
     */
    private $newid;



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
     * @return MdlWorkshopRubricsOld
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
     * Set elementno
     *
     * @param integer $elementno
     * @return MdlWorkshopRubricsOld
     */
    public function setElementno($elementno)
    {
        $this->elementno = $elementno;

        return $this;
    }

    /**
     * Get elementno
     *
     * @return integer 
     */
    public function getElementno()
    {
        return $this->elementno;
    }

    /**
     * Set rubricno
     *
     * @param integer $rubricno
     * @return MdlWorkshopRubricsOld
     */
    public function setRubricno($rubricno)
    {
        $this->rubricno = $rubricno;

        return $this;
    }

    /**
     * Get rubricno
     *
     * @return integer 
     */
    public function getRubricno()
    {
        return $this->rubricno;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return MdlWorkshopRubricsOld
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
     * Set newplugin
     *
     * @param string $newplugin
     * @return MdlWorkshopRubricsOld
     */
    public function setNewplugin($newplugin)
    {
        $this->newplugin = $newplugin;

        return $this;
    }

    /**
     * Get newplugin
     *
     * @return string 
     */
    public function getNewplugin()
    {
        return $this->newplugin;
    }

    /**
     * Set newid
     *
     * @param integer $newid
     * @return MdlWorkshopRubricsOld
     */
    public function setNewid($newid)
    {
        $this->newid = $newid;

        return $this;
    }

    /**
     * Get newid
     *
     * @return integer 
     */
    public function getNewid()
    {
        return $this->newid;
    }
}
