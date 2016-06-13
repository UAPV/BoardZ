<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlScormSeqRolluprulecond
 *
 * @ORM\Table(name="mdl_scorm_seq_rolluprulecond", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_scorseqroll_scorolid_uix", columns={"scoid", "rollupruleid", "id"})}, indexes={@ORM\Index(name="mdl_scorseqroll_sco2_ix", columns={"scoid"}), @ORM\Index(name="mdl_scorseqroll_rol_ix", columns={"rollupruleid"})})
 * @ORM\Entity
 */
class MdlScormSeqRolluprulecond
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
     * @ORM\Column(name="rollupruleid", type="bigint", nullable=false)
     */
    private $rollupruleid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="operator", type="string", length=5, nullable=false)
     */
    private $operator = 'noOp';

    /**
     * @var string
     *
     * @ORM\Column(name="cond", type="string", length=25, nullable=false)
     */
    private $cond = '';



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
     * @return MdlScormSeqRolluprulecond
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
     * Set rollupruleid
     *
     * @param integer $rollupruleid
     * @return MdlScormSeqRolluprulecond
     */
    public function setRollupruleid($rollupruleid)
    {
        $this->rollupruleid = $rollupruleid;

        return $this;
    }

    /**
     * Get rollupruleid
     *
     * @return integer 
     */
    public function getRollupruleid()
    {
        return $this->rollupruleid;
    }

    /**
     * Set operator
     *
     * @param string $operator
     * @return MdlScormSeqRolluprulecond
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
     * @return MdlScormSeqRolluprulecond
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
