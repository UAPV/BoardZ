<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlRoleAllowAssign
 *
 * @ORM\Table(name="mdl_role_allow_assign", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_rolealloassi_rolall_uix", columns={"roleid", "allowassign"})}, indexes={@ORM\Index(name="mdl_rolealloassi_rol_ix", columns={"roleid"}), @ORM\Index(name="mdl_rolealloassi_all_ix", columns={"allowassign"})})
 * @ORM\Entity
 */
class MdlRoleAllowAssign
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
     * @ORM\Column(name="allowassign", type="bigint", nullable=false)
     */
    private $allowassign = '0';



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
     * @return MdlRoleAllowAssign
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
     * Set allowassign
     *
     * @param integer $allowassign
     * @return MdlRoleAllowAssign
     */
    public function setAllowassign($allowassign)
    {
        $this->allowassign = $allowassign;

        return $this;
    }

    /**
     * Get allowassign
     *
     * @return integer 
     */
    public function getAllowassign()
    {
        return $this->allowassign;
    }
}
