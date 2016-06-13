<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlFilterActive
 *
 * @ORM\Table(name="mdl_filter_active", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_filtacti_confil_uix", columns={"contextid", "filter"})}, indexes={@ORM\Index(name="mdl_filtacti_con_ix", columns={"contextid"})})
 * @ORM\Entity
 */
class MdlFilterActive
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
     * @var string
     *
     * @ORM\Column(name="filter", type="string", length=32, nullable=false)
     */
    private $filter = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid;

    /**
     * @var integer
     *
     * @ORM\Column(name="active", type="smallint", nullable=false)
     */
    private $active;

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
     * Set filter
     *
     * @param string $filter
     * @return MdlFilterActive
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Get filter
     *
     * @return string 
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Set contextid
     *
     * @param integer $contextid
     * @return MdlFilterActive
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
     * Set active
     *
     * @param integer $active
     * @return MdlFilterActive
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return integer 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set sortorder
     *
     * @param integer $sortorder
     * @return MdlFilterActive
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
