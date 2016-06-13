<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignUserFlags
 *
 * @ORM\Table(name="mdl_assign_user_flags", indexes={@ORM\Index(name="mdl_assiuserflag_mai_ix", columns={"mailed"}), @ORM\Index(name="mdl_assiuserflag_use_ix", columns={"userid"}), @ORM\Index(name="mdl_assiuserflag_ass_ix", columns={"assignment"})})
 * @ORM\Entity
 */
class MdlAssignUserFlags
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
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="assignment", type="bigint", nullable=false)
     */
    private $assignment = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="locked", type="bigint", nullable=false)
     */
    private $locked = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mailed", type="smallint", nullable=false)
     */
    private $mailed = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extensionduedate", type="bigint", nullable=false)
     */
    private $extensionduedate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="workflowstate", type="string", length=20, nullable=true)
     */
    private $workflowstate;

    /**
     * @var integer
     *
     * @ORM\Column(name="allocatedmarker", type="bigint", nullable=false)
     */
    private $allocatedmarker = '0';



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
     * Set userid
     *
     * @param integer $userid
     * @return MdlAssignUserFlags
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
     * Set assignment
     *
     * @param integer $assignment
     * @return MdlAssignUserFlags
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
     * Set locked
     *
     * @param integer $locked
     * @return MdlAssignUserFlags
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked
     *
     * @return integer 
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set mailed
     *
     * @param integer $mailed
     * @return MdlAssignUserFlags
     */
    public function setMailed($mailed)
    {
        $this->mailed = $mailed;

        return $this;
    }

    /**
     * Get mailed
     *
     * @return integer 
     */
    public function getMailed()
    {
        return $this->mailed;
    }

    /**
     * Set extensionduedate
     *
     * @param integer $extensionduedate
     * @return MdlAssignUserFlags
     */
    public function setExtensionduedate($extensionduedate)
    {
        $this->extensionduedate = $extensionduedate;

        return $this;
    }

    /**
     * Get extensionduedate
     *
     * @return integer 
     */
    public function getExtensionduedate()
    {
        return $this->extensionduedate;
    }

    /**
     * Set workflowstate
     *
     * @param string $workflowstate
     * @return MdlAssignUserFlags
     */
    public function setWorkflowstate($workflowstate)
    {
        $this->workflowstate = $workflowstate;

        return $this;
    }

    /**
     * Get workflowstate
     *
     * @return string 
     */
    public function getWorkflowstate()
    {
        return $this->workflowstate;
    }

    /**
     * Set allocatedmarker
     *
     * @param integer $allocatedmarker
     * @return MdlAssignUserFlags
     */
    public function setAllocatedmarker($allocatedmarker)
    {
        $this->allocatedmarker = $allocatedmarker;

        return $this;
    }

    /**
     * Get allocatedmarker
     *
     * @return integer 
     */
    public function getAllocatedmarker()
    {
        return $this->allocatedmarker;
    }
}
