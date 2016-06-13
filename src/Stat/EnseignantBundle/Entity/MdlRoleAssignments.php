<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlRoleAssignments
 *
 * @ORM\Table(name="mdl_role_assignments", indexes={@ORM\Index(name="mdl_roleassi_sor_ix", columns={"sortorder"}), @ORM\Index(name="mdl_roleassi_rolcon_ix", columns={"roleid", "contextid"}), @ORM\Index(name="mdl_roleassi_useconrol_ix", columns={"userid", "contextid", "roleid"}), @ORM\Index(name="mdl_roleassi_comiteuse_ix", columns={"component", "itemid", "userid"}), @ORM\Index(name="mdl_roleassi_rol_ix", columns={"roleid"}), @ORM\Index(name="mdl_roleassi_con_ix", columns={"contextid"}), @ORM\Index(name="mdl_roleassi_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlRoleAssignments
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
     * @ORM\Column(name="roleid", type="bigint", nullable=false)
     */
    private $roleid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="modifierid", type="bigint", nullable=false)
     */
    private $modifierid = '0';

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
     * @var integer
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder = '0';



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
     * Set roleid
     *
     * @param integer $roleid
     * @return MdlRoleAssignments
     */
    public function setRoleid($roleid)
    {
        $this->roleid = $roleid;

        return $this;
    }

    /**
     * Get roleid
     *
     * @return integer 
     */
    public function getRoleid()
    {
        return $this->roleid;
    }

    /**
     * Set contextid
     *
     * @param integer $contextid
     * @return MdlRoleAssignments
     */
    public function setContextid($contextid)
    {
        $this->contextid = $contextid;

        return $this;
    }

    /**
     * Get contextid
     *
     * @return integer 
     */
    public function getContextid()
    {
        return $this->contextid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlRoleAssignments
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
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlRoleAssignments
     */
    public function setTimemodified($timemodified)
    {
        $this->timemodified = $timemodified;

        return $this;
    }

    /**
     * Get timemodified
     *
     * @return integer 
     */
    public function getTimemodified()
    {
        return $this->timemodified;
    }

    /**
     * Set modifierid
     *
     * @param integer $modifierid
     * @return MdlRoleAssignments
     */
    public function setModifierid($modifierid)
    {
        $this->modifierid = $modifierid;

        return $this;
    }

    /**
     * Get modifierid
     *
     * @return integer 
     */
    public function getModifierid()
    {
        return $this->modifierid;
    }

    /**
     * Set component
     *
     * @param string $component
     * @return MdlRoleAssignments
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
     * @return MdlRoleAssignments
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

    /**
     * Set sortorder
     *
     * @param integer $sortorder
     * @return MdlRoleAssignments
     */
    public function setSortorder($sortorder)
    {
        $this->sortorder = $sortorder;

        return $this;
    }

    /**
     * Get sortorder
     *
     * @return integer 
     */
    public function getSortorder()
    {
        return $this->sortorder;
    }
}
