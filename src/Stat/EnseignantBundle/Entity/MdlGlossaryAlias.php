<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGlossaryAlias
 *
 * @ORM\Table(name="mdl_glossary_alias", indexes={@ORM\Index(name="mdl_glosalia_ent_ix", columns={"entryid"})})
 * @ORM\Entity
 */
class MdlGlossaryAlias
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
     * @ORM\Column(name="entryid", type="bigint", nullable=false)
     */
    private $entryid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=255, nullable=false)
     */
    private $alias = '';



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
     * Set entryid
     *
     * @param integer $entryid
     * @return MdlGlossaryAlias
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

    /**
     * Set alias
     *
     * @param string $alias
     * @return MdlGlossaryAlias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }
}
