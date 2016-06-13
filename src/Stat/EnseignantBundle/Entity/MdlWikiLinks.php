<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWikiLinks
 *
 * @ORM\Table(name="mdl_wiki_links", indexes={@ORM\Index(name="mdl_wikilink_fro_ix", columns={"frompageid"}), @ORM\Index(name="mdl_wikilink_sub_ix", columns={"subwikiid"})})
 * @ORM\Entity
 */
class MdlWikiLinks
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
     * @ORM\Column(name="subwikiid", type="bigint", nullable=false)
     */
    private $subwikiid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="frompageid", type="bigint", nullable=false)
     */
    private $frompageid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="topageid", type="bigint", nullable=false)
     */
    private $topageid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tomissingpage", type="string", length=255, nullable=true)
     */
    private $tomissingpage;



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
     * Set subwikiid
     *
     * @param integer $subwikiid
     * @return MdlWikiLinks
     */
    public function setSubwikiid($subwikiid)
    {
        $this->subwikiid = $subwikiid;

        return $this;
    }

    /**
     * Get subwikiid
     *
     * @return integer 
     */
    public function getSubwikiid()
    {
        return $this->subwikiid;
    }

    /**
     * Set frompageid
     *
     * @param integer $frompageid
     * @return MdlWikiLinks
     */
    public function setFrompageid($frompageid)
    {
        $this->frompageid = $frompageid;

        return $this;
    }

    /**
     * Get frompageid
     *
     * @return integer 
     */
    public function getFrompageid()
    {
        return $this->frompageid;
    }

    /**
     * Set topageid
     *
     * @param integer $topageid
     * @return MdlWikiLinks
     */
    public function setTopageid($topageid)
    {
        $this->topageid = $topageid;

        return $this;
    }

    /**
     * Get topageid
     *
     * @return integer 
     */
    public function getTopageid()
    {
        return $this->topageid;
    }

    /**
     * Set tomissingpage
     *
     * @param string $tomissingpage
     * @return MdlWikiLinks
     */
    public function setTomissingpage($tomissingpage)
    {
        $this->tomissingpage = $tomissingpage;

        return $this;
    }

    /**
     * Get tomissingpage
     *
     * @return string 
     */
    public function getTomissingpage()
    {
        return $this->tomissingpage;
    }
}
