<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlScormSeqMapinfo
 *
 * @ORM\Table(name="mdl_scorm_seq_mapinfo", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_scorseqmapi_scoidobj_uix", columns={"scoid", "id", "objectiveid"})}, indexes={@ORM\Index(name="mdl_scorseqmapi_sco_ix", columns={"scoid"}), @ORM\Index(name="mdl_scorseqmapi_obj_ix", columns={"objectiveid"})})
 * @ORM\Entity
 */
class MdlScormSeqMapinfo
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
     * @ORM\Column(name="objectiveid", type="bigint", nullable=false)
     */
    private $objectiveid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="targetobjectiveid", type="bigint", nullable=false)
     */
    private $targetobjectiveid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="readsatisfiedstatus", type="boolean", nullable=false)
     */
    private $readsatisfiedstatus = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="readnormalizedmeasure", type="boolean", nullable=false)
     */
    private $readnormalizedmeasure = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="writesatisfiedstatus", type="boolean", nullable=false)
     */
    private $writesatisfiedstatus = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="writenormalizedmeasure", type="boolean", nullable=false)
     */
    private $writenormalizedmeasure = '0';



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
     * @return MdlScormSeqMapinfo
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
     * Set objectiveid
     *
     * @param integer $objectiveid
     * @return MdlScormSeqMapinfo
     */
    public function setObjectiveid($objectiveid)
    {
        $this->objectiveid = $objectiveid;

        return $this;
    }

    /**
     * Get objectiveid
     *
     * @return integer 
     */
    public function getObjectiveid()
    {
        return $this->objectiveid;
    }

    /**
     * Set targetobjectiveid
     *
     * @param integer $targetobjectiveid
     * @return MdlScormSeqMapinfo
     */
    public function setTargetobjectiveid($targetobjectiveid)
    {
        $this->targetobjectiveid = $targetobjectiveid;

        return $this;
    }

    /**
     * Get targetobjectiveid
     *
     * @return integer 
     */
    public function getTargetobjectiveid()
    {
        return $this->targetobjectiveid;
    }

    /**
     * Set readsatisfiedstatus
     *
     * @param boolean $readsatisfiedstatus
     * @return MdlScormSeqMapinfo
     */
    public function setReadsatisfiedstatus($readsatisfiedstatus)
    {
        $this->readsatisfiedstatus = $readsatisfiedstatus;

        return $this;
    }

    /**
     * Get readsatisfiedstatus
     *
     * @return boolean 
     */
    public function getReadsatisfiedstatus()
    {
        return $this->readsatisfiedstatus;
    }

    /**
     * Set readnormalizedmeasure
     *
     * @param boolean $readnormalizedmeasure
     * @return MdlScormSeqMapinfo
     */
    public function setReadnormalizedmeasure($readnormalizedmeasure)
    {
        $this->readnormalizedmeasure = $readnormalizedmeasure;

        return $this;
    }

    /**
     * Get readnormalizedmeasure
     *
     * @return boolean 
     */
    public function getReadnormalizedmeasure()
    {
        return $this->readnormalizedmeasure;
    }

    /**
     * Set writesatisfiedstatus
     *
     * @param boolean $writesatisfiedstatus
     * @return MdlScormSeqMapinfo
     */
    public function setWritesatisfiedstatus($writesatisfiedstatus)
    {
        $this->writesatisfiedstatus = $writesatisfiedstatus;

        return $this;
    }

    /**
     * Get writesatisfiedstatus
     *
     * @return boolean 
     */
    public function getWritesatisfiedstatus()
    {
        return $this->writesatisfiedstatus;
    }

    /**
     * Set writenormalizedmeasure
     *
     * @param boolean $writenormalizedmeasure
     * @return MdlScormSeqMapinfo
     */
    public function setWritenormalizedmeasure($writenormalizedmeasure)
    {
        $this->writenormalizedmeasure = $writenormalizedmeasure;

        return $this;
    }

    /**
     * Get writenormalizedmeasure
     *
     * @return boolean 
     */
    public function getWritenormalizedmeasure()
    {
        return $this->writenormalizedmeasure;
    }
}
