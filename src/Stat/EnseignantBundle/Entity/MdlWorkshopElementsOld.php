<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshopElementsOld
 *
 * @ORM\Table(name="mdl_workshop_elements_old", indexes={@ORM\Index(name="mdl_workelemold_wor_ix", columns={"workshopid"})})
 * @ORM\Entity
 */
class MdlWorkshopElementsOld
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
     * @ORM\Column(name="elementno", type="smallint", nullable=false)
     */
    private $elementno = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="scale", type="smallint", nullable=false)
     */
    private $scale = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxscore", type="smallint", nullable=false)
     */
    private $maxscore = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="smallint", nullable=false)
     */
    private $weight = '11';

    /**
     * @var float
     *
     * @ORM\Column(name="stddev", type="float", precision=10, scale=0, nullable=false)
     */
    private $stddev = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="totalassessments", type="bigint", nullable=false)
     */
    private $totalassessments = '0';

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
     * @return MdlWorkshopElementsOld
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
     * @return MdlWorkshopElementsOld
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
     * Set description
     *
     * @param string $description
     * @return MdlWorkshopElementsOld
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
     * Set scale
     *
     * @param integer $scale
     * @return MdlWorkshopElementsOld
     */
    public function setScale($scale)
    {
        $this->scale = $scale;

        return $this;
    }

    /**
     * Get scale
     *
     * @return integer 
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Set maxscore
     *
     * @param integer $maxscore
     * @return MdlWorkshopElementsOld
     */
    public function setMaxscore($maxscore)
    {
        $this->maxscore = $maxscore;

        return $this;
    }

    /**
     * Get maxscore
     *
     * @return integer 
     */
    public function getMaxscore()
    {
        return $this->maxscore;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return MdlWorkshopElementsOld
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

    /**
     * Set stddev
     *
     * @param float $stddev
     * @return MdlWorkshopElementsOld
     */
    public function setStddev($stddev)
    {
        $this->stddev = $stddev;

        return $this;
    }

    /**
     * Get stddev
     *
     * @return float 
     */
    public function getStddev()
    {
        return $this->stddev;
    }

    /**
     * Set totalassessments
     *
     * @param integer $totalassessments
     * @return MdlWorkshopElementsOld
     */
    public function setTotalassessments($totalassessments)
    {
        $this->totalassessments = $totalassessments;

        return $this;
    }

    /**
     * Get totalassessments
     *
     * @return integer 
     */
    public function getTotalassessments()
    {
        return $this->totalassessments;
    }

    /**
     * Set newplugin
     *
     * @param string $newplugin
     * @return MdlWorkshopElementsOld
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
     * @return MdlWorkshopElementsOld
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
