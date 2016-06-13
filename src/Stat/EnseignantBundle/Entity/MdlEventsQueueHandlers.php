<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlEventsQueueHandlers
 *
 * @ORM\Table(name="mdl_events_queue_handlers", indexes={@ORM\Index(name="mdl_evenqueuhand_que_ix", columns={"queuedeventid"}), @ORM\Index(name="mdl_evenqueuhand_han_ix", columns={"handlerid"})})
 * @ORM\Entity
 */
class MdlEventsQueueHandlers
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
     * @ORM\Column(name="queuedeventid", type="bigint", nullable=false)
     */
    private $queuedeventid;

    /**
     * @var integer
     *
     * @ORM\Column(name="handlerid", type="bigint", nullable=false)
     */
    private $handlerid;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="bigint", nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="errormessage", type="text", nullable=true)
     */
    private $errormessage;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;



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
     * Set queuedeventid
     *
     * @param integer $queuedeventid
     * @return MdlEventsQueueHandlers
     */
    public function setQueuedeventid($queuedeventid)
    {
        $this->queuedeventid = $queuedeventid;

        return $this;
    }

    /**
     * Get queuedeventid
     *
     * @return integer 
     */
    public function getQueuedeventid()
    {
        return $this->queuedeventid;
    }

    /**
     * Set handlerid
     *
     * @param integer $handlerid
     * @return MdlEventsQueueHandlers
     */
    public function setHandlerid($handlerid)
    {
        $this->handlerid = $handlerid;

        return $this;
    }

    /**
     * Get handlerid
     *
     * @return integer 
     */
    public function getHandlerid()
    {
        return $this->handlerid;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return MdlEventsQueueHandlers
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
     * Set errormessage
     *
     * @param string $errormessage
     * @return MdlEventsQueueHandlers
     */
    public function setErrormessage($errormessage)
    {
        $this->errormessage = $errormessage;

        return $this;
    }

    /**
     * Get errormessage
     *
     * @return string 
     */
    public function getErrormessage()
    {
        return $this->errormessage;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlEventsQueueHandlers
     */
    public function setTimemodified($timemodified)
    {
        $this->timemodified = $timemodified;

        return $this;
    }

    /**
     * Get timemodified
     *
     * @return integer 
     */
    public function getTimemodified()
    {
        return $this->timemodified;
    }
}
