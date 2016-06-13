<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradeImportValues
 *
 * @ORM\Table(name="mdl_grade_import_values", indexes={@ORM\Index(name="mdl_gradimpovalu_ite_ix", columns={"itemid"}), @ORM\Index(name="mdl_gradimpovalu_new_ix", columns={"newgradeitem"}), @ORM\Index(name="mdl_gradimpovalu_imp_ix", columns={"importer"})})
 * @ORM\Entity
 */
class MdlGradeImportValues
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
     * @ORM\Column(name="itemid", type="bigint", nullable=true)
     */
    private $itemid;

    /**
     * @var integer
     *
     * @ORM\Column(name="newgradeitem", type="bigint", nullable=true)
     */
    private $newgradeitem;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="finalgrade", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $finalgrade;

    /**
     * @var string
     *
     * @ORM\Column(name="feedback", type="text", nullable=true)
     */
    private $feedback;

    /**
     * @var integer
     *
     * @ORM\Column(name="importcode", type="bigint", nullable=false)
     */
    private $importcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="importer", type="bigint", nullable=true)
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
     * Set itemid
     *
     * @param integer $itemid
     * @return MdlGradeImportValues
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
     * Set newgradeitem
     *
     * @param integer $newgradeitem
     * @return MdlGradeImportValues
     */
    public function setNewgradeitem($newgradeitem)
    {
        $this->newgradeitem = $newgradeitem;

        return $this;
    }

    /**
     * Get newgradeitem
     *
     * @return integer 
     */
    public function getNewgradeitem()
    {
        return $this->newgradeitem;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlGradeImportValues
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set finalgrade
     *
     * @param string $finalgrade
     * @return MdlGradeImportValues
     */
    public function setFinalgrade($finalgrade)
    {
        $this->finalgrade = $finalgrade;

        return $this;
    }

    /**
     * Get finalgrade
     *
     * @return string 
     */
    public function getFinalgrade()
    {
        return $this->finalgrade;
    }

    /**
     * Set feedback
     *
     * @param string $feedback
     * @return MdlGradeImportValues
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * Get feedback
     *
     * @return string 
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Set importcode
     *
     * @param integer $importcode
     * @return MdlGradeImportValues
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
     * @return MdlGradeImportValues
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
