<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlRoleAllowOverride
 *
 * @ORM\Table(name="mdl_role_allow_override", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_rolealloover_rolall_uix", columns={"roleid", "allowoverride"})}, indexes={@ORM\Index(name="mdl_rolealloover_rol_ix", columns={"roleid"}), @ORM\Index(name="mdl_rolealloover_all_ix", columns={"allowoverride"})})
 * @ORM\Entity
 */
class MdlRoleAllowOverride
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
     * @ORM\Column(name="allowoverride", type="bigint", nullable=false)
     */
    private $allowoverride = '0';



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
     * @return MdlRoleAllowOverride
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
     * Set allowoverride
     *
     * @param integer $allowoverride
     * @return MdlRoleAllowOverride
     */
    public function setAllowoverride($allowoverride)
    {
        $this->allowoverride = $allowoverride;

        return $this;
    }

    /**
     * Get allowoverride
     *
     * @return integer 
     */
    public function getAllowoverride()
    {
        return $this->allowoverride;
    }
}
