<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradingformRubricFillings
 *
 * @ORM\Table(name="mdl_gradingform_rubric_fillings", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_gradrubrfill_inscri_uix", columns={"instanceid", "criterionid"})}, indexes={@ORM\Index(name="mdl_gradrubrfill_lev_ix", columns={"levelid"}), @ORM\Index(name="mdl_gradrubrfill_ins_ix", columns={"instanceid"}), @ORM\Index(name="mdl_gradrubrfill_cri_ix", columns={"criterionid"})})
 * @ORM\Entity
 */
class MdlGradingformRubricFillings
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
     * @ORM\Column(name="instanceid", type="bigint", nullable=false)
     */
    private $instanceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="criterionid", type="bigint", nullable=false)
     */
    private $criterionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="levelid", type="bigint", nullable=true)
     */
    private $levelid;

    /**
     * @var string
     *
     * @ORM\Column(name="remark", type="text", nullable=true)
     */
    private $remark;

    /**
     * @var boolean
     *
     * @ORM\Column(name="remarkformat", type="boolean", nullable=true)
     */
    private $remarkformat;



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
     * Set instanceid
     *
     * @param integer $instanceid
     * @return MdlGradingformRubricFillings
     */
    public function setInstanceid($instanceid)
    {
        $this->instanceid = $instanceid;

        return $this;
    }

    /**
     * Get instanceid
     *
     * @return integer 
     */
    public function getInstanceid()
    {
        return $this->instanceid;
    }

    /**
     * Set criterionid
     *
     * @param integer $criterionid
     * @return MdlGradingformRubricFillings
     */
    public function setCriterionid($criterionid)
    {
        $this->criterionid = $criterionid;

        return $this;
    }

    /**
     * Get criterionid
     *
     * @return integer 
     */
    public function getCriterionid()
    {
        return $this->criterionid;
    }

    /**
     * Set levelid
     *
     * @param integer $levelid
     * @return MdlGradingformRubricFillings
     */
    public function setLevelid($levelid)
    {
        $this->levelid = $levelid;

        return $this;
    }

    /**
     * Get levelid
     *
     * @return integer 
     */
    public function getLevelid()
    {
        return $this->levelid;
    }

    /**
     * Set remark
     *
     * @param string $remark
     * @return MdlGradingformRubricFillings
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Get remark
     *
     * @return string 
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Set remarkformat
     *
     * @param boolean $remarkformat
     * @return MdlGradingformRubricFillings
     */
    public function setRemarkformat($remarkformat)
    {
        $this->remarkformat = $remarkformat;

        return $this;
    }

    /**
     * Get remarkformat
     *
     * @return boolean 
     */
    public function getRemarkformat()
    {
        return $this->remarkformat;
    }
}
