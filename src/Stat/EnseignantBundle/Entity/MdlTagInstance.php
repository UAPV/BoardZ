<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlTagInstance
 *
 * @ORM\Table(name="mdl_tag_instance", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_taginst_iteitetagtiu_uix", columns={"itemtype", "itemid", "tagid", "tiuserid"})}, indexes={@ORM\Index(name="mdl_taginst_tag_ix", columns={"tagid"})})
 * @ORM\Entity
 */
class MdlTagInstance
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
     * @ORM\Column(name="tagid", type="bigint", nullable=false)
     */
    private $tagid;

    /**
     * @var string
     *
     * @ORM\Column(name="itemtype", type="string", length=255, nullable=false)
     */
    private $itemtype = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="itemid", type="bigint", nullable=false)
     */
    private $itemid;

    /**
     * @var integer
     *
     * @ORM\Column(name="tiuserid", type="bigint", nullable=false)
     */
    private $tiuserid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ordering", type="bigint", nullable=true)
     */
    private $ordering;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';



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
     * Set tagid
     *
     * @param integer $tagid
     * @return MdlTagInstance
     */
    public function setTagid($tagid)
    {
        $this->tagid = $tagid;

        return $this;
    }

    /**
     * Get tagid
     *
     * @return integer 
     */
    public function getTagid()
    {
        return $this->tagid;
    }

    /**
     * Set itemtype
     *
     * @param string $itemtype
     * @return MdlTagInstance
     */
    public function setItemtype($itemtype)
    {
        $this->itemtype = $itemtype;

        return $this;
    }

    /**
     * Get itemtype
     *
     * @return string 
     */
    public function getItemtype()
    {
        return $this->itemtype;
    }

    /**
     * Set itemid
     *
     * @param integer $itemid
     * @return MdlTagInstance
     */
    public function setItemid($itemid)
    {
        $this->itemid = $itemid;

        return $this;
    }

    /**
     * Get itemid
     *
     * @return integer 
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set tiuserid
     *
     * @param integer $tiuserid
     * @return MdlTagInstance
     */
    public function setTiuserid($tiuserid)
    {
        $this->tiuserid = $tiuserid;

        return $this;
    }

    /**
     * Get tiuserid
     *
     * @return integer 
     */
    public function getTiuserid()
    {
        return $this->tiuserid;
    }

    /**
     * Set ordering
     *
     * @param integer $ordering
     * @return MdlTagInstance
     */
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;

        return $this;
    }

    /**
     * Get ordering
     *
     * @return integer 
     */
    public function getOrdering()
    {
        return $this->ordering;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlTagInstance
     */
    public function setTimemodified($timemodified)
    {
        $this->timemodified = $timemodified;

        return $this;
    }

    /**
     * Get timemodified
     *
     * @return integer 
     */
    public function getTimemodified()
    {
        return $this->timemodified;
    }
}
