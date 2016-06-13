<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlRoleContextLevels
 *
 * @ORM\Table(name="mdl_role_context_levels", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_rolecontleve_conrol_uix", columns={"contextlevel", "roleid"})}, indexes={@ORM\Index(name="mdl_rolecontleve_rol_ix", columns={"roleid"})})
 * @ORM\Entity
 */
class MdlRoleContextLevels
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
     * @ORM\Column(name="contextlevel", type="bigint", nullable=false)
     */
    private $contextlevel;



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
     * @return MdlRoleContextLevels
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
     * Set contextlevel
     *
     * @param integer $contextlevel
     * @return MdlRoleContextLevels
     */
    public function setContextlevel($contextlevel)
    {
        $this->contextlevel = $contextlevel;

        return $this;
    }

    /**
     * Get contextlevel
     *
     * @return integer 
     */
    public function getContextlevel()
    {
        return $this->contextlevel;
    }
}
