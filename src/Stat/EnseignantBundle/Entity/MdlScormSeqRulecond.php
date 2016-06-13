<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlScormSeqRulecond
 *
 * @ORM\Table(name="mdl_scorm_seq_rulecond", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_scorseqrule_idscorul_uix", columns={"id", "scoid", "ruleconditionsid"})}, indexes={@ORM\Index(name="mdl_scorseqrule_sco2_ix", columns={"scoid"}), @ORM\Index(name="mdl_scorseqrule_rul_ix", columns={"ruleconditionsid"})})
 * @ORM\Entity
 */
class MdlScormSeqRulecond
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
     * @ORM\Column(name="scoid", type="bigint", nullable=false)
     */
    private $scoid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ruleconditionsid", type="bigint", nullable=false)
     */
    private $ruleconditionsid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="refrencedobjective", type="string", length=255, nullable=false)
     */
    private $refrencedobjective = '';

    /**
     * @var float
     *
     * @ORM\Column(name="measurethreshold", type="float", precision=11, scale=4, nullable=false)
     */
    private $measurethreshold = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="operator", type="string", length=5, nullable=false)
     */
    private $operator = 'noOp';

    /**
     * @var string
     *
     * @ORM\Column(name="cond", type="string", length=30, nullable=false)
     */
    private $cond = 'always';



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
     * Set scoid
     *
     * @param integer $scoid
     * @return MdlScormSeqRulecond
     */
    public function setScoid($scoid)
    {
        $this->scoid = $scoid;

        return $this;
    }

    /**
     * Get scoid
     *
     * @return integer 
     */
    public function getScoid()
    {
        return $this->scoid;
    }

    /**
     * Set ruleconditionsid
     *
     * @param integer $ruleconditionsid
     * @return MdlScormSeqRulecond
     */
    public function setRuleconditionsid($ruleconditionsid)
    {
        $this->ruleconditionsid = $ruleconditionsid;

        return $this;
    }

    /**
     * Get ruleconditionsid
     *
     * @return integer 
     */
    public function getRuleconditionsid()
    {
        return $this->ruleconditionsid;
    }

    /**
     * Set refrencedobjective
     *
     * @param string $refrencedobjective
     * @return MdlScormSeqRulecond
     */
    public function setRefrencedobjective($refrencedobjective)
    {
        $this->refrencedobjective = $refrencedobjective;

        return $this;
    }

    /**
     * Get refrencedobjective
     *
     * @return string 
     */
    public function getRefrencedobjective()
    {
        return $this->refrencedobjective;
    }

    /**
     * Set measurethreshold
     *
     * @param float $measurethreshold
     * @return MdlScormSeqRulecond
     */
    public function setMeasurethreshold($measurethreshold)
    {
        $this->measurethreshold = $measurethreshold;

        return $this;
    }

    /**
     * Get measurethreshold
     *
     * @return float 
     */
    public function getMeasurethreshold()
    {
        return $this->measurethreshold;
    }

    /**
     * Set operator
     *
     * @param string $operator
     * @return MdlScormSeqRulecond
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * Get operator
     *
     * @return string 
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Set cond
     *
     * @param string $cond
     * @return MdlScormSeqRulecond
     */
    public function setCond($cond)
    {
        $this->cond = $cond;

        return $this;
    }

    /**
     * Get cond
     *
     * @return string 
     */
    public function getCond()
    {
        return $this->cond;
    }
}
