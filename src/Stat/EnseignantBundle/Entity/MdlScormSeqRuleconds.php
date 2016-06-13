<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlScormSeqRuleconds
 *
 * @ORM\Table(name="mdl_scorm_seq_ruleconds", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_scorseqrule_scoid_uix", columns={"scoid", "id"})}, indexes={@ORM\Index(name="mdl_scorseqrule_sco_ix", columns={"scoid"})})
 * @ORM\Entity
 */
class MdlScormSeqRuleconds
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
     * @var string
     *
     * @ORM\Column(name="conditioncombination", type="string", length=3, nullable=false)
     */
    private $conditioncombination = 'all';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ruletype", type="boolean", nullable=false)
     */
    private $ruletype = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=25, nullable=false)
     */
    private $action = '';



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
     * @return MdlScormSeqRuleconds
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
     * Set conditioncombination
     *
     * @param string $conditioncombination
     * @return MdlScormSeqRuleconds
     */
    public function setConditioncombination($conditioncombination)
    {
        $this->conditioncombination = $conditioncombination;

        return $this;
    }

    /**
     * Get conditioncombination
     *
     * @return string 
     */
    public function getConditioncombination()
    {
        return $this->conditioncombination;
    }

    /**
     * Set ruletype
     *
     * @param boolean $ruletype
     * @return MdlScormSeqRuleconds
     */
    public function setRuletype($ruletype)
    {
        $this->ruletype = $ruletype;

        return $this;
    }

    /**
     * Get ruletype
     *
     * @return boolean 
     */
    public function getRuletype()
    {
        return $this->ruletype;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return MdlScormSeqRuleconds
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }
}
