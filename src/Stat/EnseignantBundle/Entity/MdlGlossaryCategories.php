<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGlossaryCategories
 *
 * @ORM\Table(name="mdl_glossary_categories", indexes={@ORM\Index(name="mdl_gloscate_glo_ix", columns={"glossaryid"})})
 * @ORM\Entity
 */
class MdlGlossaryCategories
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
     * @ORM\Column(name="glossaryid", type="bigint", nullable=false)
     */
    private $glossaryid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="usedynalink", type="boolean", nullable=false)
     */
    private $usedynalink = '1';



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
     * Set glossaryid
     *
     * @param integer $glossaryid
     * @return MdlGlossaryCategories
     */
    public function setGlossaryid($glossaryid)
    {
        $this->glossaryid = $glossaryid;

        return $this;
    }

    /**
     * Get glossaryid
     *
     * @return integer 
     */
    public function getGlossaryid()
    {
        return $this->glossaryid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlGlossaryCategories
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set usedynalink
     *
     * @param boolean $usedynalink
     * @return MdlGlossaryCategories
     */
    public function setUsedynalink($usedynalink)
    {
        $this->usedynalink = $usedynalink;

        return $this;
    }

    /**
     * Get usedynalink
     *
     * @return boolean 
     */
    public function getUsedynalink()
    {
        return $this->usedynalink;
    }
}
