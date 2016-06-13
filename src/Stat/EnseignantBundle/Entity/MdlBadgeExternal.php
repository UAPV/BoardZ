<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeExternal
 *
 * @ORM\Table(name="mdl_badge_external", indexes={@ORM\Index(name="mdl_badgexte_bac_ix", columns={"backpackid"})})
 * @ORM\Entity
 */
class MdlBadgeExternal
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
     * @ORM\Column(name="backpackid", type="bigint", nullable=false)
     */
    private $backpackid;

    /**
     * @var integer
     *
     * @ORM\Column(name="collectionid", type="bigint", nullable=false)
     */
    private $collectionid;



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
     * Set backpackid
     *
     * @param integer $backpackid
     * @return MdlBadgeExternal
     */
    public function setBackpackid($backpackid)
    {
        $this->backpackid = $backpackid;

        return $this;
    }

    /**
     * Get backpackid
     *
     * @return integer 
     */
    public function getBackpackid()
    {
        return $this->backpackid;
    }

    /**
     * Set collectionid
     *
     * @param integer $collectionid
     * @return MdlBadgeExternal
     */
    public function setCollectionid($collectionid)
    {
        $this->collectionid = $collectionid;

        return $this;
    }

    /**
     * Get collectionid
     *
     * @return integer 
     */
    public function getCollectionid()
    {
        return $this->collectionid;
    }
}
