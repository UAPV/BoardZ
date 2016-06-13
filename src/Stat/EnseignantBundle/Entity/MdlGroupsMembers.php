<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGroupsMembers
 *
 * @ORM\Table(name="mdl_groups_members", indexes={@ORM\Index(name="mdl_groumemb_gro_ix", columns={"groupid"}), @ORM\Index(name="mdl_groumemb_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlGroupsMembers
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
     * @ORM\Column(name="groupid", type="bigint", nullable=false)
     */
    private $groupid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timeadded", type="bigint", nullable=false)
     */
    private $timeadded = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="component", type="string", length=100, nullable=false)
     */
    private $component = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="itemid", type="bigint", nullable=false)
     */
    private $itemid = '0';



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
     * Set groupid
     *
     * @param integer $groupid
     * @return MdlGroupsMembers
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
     * Set userid
     *
     * @param integer $userid
     * @return MdlGroupsMembers
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
     * Set timeadded
     *
     * @param integer $timeadded
     * @return MdlGroupsMembers
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

    /**
     * Set component
     *
     * @param string $component
     * @return MdlGroupsMembers
     */
    public function setComponent($component)
    {
        $this->component = $component;

        return $this;
    }

    /**
     * Get component
     *
     * @return string 
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Set itemid
     *
     * @param integer $itemid
     * @return MdlGroupsMembers
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
}
