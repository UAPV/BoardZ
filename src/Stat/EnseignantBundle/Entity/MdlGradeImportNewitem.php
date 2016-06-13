<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradeImportNewitem
 *
 * @ORM\Table(name="mdl_grade_import_newitem", indexes={@ORM\Index(name="mdl_gradimponewi_imp_ix", columns={"importer"})})
 * @ORM\Entity
 */
class MdlGradeImportNewitem
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
     * @ORM\Column(name="itemname", type="string", length=255, nullable=false)
     */
    private $itemname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="importcode", type="bigint", nullable=false)
     */
    private $importcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="importer", type="bigint", nullable=false)
     */
    private $importer;



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
     * Set itemname
     *
     * @param string $itemname
     * @return MdlGradeImportNewitem
     */
    public function setItemname($itemname)
    {
        $this->itemname = $itemname;

        return $this;
    }

    /**
     * Get itemname
     *
     * @return string 
     */
    public function getItemname()
    {
        return $this->itemname;
    }

    /**
     * Set importcode
     *
     * @param integer $importcode
     * @return MdlGradeImportNewitem
     */
    public function setImportcode($importcode)
    {
        $this->importcode = $importcode;

        return $this;
    }

    /**
     * Get importcode
     *
     * @return integer 
     */
    public function getImportcode()
    {
        return $this->importcode;
    }

    /**
     * Set importer
     *
     * @param integer $importer
     * @return MdlGradeImportNewitem
     */
    public function setImporter($importer)
    {
        $this->importer = $importer;

        return $this;
    }

    /**
     * Get importer
     *
     * @return integer 
     */
    public function getImporter()
    {
        return $this->importer;
    }
}
