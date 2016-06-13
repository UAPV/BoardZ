<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradingAreas
 *
 * @ORM\Table(name="mdl_grading_areas", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_gradarea_concomare_uix", columns={"contextid", "component", "areaname"})}, indexes={@ORM\Index(name="mdl_gradarea_con_ix", columns={"contextid"})})
 * @ORM\Entity
 */
class MdlGradingAreas
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
    private $contextid;

    /**
     * @var string
     *
     * @ORM\Column(name="component", type="string", length=100, nullable=false)
     */
    private $component = '';

    /**
     * @var string
     *
     * @ORM\Column(name="areaname", type="string", length=100, nullable=false)
     */
    private $areaname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="activemethod", type="string", length=100, nullable=true)
     */
    private $activemethod;



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
     * @return MdlGradingAreas
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
     * Set component
     *
     * @param string $component
     * @return MdlGradingAreas
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
     * Set areaname
     *
     * @param string $areaname
     * @return MdlGradingAreas
     */
    public function setAreaname($areaname)
    {
        $this->areaname = $areaname;

        return $this;
    }

    /**
     * Get areaname
     *
     * @return string 
     */
    public function getAreaname()
    {
        return $this->areaname;
    }

    /**
     * Set activemethod
     *
     * @param string $activemethod
     * @return MdlGradingAreas
     */
    public function setActivemethod($activemethod)
    {
        $this->activemethod = $activemethod;

        return $this;
    }

    /**
     * Get activemethod
     *
     * @return string 
     */
    public function getActivemethod()
    {
        return $this->activemethod;
    }
}
