<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlRoleCapabilities
 *
 * @ORM\Table(name="mdl_role_capabilities", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_rolecapa_rolconcap_uix", columns={"roleid", "contextid", "capability"})}, indexes={@ORM\Index(name="mdl_rolecapa_rol_ix", columns={"roleid"}), @ORM\Index(name="mdl_rolecapa_con_ix", columns={"contextid"}), @ORM\Index(name="mdl_rolecapa_mod_ix", columns={"modifierid"}), @ORM\Index(name="mdl_rolecapa_cap_ix", columns={"capability"})})
 * @ORM\Entity
 */
class MdlRoleCapabilities
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
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="roleid", type="bigint", nullable=false)
     */
    private $roleid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="capability", type="string", length=255, nullable=false)
     */
    private $capability = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="permission", type="bigint", nullable=false)
     */
    private $permission = '0';

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contextid
     *
     * @param integer $contextid
     * @return MdlRoleCapabilities
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
     * Set roleid
     *
     * @param integer $roleid
     * @return MdlRoleCapabilities
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
     * Set capability
     *
     * @param string $capability
     * @return MdlRoleCapabilities
     */
    public function setCapability($capability)
    {
        $this->capability = $capability;

        return $this;
    }

    /**
     * Get capability
     *
     * @return string 
     */
    public function getCapability()
    {
        return $this->capability;
    }

    /**
     * Set permission
     *
     * @param integer $permission
     * @return MdlRoleCapabilities
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get permission
     *
     * @return integer 
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlRoleCapabilities
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
     * @return MdlRoleCapabilities
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
}
