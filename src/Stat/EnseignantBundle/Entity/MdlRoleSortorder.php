<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlRoleSortorder
 *
 * @ORM\Table(name="mdl_role_sortorder", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_rolesort_userolcon_uix", columns={"userid", "roleid", "contextid"})}, indexes={@ORM\Index(name="mdl_rolesort_use_ix", columns={"userid"}), @ORM\Index(name="mdl_rolesort_rol_ix", columns={"roleid"}), @ORM\Index(name="mdl_rolesort_con_ix", columns={"contextid"})})
 * @ORM\Entity
 */
class MdlRoleSortorder
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
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="roleid", type="bigint", nullable=false)
     */
    private $roleid;

    /**
     * @var integer
     *
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid;

    /**
     * @var integer
     *
     * @ORM\Column(name="sortoder", type="bigint", nullable=false)
     */
    private $sortoder;



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
     * Set userid
     *
     * @param integer $userid
     * @return MdlRoleSortorder
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
     * Set roleid
     *
     * @param integer $roleid
     * @return MdlRoleSortorder
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
     * @return MdlRoleSortorder
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
     * Set sortoder
     *
     * @param integer $sortoder
     * @return MdlRoleSortorder
     */
    public function setSortoder($sortoder)
    {
        $this->sortoder = $sortoder;

        return $this;
    }

    /**
     * Get sortoder
     *
     * @return integer 
     */
    public function getSortoder()
    {
        return $this->sortoder;
    }
}
