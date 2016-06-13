<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradeGrades
 *
 * @ORM\Table(name="mdl_grade_grades", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_gradgrad_useite_uix", columns={"userid", "itemid"})}, indexes={@ORM\Index(name="mdl_gradgrad_locloc_ix", columns={"locked", "locktime"}), @ORM\Index(name="mdl_gradgrad_ite_ix", columns={"itemid"}), @ORM\Index(name="mdl_gradgrad_use_ix", columns={"userid"}), @ORM\Index(name="mdl_gradgrad_raw_ix", columns={"rawscaleid"}), @ORM\Index(name="mdl_gradgrad_use2_ix", columns={"usermodified"})})
 * @ORM\Entity
 */
class MdlGradeGrades
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
     * @ORM\Column(name="itemid", type="bigint", nullable=false)
     */
    private $itemid;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="rawgrade", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $rawgrade;

    /**
     * @var string
     *
     * @ORM\Column(name="rawgrademax", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $rawgrademax = '100.00000';

    /**
     * @var string
     *
     * @ORM\Column(name="rawgrademin", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $rawgrademin = '0.00000';

    /**
     * @var integer
     *
     * @ORM\Column(name="rawscaleid", type="bigint", nullable=true)
     */
    private $rawscaleid;

    /**
     * @var integer
     *
     * @ORM\Column(name="usermodified", type="bigint", nullable=true)
     */
    private $usermodified;

    /**
     * @var string
     *
     * @ORM\Column(name="finalgrade", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $finalgrade;

    /**
     * @var integer
     *
     * @ORM\Column(name="hidden", type="bigint", nullable=false)
     */
    private $hidden = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="locked", type="bigint", nullable=false)
     */
    private $locked = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="locktime", type="bigint", nullable=false)
     */
    private $locktime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="exported", type="bigint", nullable=false)
     */
    private $exported = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="overridden", type="bigint", nullable=false)
     */
    private $overridden = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="excluded", type="bigint", nullable=false)
     */
    private $excluded = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="feedback", type="text", nullable=true)
     */
    private $feedback;

    /**
     * @var integer
     *
     * @ORM\Column(name="feedbackformat", type="bigint", nullable=false)
     */
    private $feedbackformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="information", type="text", nullable=true)
     */
    private $information;

    /**
     * @var integer
     *
     * @ORM\Column(name="informationformat", type="bigint", nullable=false)
     */
    private $informationformat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=true)
     */
    private $timecreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=true)
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
     * Set itemid
     *
     * @param integer $itemid
     * @return MdlGradeGrades
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
     * Set userid
     *
     * @param integer $userid
     * @return MdlGradeGrades
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
     * Set rawgrade
     *
     * @param string $rawgrade
     * @return MdlGradeGrades
     */
    public function setRawgrade($rawgrade)
    {
        $this->rawgrade = $rawgrade;

        return $this;
    }

    /**
     * Get rawgrade
     *
     * @return string 
     */
    public function getRawgrade()
    {
        return $this->rawgrade;
    }

    /**
     * Set rawgrademax
     *
     * @param string $rawgrademax
     * @return MdlGradeGrades
     */
    public function setRawgrademax($rawgrademax)
    {
        $this->rawgrademax = $rawgrademax;

        return $this;
    }

    /**
     * Get rawgrademax
     *
     * @return string 
     */
    public function getRawgrademax()
    {
        return $this->rawgrademax;
    }

    /**
     * Set rawgrademin
     *
     * @param string $rawgrademin
     * @return MdlGradeGrades
     */
    public function setRawgrademin($rawgrademin)
    {
        $this->rawgrademin = $rawgrademin;

        return $this;
    }

    /**
     * Get rawgrademin
     *
     * @return string 
     */
    public function getRawgrademin()
    {
        return $this->rawgrademin;
    }

    /**
     * Set rawscaleid
     *
     * @param integer $rawscaleid
     * @return MdlGradeGrades
     */
    public function setRawscaleid($rawscaleid)
    {
        $this->rawscaleid = $rawscaleid;

        return $this;
    }

    /**
     * Get rawscaleid
     *
     * @return integer 
     */
    public function getRawscaleid()
    {
        return $this->rawscaleid;
    }

    /**
     * Set usermodified
     *
     * @param integer $usermodified
     * @return MdlGradeGrades
     */
    public function setUsermodified($usermodified)
    {
        $this->usermodified = $usermodified;

        return $this;
    }

    /**
     * Get usermodified
     *
     * @return integer 
     */
    public function getUsermodified()
    {
        return $this->usermodified;
    }

    /**
     * Set finalgrade
     *
     * @param string $finalgrade
     * @return MdlGradeGrades
     */
    public function setFinalgrade($finalgrade)
    {
        $this->finalgrade = $finalgrade;

        return $this;
    }

    /**
     * Get finalgrade
     *
     * @return string 
     */
    public function getFinalgrade()
    {
        return $this->finalgrade;
    }

    /**
     * Set hidden
     *
     * @param integer $hidden
     * @return MdlGradeGrades
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * Get hidden
     *
     * @return integer 
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Set locked
     *
     * @param integer $locked
     * @return MdlGradeGrades
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
     * Set locktime
     *
     * @param integer $locktime
     * @return MdlGradeGrades
     */
    public function setLocktime($locktime)
    {
        $this->locktime = $locktime;

        return $this;
    }

    /**
     * Get locktime
     *
     * @return integer 
     */
    public function getLocktime()
    {
        return $this->locktime;
    }

    /**
     * Set exported
     *
     * @param integer $exported
     * @return MdlGradeGrades
     */
    public function setExported($exported)
    {
        $this->exported = $exported;

        return $this;
    }

    /**
     * Get exported
     *
     * @return integer 
     */
    public function getExported()
    {
        return $this->exported;
    }

    /**
     * Set overridden
     *
     * @param integer $overridden
     * @return MdlGradeGrades
     */
    public function setOverridden($overridden)
    {
        $this->overridden = $overridden;

        return $this;
    }

    /**
     * Get overridden
     *
     * @return integer 
     */
    public function getOverridden()
    {
        return $this->overridden;
    }

    /**
     * Set excluded
     *
     * @param integer $excluded
     * @return MdlGradeGrades
     */
    public function setExcluded($excluded)
    {
        $this->excluded = $excluded;

        return $this;
    }

    /**
     * Get excluded
     *
     * @return integer 
     */
    public function getExcluded()
    {
        return $this->excluded;
    }

    /**
     * Set feedback
     *
     * @param string $feedback
     * @return MdlGradeGrades
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * Get feedback
     *
     * @return string 
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Set feedbackformat
     *
     * @param integer $feedbackformat
     * @return MdlGradeGrades
     */
    public function setFeedbackformat($feedbackformat)
    {
        $this->feedbackformat = $feedbackformat;

        return $this;
    }

    /**
     * Get feedbackformat
     *
     * @return integer 
     */
    public function getFeedbackformat()
    {
        return $this->feedbackformat;
    }

    /**
     * Set information
     *
     * @param string $information
     * @return MdlGradeGrades
     */
    public function setInformation($information)
    {
        $this->information = $information;

        return $this;
    }

    /**
     * Get information
     *
     * @return string 
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Set informationformat
     *
     * @param integer $informationformat
     * @return MdlGradeGrades
     */
    public function setInformationformat($informationformat)
    {
        $this->informationformat = $informationformat;

        return $this;
    }

    /**
     * Get informationformat
     *
     * @return integer 
     */
    public function getInformationformat()
    {
        return $this->informationformat;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlGradeGrades
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
     * @return MdlGradeGrades
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
