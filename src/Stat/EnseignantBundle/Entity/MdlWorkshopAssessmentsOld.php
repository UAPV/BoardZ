<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshopAssessmentsOld
 *
 * @ORM\Table(name="mdl_workshop_assessments_old", indexes={@ORM\Index(name="mdl_workasseold_use_ix", columns={"userid"}), @ORM\Index(name="mdl_workasseold_mai_ix", columns={"mailed"}), @ORM\Index(name="mdl_workasseold_wor_ix", columns={"workshopid"}), @ORM\Index(name="mdl_workasseold_sub_ix", columns={"submissionid"})})
 * @ORM\Entity
 */
class MdlWorkshopAssessmentsOld
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
     * @ORM\Column(name="submissionid", type="bigint", nullable=false)
     */
    private $submissionid = '0';

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
     * @var integer
     *
     * @ORM\Column(name="timegraded", type="bigint", nullable=false)
     */
    private $timegraded = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timeagreed", type="bigint", nullable=false)
     */
    private $timeagreed = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="grade", type="float", precision=10, scale=0, nullable=false)
     */
    private $grade = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="gradinggrade", type="smallint", nullable=false)
     */
    private $gradinggrade = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="teachergraded", type="smallint", nullable=false)
     */
    private $teachergraded = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mailed", type="smallint", nullable=false)
     */
    private $mailed = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="resubmission", type="smallint", nullable=false)
     */
    private $resubmission = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="donotuse", type="smallint", nullable=false)
     */
    private $donotuse = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="generalcomment", type="text", nullable=true)
     */
    private $generalcomment;

    /**
     * @var string
     *
     * @ORM\Column(name="teachercomment", type="text", nullable=true)
     */
    private $teachercomment;

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
     * @return MdlWorkshopAssessmentsOld
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
     * Set submissionid
     *
     * @param integer $submissionid
     * @return MdlWorkshopAssessmentsOld
     */
    public function setSubmissionid($submissionid)
    {
        $this->submissionid = $submissionid;

        return $this;
    }

    /**
     * Get submissionid
     *
     * @return integer 
     */
    public function getSubmissionid()
    {
        return $this->submissionid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlWorkshopAssessmentsOld
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
     * @return MdlWorkshopAssessmentsOld
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
     * Set timegraded
     *
     * @param integer $timegraded
     * @return MdlWorkshopAssessmentsOld
     */
    public function setTimegraded($timegraded)
    {
        $this->timegraded = $timegraded;

        return $this;
    }

    /**
     * Get timegraded
     *
     * @return integer 
     */
    public function getTimegraded()
    {
        return $this->timegraded;
    }

    /**
     * Set timeagreed
     *
     * @param integer $timeagreed
     * @return MdlWorkshopAssessmentsOld
     */
    public function setTimeagreed($timeagreed)
    {
        $this->timeagreed = $timeagreed;

        return $this;
    }

    /**
     * Get timeagreed
     *
     * @return integer 
     */
    public function getTimeagreed()
    {
        return $this->timeagreed;
    }

    /**
     * Set grade
     *
     * @param float $grade
     * @return MdlWorkshopAssessmentsOld
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return float 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set gradinggrade
     *
     * @param integer $gradinggrade
     * @return MdlWorkshopAssessmentsOld
     */
    public function setGradinggrade($gradinggrade)
    {
        $this->gradinggrade = $gradinggrade;

        return $this;
    }

    /**
     * Get gradinggrade
     *
     * @return integer 
     */
    public function getGradinggrade()
    {
        return $this->gradinggrade;
    }

    /**
     * Set teachergraded
     *
     * @param integer $teachergraded
     * @return MdlWorkshopAssessmentsOld
     */
    public function setTeachergraded($teachergraded)
    {
        $this->teachergraded = $teachergraded;

        return $this;
    }

    /**
     * Get teachergraded
     *
     * @return integer 
     */
    public function getTeachergraded()
    {
        return $this->teachergraded;
    }

    /**
     * Set mailed
     *
     * @param integer $mailed
     * @return MdlWorkshopAssessmentsOld
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
     * Set resubmission
     *
     * @param integer $resubmission
     * @return MdlWorkshopAssessmentsOld
     */
    public function setResubmission($resubmission)
    {
        $this->resubmission = $resubmission;

        return $this;
    }

    /**
     * Get resubmission
     *
     * @return integer 
     */
    public function getResubmission()
    {
        return $this->resubmission;
    }

    /**
     * Set donotuse
     *
     * @param integer $donotuse
     * @return MdlWorkshopAssessmentsOld
     */
    public function setDonotuse($donotuse)
    {
        $this->donotuse = $donotuse;

        return $this;
    }

    /**
     * Get donotuse
     *
     * @return integer 
     */
    public function getDonotuse()
    {
        return $this->donotuse;
    }

    /**
     * Set generalcomment
     *
     * @param string $generalcomment
     * @return MdlWorkshopAssessmentsOld
     */
    public function setGeneralcomment($generalcomment)
    {
        $this->generalcomment = $generalcomment;

        return $this;
    }

    /**
     * Get generalcomment
     *
     * @return string 
     */
    public function getGeneralcomment()
    {
        return $this->generalcomment;
    }

    /**
     * Set teachercomment
     *
     * @param string $teachercomment
     * @return MdlWorkshopAssessmentsOld
     */
    public function setTeachercomment($teachercomment)
    {
        $this->teachercomment = $teachercomment;

        return $this;
    }

    /**
     * Get teachercomment
     *
     * @return string 
     */
    public function getTeachercomment()
    {
        return $this->teachercomment;
    }

    /**
     * Set newplugin
     *
     * @param string $newplugin
     * @return MdlWorkshopAssessmentsOld
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
     * @return MdlWorkshopAssessmentsOld
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
