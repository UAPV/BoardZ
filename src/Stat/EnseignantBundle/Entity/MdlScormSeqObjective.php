<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlScormSeqObjective
 *
 * @ORM\Table(name="mdl_scorm_seq_objective", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_scorseqobje_scoid_uix", columns={"scoid", "id"})}, indexes={@ORM\Index(name="mdl_scorseqobje_sco_ix", columns={"scoid"})})
 * @ORM\Entity
 */
class MdlScormSeqObjective
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
     * @var boolean
     *
     * @ORM\Column(name="primaryobj", type="boolean", nullable=false)
     */
    private $primaryobj = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="objectiveid", type="string", length=255, nullable=false)
     */
    private $objectiveid = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="satisfiedbymeasure", type="boolean", nullable=false)
     */
    private $satisfiedbymeasure = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="minnormalizedmeasure", type="float", precision=11, scale=4, nullable=false)
     */
    private $minnormalizedmeasure = '0.0000';



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
     * @return MdlScormSeqObjective
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
     * Set primaryobj
     *
     * @param boolean $primaryobj
     * @return MdlScormSeqObjective
     */
    public function setPrimaryobj($primaryobj)
    {
        $this->primaryobj = $primaryobj;

        return $this;
    }

    /**
     * Get primaryobj
     *
     * @return boolean 
     */
    public function getPrimaryobj()
    {
        return $this->primaryobj;
    }

    /**
     * Set objectiveid
     *
     * @param string $objectiveid
     * @return MdlScormSeqObjective
     */
    public function setObjectiveid($objectiveid)
    {
        $this->objectiveid = $objectiveid;

        return $this;
    }

    /**
     * Get objectiveid
     *
     * @return string 
     */
    public function getObjectiveid()
    {
        return $this->objectiveid;
    }

    /**
     * Set satisfiedbymeasure
     *
     * @param boolean $satisfiedbymeasure
     * @return MdlScormSeqObjective
     */
    public function setSatisfiedbymeasure($satisfiedbymeasure)
    {
        $this->satisfiedbymeasure = $satisfiedbymeasure;

        return $this;
    }

    /**
     * Get satisfiedbymeasure
     *
     * @return boolean 
     */
    public function getSatisfiedbymeasure()
    {
        return $this->satisfiedbymeasure;
    }

    /**
     * Set minnormalizedmeasure
     *
     * @param float $minnormalizedmeasure
     * @return MdlScormSeqObjective
     */
    public function setMinnormalizedmeasure($minnormalizedmeasure)
    {
        $this->minnormalizedmeasure = $minnormalizedmeasure;

        return $this;
    }

    /**
     * Get minnormalizedmeasure
     *
     * @return float 
     */
    public function getMinnormalizedmeasure()
    {
        return $this->minnormalizedmeasure;
    }
}
