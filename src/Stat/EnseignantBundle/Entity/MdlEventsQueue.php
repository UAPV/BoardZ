<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlEventsQueue
 *
 * @ORM\Table(name="mdl_events_queue", indexes={@ORM\Index(name="mdl_evenqueu_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlEventsQueue
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
     * @ORM\Column(name="eventdata", type="text", nullable=false)
     */
    private $eventdata;

    /**
     * @var string
     *
     * @ORM\Column(name="stackdump", type="text", nullable=true)
     */
    private $stackdump;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=true)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;



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
     * Set eventdata
     *
     * @param string $eventdata
     * @return MdlEventsQueue
     */
    public function setEventdata($eventdata)
    {
        $this->eventdata = $eventdata;

        return $this;
    }

    /**
     * Get eventdata
     *
     * @return string 
     */
    public function getEventdata()
    {
        return $this->eventdata;
    }

    /**
     * Set stackdump
     *
     * @param string $stackdump
     * @return MdlEventsQueue
     */
    public function setStackdump($stackdump)
    {
        $this->stackdump = $stackdump;

        return $this;
    }

    /**
     * Get stackdump
     *
     * @return string 
     */
    public function getStackdump()
    {
        return $this->stackdump;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlEventsQueue
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
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlEventsQueue
     */
    public function setTimecreated($timecreated)
    {
        $this->timecreated = $timecreated;

        return $this;
    }

    /**
     * Get timecreated
     *
     * @return integer 
     */
    public function getTimecreated()
    {
        return $this->timecreated;
    }
}
