<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradingformGuideFillings
 *
 * @ORM\Table(name="mdl_gradingform_guide_fillings", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_gradguidfill_inscri_uix", columns={"instanceid", "criterionid"})}, indexes={@ORM\Index(name="mdl_gradguidfill_ins_ix", columns={"instanceid"}), @ORM\Index(name="mdl_gradguidfill_cri_ix", columns={"criterionid"})})
 * @ORM\Entity
 */
class MdlGradingformGuideFillings
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
     * @var string
     *
     * @ORM\Column(name="score", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $score;



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
     * @return MdlGradingformGuideFillings
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
     * @return MdlGradingformGuideFillings
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
     * Set remark
     *
     * @param string $remark
     * @return MdlGradingformGuideFillings
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
     * @return MdlGradingformGuideFillings
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

    /**
     * Set score
     *
     * @param string $score
     * @return MdlGradingformGuideFillings
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return string 
     */
    public function getScore()
    {
        return $this->score;
    }
}
