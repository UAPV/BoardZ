<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLogDisplay
 *
 * @ORM\Table(name="mdl_log_display", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_logdisp_modact_uix", columns={"module", "action"})})
 * @ORM\Entity
 */
class MdlLogDisplay
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
     * @ORM\Column(name="module", type="string", length=20, nullable=false)
     */
    private $module = '';

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=40, nullable=false)
     */
    private $action = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mtable", type="string", length=30, nullable=false)
     */
    private $mtable = '';

    /**
     * @var string
     *
     * @ORM\Column(name="field", type="string", length=200, nullable=false)
     */
    private $field = '';

    /**
     * @var string
     *
     * @ORM\Column(name="component", type="string", length=100, nullable=false)
     */
    private $component = '';



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
     * Set module
     *
     * @param string $module
     * @return MdlLogDisplay
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return MdlLogDisplay
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set mtable
     *
     * @param string $mtable
     * @return MdlLogDisplay
     */
    public function setMtable($mtable)
    {
        $this->mtable = $mtable;

        return $this;
    }

    /**
     * Get mtable
     *
     * @return string 
     */
    public function getMtable()
    {
        return $this->mtable;
    }

    /**
     * Set field
     *
     * @param string $field
     * @return MdlLogDisplay
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return string 
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set component
     *
     * @param string $component
     * @return MdlLogDisplay
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
}
