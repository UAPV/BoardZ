<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlEphorusAssignment
 *
 * @ORM\Table(name="mdl_ephorus_assignment")
 * @ORM\Entity
 */
class MdlEphorusAssignment
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
     * @ORM\Column(name="assignment", type="bigint", nullable=true)
     */
    private $assignment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="processtype", type="boolean", nullable=true)
     */
    private $processtype;



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
     * Set assignment
     *
     * @param integer $assignment
     * @return MdlEphorusAssignment
     */
    public function setAssignment($assignment)
    {
        $this->assignment = $assignment;

        return $this;
    }

    /**
     * Get assignment
     *
     * @return integer 
     */
    public function getAssignment()
    {
        return $this->assignment;
    }

    /**
     * Set processtype
     *
     * @param boolean $processtype
     * @return MdlEphorusAssignment
     */
    public function setProcesstype($processtype)
    {
        $this->processtype = $processtype;

        return $this;
    }

    /**
     * Get processtype
     *
     * @return boolean 
     */
    public function getProcesstype()
    {
        return $this->processtype;
    }
}
