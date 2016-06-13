<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGroupingsGroups
 *
 * @ORM\Table(name="mdl_groupings_groups", indexes={@ORM\Index(name="mdl_grougrou_gro_ix", columns={"groupingid"}), @ORM\Index(name="mdl_grougrou_gro2_ix", columns={"groupid"})})
 * @ORM\Entity
 */
class MdlGroupingsGroups
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
     * @ORM\Column(name="groupingid", type="bigint", nullable=false)
     */
    private $groupingid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groupid", type="bigint", nullable=false)
     */
    private $groupid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timeadded", type="bigint", nullable=false)
     */
    private $timeadded = '0';



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
     * Set groupingid
     *
     * @param integer $groupingid
     * @return MdlGroupingsGroups
     */
    public function setGroupingid($groupingid)
    {
        $this->groupingid = $groupingid;

        return $this;
    }

    /**
     * Get groupingid
     *
     * @return integer 
     */
    public function getGroupingid()
    {
        return $this->groupingid;
    }

    /**
     * Set groupid
     *
     * @param integer $groupid
     * @return MdlGroupingsGroups
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Get groupid
     *
     * @return integer 
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set timeadded
     *
     * @param integer $timeadded
     * @return MdlGroupingsGroups
     */
    public function setTimeadded($timeadded)
    {
        $this->timeadded = $timeadded;

        return $this;
    }

    /**
     * Get timeadded
     *
     * @return integer 
     */
    public function getTimeadded()
    {
        return $this->timeadded;
    }
}
