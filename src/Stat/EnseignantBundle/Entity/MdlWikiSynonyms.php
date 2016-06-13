<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWikiSynonyms
 *
 * @ORM\Table(name="mdl_wiki_synonyms", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_wikisyno_pagpag_uix", columns={"pageid", "pagesynonym"})})
 * @ORM\Entity
 */
class MdlWikiSynonyms
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
     * @ORM\Column(name="pageid", type="bigint", nullable=false)
     */
    private $pageid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pagesynonym", type="string", length=255, nullable=false)
     */
    private $pagesynonym = 'Pagesynonym';



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
     * @return MdlWikiSynonyms
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
     * Set pageid
     *
     * @param integer $pageid
     * @return MdlWikiSynonyms
     */
    public function setPageid($pageid)
    {
        $this->pageid = $pageid;

        return $this;
    }

    /**
     * Get pageid
     *
     * @return integer 
     */
    public function getPageid()
    {
        return $this->pageid;
    }

    /**
     * Set pagesynonym
     *
     * @param string $pagesynonym
     * @return MdlWikiSynonyms
     */
    public function setPagesynonym($pagesynonym)
    {
        $this->pagesynonym = $pagesynonym;

        return $this;
    }

    /**
     * Get pagesynonym
     *
     * @return string 
     */
    public function getPagesynonym()
    {
        return $this->pagesynonym;
    }
}
