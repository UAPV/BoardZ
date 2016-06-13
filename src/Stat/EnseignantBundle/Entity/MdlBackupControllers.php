<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBackupControllers
 *
 * @ORM\Table(name="mdl_backup_controllers", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_backcont_bac_uix", columns={"backupid"})}, indexes={@ORM\Index(name="mdl_backcont_typite_ix", columns={"type", "itemid"}), @ORM\Index(name="mdl_backcont_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlBackupControllers
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
     * @ORM\Column(name="backupid", type="string", length=32, nullable=false)
     */
    private $backupid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="operation", type="string", length=20, nullable=false)
     */
    private $operation = 'backup';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=false)
     */
    private $type = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="itemid", type="bigint", nullable=false)
     */
    private $itemid;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=20, nullable=false)
     */
    private $format = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="interactive", type="smallint", nullable=false)
     */
    private $interactive;

    /**
     * @var integer
     *
     * @ORM\Column(name="purpose", type="smallint", nullable=false)
     */
    private $purpose;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="execution", type="smallint", nullable=false)
     */
    private $execution;

    /**
     * @var integer
     *
     * @ORM\Column(name="executiontime", type="bigint", nullable=false)
     */
    private $executiontime;

    /**
     * @var string
     *
     * @ORM\Column(name="checksum", type="string", length=32, nullable=false)
     */
    private $checksum = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;

    /**
     * @var string
     *
     * @ORM\Column(name="controller", type="text", nullable=false)
     */
    private $controller;



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
     * Set backupid
     *
     * @param string $backupid
     * @return MdlBackupControllers
     */
    public function setBackupid($backupid)
    {
        $this->backupid = $backupid;

        return $this;
    }

    /**
     * Get backupid
     *
     * @return string 
     */
    public function getBackupid()
    {
        return $this->backupid;
    }

    /**
     * Set operation
     *
     * @param string $operation
     * @return MdlBackupControllers
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * Get operation
     *
     * @return string 
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return MdlBackupControllers
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set itemid
     *
     * @param integer $itemid
     * @return MdlBackupControllers
     */
    public function setItemid($itemid)
    {
        $this->itemid = $itemid;

        return $this;
    }

    /**
     * Get itemid
     *
     * @return integer 
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set format
     *
     * @param string $format
     * @return MdlBackupControllers
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return string 
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set interactive
     *
     * @param integer $interactive
     * @return MdlBackupControllers
     */
    public function setInteractive($interactive)
    {
        $this->interactive = $interactive;

        return $this;
    }

    /**
     * Get interactive
     *
     * @return integer 
     */
    public function getInteractive()
    {
        return $this->interactive;
    }

    /**
     * Set purpose
     *
     * @param integer $purpose
     * @return MdlBackupControllers
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;

        return $this;
    }

    /**
     * Get purpose
     *
     * @return integer 
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlBackupControllers
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
     * Set status
     *
     * @param integer $status
     * @return MdlBackupControllers
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
     * Set execution
     *
     * @param integer $execution
     * @return MdlBackupControllers
     */
    public function setExecution($execution)
    {
        $this->execution = $execution;

        return $this;
    }

    /**
     * Get execution
     *
     * @return integer 
     */
    public function getExecution()
    {
        return $this->execution;
    }

    /**
     * Set executiontime
     *
     * @param integer $executiontime
     * @return MdlBackupControllers
     */
    public function setExecutiontime($executiontime)
    {
        $this->executiontime = $executiontime;

        return $this;
    }

    /**
     * Get executiontime
     *
     * @return integer 
     */
    public function getExecutiontime()
    {
        return $this->executiontime;
    }

    /**
     * Set checksum
     *
     * @param string $checksum
     * @return MdlBackupControllers
     */
    public function setChecksum($checksum)
    {
        $this->checksum = $checksum;

        return $this;
    }

    /**
     * Get checksum
     *
     * @return string 
     */
    public function getChecksum()
    {
        return $this->checksum;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlBackupControllers
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

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlBackupControllers
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

    /**
     * Set controller
     *
     * @param string $controller
     * @return MdlBackupControllers
     */
    public function setController($controller)
    {
        $this->controller = $controller;

        return $this;
    }

    /**
     * Get controller
     *
     * @return string 
     */
    public function getController()
    {
        return $this->controller;
    }
}
