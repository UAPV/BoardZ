<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBackupLogs
 *
 * @ORM\Table(name="mdl_backup_logs", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_backlogs_bacid_uix", columns={"backupid", "id"})}, indexes={@ORM\Index(name="mdl_backlogs_bac_ix", columns={"backupid"})})
 * @ORM\Entity
 */
class MdlBackupLogs
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
     * @var integer
     *
     * @ORM\Column(name="loglevel", type="smallint", nullable=false)
     */
    private $loglevel;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

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
     * Set backupid
     *
     * @param string $backupid
     * @return MdlBackupLogs
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
     * Set loglevel
     *
     * @param integer $loglevel
     * @return MdlBackupLogs
     */
    public function setLoglevel($loglevel)
    {
        $this->loglevel = $loglevel;

        return $this;
    }

    /**
     * Get loglevel
     *
     * @return integer 
     */
    public function getLoglevel()
    {
        return $this->loglevel;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return MdlBackupLogs
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlBackupLogs
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
