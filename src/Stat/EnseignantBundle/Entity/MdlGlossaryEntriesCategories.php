<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGlossaryEntriesCategories
 *
 * @ORM\Table(name="mdl_glossary_entries_categories", indexes={@ORM\Index(name="mdl_glosentrcate_cat_ix", columns={"categoryid"}), @ORM\Index(name="mdl_glosentrcate_ent_ix", columns={"entryid"})})
 * @ORM\Entity
 */
class MdlGlossaryEntriesCategories
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
     * @ORM\Column(name="categoryid", type="bigint", nullable=false)
     */
    private $categoryid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entryid", type="bigint", nullable=false)
     */
    private $entryid = '0';



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
     * Set categoryid
     *
     * @param integer $categoryid
     * @return MdlGlossaryEntriesCategories
     */
    public function setCategoryid($categoryid)
    {
        $this->categoryid = $categoryid;

        return $this;
    }

    /**
     * Get categoryid
     *
     * @return integer 
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }

    /**
     * Set entryid
     *
     * @param integer $entryid
     * @return MdlGlossaryEntriesCategories
     */
    public function setEntryid($entryid)
    {
        $this->entryid = $entryid;

        return $this;
    }

    /**
     * Get entryid
     *
     * @return integer 
     */
    public function getEntryid()
    {
        return $this->entryid;
    }
}
