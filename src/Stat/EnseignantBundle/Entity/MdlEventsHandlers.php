<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlEventsHandlers
 *
 * @ORM\Table(name="mdl_events_handlers", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_evenhand_evecom_uix", columns={"eventname", "component"})})
 * @ORM\Entity
 */
class MdlEventsHandlers
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
     * @ORM\Column(name="eventname", type="string", length=166, nullable=false)
     */
    private $eventname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="component", type="string", length=166, nullable=false)
     */
    private $component = '';

    /**
     * @var string
     *
     * @ORM\Column(name="handlerfile", type="string", length=255, nullable=false)
     */
    private $handlerfile = '';

    /**
     * @var string
     *
     * @ORM\Column(name="handlerfunction", type="text", nullable=true)
     */
    private $handlerfunction;

    /**
     * @var string
     *
     * @ORM\Column(name="schedule", type="string", length=255, nullable=true)
     */
    private $schedule;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="bigint", nullable=false)
     */
    private $status = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="internal", type="boolean", nullable=false)
     */
    private $internal = '1';



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
     * Set eventname
     *
     * @param string $eventname
     * @return MdlEventsHandlers
     */
    public function setEventname($eventname)
    {
        $this->eventname = $eventname;

        return $this;
    }

    /**
     * Get eventname
     *
     * @return string 
     */
    public function getEventname()
    {
        return $this->eventname;
    }

    /**
     * Set component
     *
     * @param string $component
     * @return MdlEventsHandlers
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
     * Set handlerfile
     *
     * @param string $handlerfile
     * @return MdlEventsHandlers
     */
    public function setHandlerfile($handlerfile)
    {
        $this->handlerfile = $handlerfile;

        return $this;
    }

    /**
     * Get handlerfile
     *
     * @return string 
     */
    public function getHandlerfile()
    {
        return $this->handlerfile;
    }

    /**
     * Set handlerfunction
     *
     * @param string $handlerfunction
     * @return MdlEventsHandlers
     */
    public function setHandlerfunction($handlerfunction)
    {
        $this->handlerfunction = $handlerfunction;

        return $this;
    }

    /**
     * Get handlerfunction
     *
     * @return string 
     */
    public function getHandlerfunction()
    {
        return $this->handlerfunction;
    }

    /**
     * Set schedule
     *
     * @param string $schedule
     * @return MdlEventsHandlers
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Get schedule
     *
     * @return string 
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return MdlEventsHandlers
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set internal
     *
     * @param boolean $internal
     * @return MdlEventsHandlers
     */
    public function setInternal($internal)
    {
        $this->internal = $internal;

        return $this;
    }

    /**
     * Get internal
     *
     * @return boolean 
     */
    public function getInternal()
    {
        return $this->internal;
    }
}
