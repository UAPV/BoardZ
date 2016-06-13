<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshopStockcommentsOld
 *
 * @ORM\Table(name="mdl_workshop_stockcomments_old", indexes={@ORM\Index(name="mdl_workstocold_wor_ix", columns={"workshopid"})})
 * @ORM\Entity
 */
class MdlWorkshopStockcommentsOld
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
     * @var string
     *
     * @ORM\Column(name="comments", type="text", nullable=false)
     */
    private $comments;

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
     * @return MdlWorkshopStockcommentsOld
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
     * @return MdlWorkshopStockcommentsOld
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
     * Set comments
     *
     * @param string $comments
     * @return MdlWorkshopStockcommentsOld
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set newplugin
     *
     * @param string $newplugin
     * @return MdlWorkshopStockcommentsOld
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
     * @return MdlWorkshopStockcommentsOld
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
