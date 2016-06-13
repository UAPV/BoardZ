<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockInstances
 *
 * @ORM\Table(name="mdl_block_instances", indexes={@ORM\Index(name="mdl_blocinst_parshopagsub_ix", columns={"parentcontextid", "showinsubcontexts", "pagetypepattern", "subpagepattern"}), @ORM\Index(name="mdl_blocinst_par_ix", columns={"parentcontextid"})})
 * @ORM\Entity
 */
class MdlBlockInstances
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
     * @var string
     *
     * @ORM\Column(name="blockname", type="string", length=40, nullable=false)
     */
    private $blockname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="parentcontextid", type="bigint", nullable=false)
     */
    private $parentcontextid;

    /**
     * @var integer
     *
     * @ORM\Column(name="showinsubcontexts", type="smallint", nullable=false)
     */
    private $showinsubcontexts;

    /**
     * @var string
     *
     * @ORM\Column(name="pagetypepattern", type="string", length=64, nullable=false)
     */
    private $pagetypepattern = '';

    /**
     * @var string
     *
     * @ORM\Column(name="subpagepattern", type="string", length=16, nullable=true)
     */
    private $subpagepattern;

    /**
     * @var string
     *
     * @ORM\Column(name="defaultregion", type="string", length=16, nullable=false)
     */
    private $defaultregion = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="defaultweight", type="bigint", nullable=false)
     */
    private $defaultweight;

    /**
     * @var string
     *
     * @ORM\Column(name="configdata", type="text", nullable=true)
     */
    private $configdata;



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
     * Set blockname
     *
     * @param string $blockname
     * @return MdlBlockInstances
     */
    public function setBlockname($blockname)
    {
        $this->blockname = $blockname;

        return $this;
    }

    /**
     * Get blockname
     *
     * @return string 
     */
    public function getBlockname()
    {
        return $this->blockname;
    }

    /**
     * Set parentcontextid
     *
     * @param integer $parentcontextid
     * @return MdlBlockInstances
     */
    public function setParentcontextid($parentcontextid)
    {
        $this->parentcontextid = $parentcontextid;

        return $this;
    }

    /**
     * Get parentcontextid
     *
     * @return integer 
     */
    public function getParentcontextid()
    {
        return $this->parentcontextid;
    }

    /**
     * Set showinsubcontexts
     *
     * @param integer $showinsubcontexts
     * @return MdlBlockInstances
     */
    public function setShowinsubcontexts($showinsubcontexts)
    {
        $this->showinsubcontexts = $showinsubcontexts;

        return $this;
    }

    /**
     * Get showinsubcontexts
     *
     * @return integer 
     */
    public function getShowinsubcontexts()
    {
        return $this->showinsubcontexts;
    }

    /**
     * Set pagetypepattern
     *
     * @param string $pagetypepattern
     * @return MdlBlockInstances
     */
    public function setPagetypepattern($pagetypepattern)
    {
        $this->pagetypepattern = $pagetypepattern;

        return $this;
    }

    /**
     * Get pagetypepattern
     *
     * @return string 
     */
    public function getPagetypepattern()
    {
        return $this->pagetypepattern;
    }

    /**
     * Set subpagepattern
     *
     * @param string $subpagepattern
     * @return MdlBlockInstances
     */
    public function setSubpagepattern($subpagepattern)
    {
        $this->subpagepattern = $subpagepattern;

        return $this;
    }

    /**
     * Get subpagepattern
     *
     * @return string 
     */
    public function getSubpagepattern()
    {
        return $this->subpagepattern;
    }

    /**
     * Set defaultregion
     *
     * @param string $defaultregion
     * @return MdlBlockInstances
     */
    public function setDefaultregion($defaultregion)
    {
        $this->defaultregion = $defaultregion;

        return $this;
    }

    /**
     * Get defaultregion
     *
     * @return string 
     */
    public function getDefaultregion()
    {
        return $this->defaultregion;
    }

    /**
     * Set defaultweight
     *
     * @param integer $defaultweight
     * @return MdlBlockInstances
     */
    public function setDefaultweight($defaultweight)
    {
        $this->defaultweight = $defaultweight;

        return $this;
    }

    /**
     * Get defaultweight
     *
     * @return integer 
     */
    public function getDefaultweight()
    {
        return $this->defaultweight;
    }

    /**
     * Set configdata
     *
     * @param string $configdata
     * @return MdlBlockInstances
     */
    public function setConfigdata($configdata)
    {
        $this->configdata = $configdata;

        return $this;
    }

    /**
     * Get configdata
     *
     * @return string 
     */
    public function getConfigdata()
    {
        return $this->configdata;
    }
}
