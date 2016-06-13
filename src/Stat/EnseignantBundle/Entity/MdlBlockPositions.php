<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockPositions
 *
 * @ORM\Table(name="mdl_block_positions", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_blocposi_bloconpagsub_uix", columns={"blockinstanceid", "contextid", "pagetype", "subpage"})}, indexes={@ORM\Index(name="mdl_blocposi_blo_ix", columns={"blockinstanceid"}), @ORM\Index(name="mdl_blocposi_con_ix", columns={"contextid"})})
 * @ORM\Entity
 */
class MdlBlockPositions
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
     * @ORM\Column(name="blockinstanceid", type="bigint", nullable=false)
     */
    private $blockinstanceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid;

    /**
     * @var string
     *
     * @ORM\Column(name="pagetype", type="string", length=64, nullable=false)
     */
    private $pagetype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="subpage", type="string", length=16, nullable=false)
     */
    private $subpage = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="visible", type="smallint", nullable=false)
     */
    private $visible;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=16, nullable=false)
     */
    private $region = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="bigint", nullable=false)
     */
    private $weight;



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
     * Set blockinstanceid
     *
     * @param integer $blockinstanceid
     * @return MdlBlockPositions
     */
    public function setBlockinstanceid($blockinstanceid)
    {
        $this->blockinstanceid = $blockinstanceid;

        return $this;
    }

    /**
     * Get blockinstanceid
     *
     * @return integer 
     */
    public function getBlockinstanceid()
    {
        return $this->blockinstanceid;
    }

    /**
     * Set contextid
     *
     * @param integer $contextid
     * @return MdlBlockPositions
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
     * Set pagetype
     *
     * @param string $pagetype
     * @return MdlBlockPositions
     */
    public function setPagetype($pagetype)
    {
        $this->pagetype = $pagetype;

        return $this;
    }

    /**
     * Get pagetype
     *
     * @return string 
     */
    public function getPagetype()
    {
        return $this->pagetype;
    }

    /**
     * Set subpage
     *
     * @param string $subpage
     * @return MdlBlockPositions
     */
    public function setSubpage($subpage)
    {
        $this->subpage = $subpage;

        return $this;
    }

    /**
     * Get subpage
     *
     * @return string 
     */
    public function getSubpage()
    {
        return $this->subpage;
    }

    /**
     * Set visible
     *
     * @param integer $visible
     * @return MdlBlockPositions
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return integer 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return MdlBlockPositions
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return MdlBlockPositions
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
