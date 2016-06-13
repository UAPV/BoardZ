<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshopCommentsOld
 *
 * @ORM\Table(name="mdl_workshop_comments_old", indexes={@ORM\Index(name="mdl_workcommold_use_ix", columns={"userid"}), @ORM\Index(name="mdl_workcommold_mai_ix", columns={"mailed"}), @ORM\Index(name="mdl_workcommold_wor_ix", columns={"workshopid"}), @ORM\Index(name="mdl_workcommold_ass_ix", columns={"assessmentid"})})
 * @ORM\Entity
 */
class MdlWorkshopCommentsOld
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
     * @ORM\Column(name="workshopid", type="bigint", nullable=false)
     */
    private $workshopid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="assessmentid", type="bigint", nullable=false)
     */
    private $assessmentid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="mailed", type="boolean", nullable=false)
     */
    private $mailed = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text", nullable=false)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="newplugin", type="string", length=28, nullable=true)
     */
    private $newplugin;

    /**
     * @var integer
     *
     * @ORM\Column(name="newid", type="bigint", nullable=true)
     */
    private $newid;



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
     * Set workshopid
     *
     * @param integer $workshopid
     * @return MdlWorkshopCommentsOld
     */
    public function setWorkshopid($workshopid)
    {
        $this->workshopid = $workshopid;

        return $this;
    }

    /**
     * Get workshopid
     *
     * @return integer 
     */
    public function getWorkshopid()
    {
        return $this->workshopid;
    }

    /**
     * Set assessmentid
     *
     * @param integer $assessmentid
     * @return MdlWorkshopCommentsOld
     */
    public function setAssessmentid($assessmentid)
    {
        $this->assessmentid = $assessmentid;

        return $this;
    }

    /**
     * Get assessmentid
     *
     * @return integer 
     */
    public function getAssessmentid()
    {
        return $this->assessmentid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlWorkshopCommentsOld
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
     * @return MdlWorkshopCommentsOld
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
     * Set mailed
     *
     * @param boolean $mailed
     * @return MdlWorkshopCommentsOld
     */
    public function setMailed($mailed)
    {
        $this->mailed = $mailed;

        return $this;
    }

    /**
     * Get mailed
     *
     * @return boolean 
     */
    public function getMailed()
    {
        return $this->mailed;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return MdlWorkshopCommentsOld
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set newplugin
     *
     * @param string $newplugin
     * @return MdlWorkshopCommentsOld
     */
    public function setNewplugin($newplugin)
    {
        $this->newplugin = $newplugin;

        return $this;
    }

    /**
     * Get newplugin
     *
     * @return string 
     */
    public function getNewplugin()
    {
        return $this->newplugin;
    }

    /**
     * Set newid
     *
     * @param integer $newid
     * @return MdlWorkshopCommentsOld
     */
    public function setNewid($newid)
    {
        $this->newid = $newid;

        return $this;
    }

    /**
     * Get newid
     *
     * @return integer 
     */
    public function getNewid()
    {
        return $this->newid;
    }
}
