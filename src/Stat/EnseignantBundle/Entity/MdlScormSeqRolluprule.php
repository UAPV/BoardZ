<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlScormSeqRolluprule
 *
 * @ORM\Table(name="mdl_scorm_seq_rolluprule", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_scorseqroll_scoid_uix", columns={"scoid", "id"})}, indexes={@ORM\Index(name="mdl_scorseqroll_sco_ix", columns={"scoid"})})
 * @ORM\Entity
 */
class MdlScormSeqRolluprule
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
     * @ORM\Column(name="childactivityset", type="string", length=15, nullable=false)
     */
    private $childactivityset = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="minimumcount", type="bigint", nullable=false)
     */
    private $minimumcount = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="minimumpercent", type="float", precision=11, scale=4, nullable=false)
     */
    private $minimumpercent = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="conditioncombination", type="string", length=3, nullable=false)
     */
    private $conditioncombination = 'all';

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=15, nullable=false)
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
     * @return MdlScormSeqRolluprule
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
     * Set childactivityset
     *
     * @param string $childactivityset
     * @return MdlScormSeqRolluprule
     */
    public function setChildactivityset($childactivityset)
    {
        $this->childactivityset = $childactivityset;

        return $this;
    }

    /**
     * Get childactivityset
     *
     * @return string 
     */
    public function getChildactivityset()
    {
        return $this->childactivityset;
    }

    /**
     * Set minimumcount
     *
     * @param integer $minimumcount
     * @return MdlScormSeqRolluprule
     */
    public function setMinimumcount($minimumcount)
    {
        $this->minimumcount = $minimumcount;

        return $this;
    }

    /**
     * Get minimumcount
     *
     * @return integer 
     */
    public function getMinimumcount()
    {
        return $this->minimumcount;
    }

    /**
     * Set minimumpercent
     *
     * @param float $minimumpercent
     * @return MdlScormSeqRolluprule
     */
    public function setMinimumpercent($minimumpercent)
    {
        $this->minimumpercent = $minimumpercent;

        return $this;
    }

    /**
     * Get minimumpercent
     *
     * @return float 
     */
    public function getMinimumpercent()
    {
        return $this->minimumpercent;
    }

    /**
     * Set conditioncombination
     *
     * @param string $conditioncombination
     * @return MdlScormSeqRolluprule
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
     * Set action
     *
     * @param string $action
     * @return MdlScormSeqRolluprule
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
