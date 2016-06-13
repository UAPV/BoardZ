<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlMessageWorking
 *
 * @ORM\Table(name="mdl_message_working", indexes={@ORM\Index(name="mdl_messwork_unr_ix", columns={"unreadmessageid"})})
 * @ORM\Entity
 */
class MdlMessageWorking
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
     * @ORM\Column(name="unreadmessageid", type="bigint", nullable=false)
     */
    private $unreadmessageid;

    /**
     * @var integer
     *
     * @ORM\Column(name="processorid", type="bigint", nullable=false)
     */
    private $processorid;



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
     * Set unreadmessageid
     *
     * @param integer $unreadmessageid
     * @return MdlMessageWorking
     */
    public function setUnreadmessageid($unreadmessageid)
    {
        $this->unreadmessageid = $unreadmessageid;

        return $this;
    }

    /**
     * Get unreadmessageid
     *
     * @return integer 
     */
    public function getUnreadmessageid()
    {
        return $this->unreadmessageid;
    }

    /**
     * Set processorid
     *
     * @param integer $processorid
     * @return MdlMessageWorking
     */
    public function setProcessorid($processorid)
    {
        $this->processorid = $processorid;

        return $this;
    }

    /**
     * Get processorid
     *
     * @return integer 
     */
    public function getProcessorid()
    {
        return $this->processorid;
    }
}
