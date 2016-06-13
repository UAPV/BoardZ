<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlRoleAllowSwitch
 *
 * @ORM\Table(name="mdl_role_allow_switch", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_rolealloswit_rolall_uix", columns={"roleid", "allowswitch"})}, indexes={@ORM\Index(name="mdl_rolealloswit_rol_ix", columns={"roleid"}), @ORM\Index(name="mdl_rolealloswit_all_ix", columns={"allowswitch"})})
 * @ORM\Entity
 */
class MdlRoleAllowSwitch
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
    private $roleid;

    /**
     * @var integer
     *
     * @ORM\Column(name="allowswitch", type="bigint", nullable=false)
     */
    private $allowswitch;



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
     * @return MdlRoleAllowSwitch
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
     * Set allowswitch
     *
     * @param integer $allowswitch
     * @return MdlRoleAllowSwitch
     */
    public function setAllowswitch($allowswitch)
    {
        $this->allowswitch = $allowswitch;

        return $this;
    }

    /**
     * Get allowswitch
     *
     * @return integer 
     */
    public function getAllowswitch()
    {
        return $this->allowswitch;
    }
}
