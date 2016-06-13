<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradeGradesHistory
 *
 * @ORM\Table(name="mdl_grade_grades_history", indexes={@ORM\Index(name="mdl_gradgradhist_act_ix", columns={"action"}), @ORM\Index(name="mdl_gradgradhist_tim_ix", columns={"timemodified"}), @ORM\Index(name="mdl_gradgradhist_old_ix", columns={"oldid"}), @ORM\Index(name="mdl_gradgradhist_ite_ix", columns={"itemid"}), @ORM\Index(name="mdl_gradgradhist_use_ix", columns={"userid"}), @ORM\Index(name="mdl_gradgradhist_raw_ix", columns={"rawscaleid"}), @ORM\Index(name="mdl_gradgradhist_use2_ix", columns={"usermodified"}), @ORM\Index(name="mdl_gradgradhist_log_ix", columns={"loggeduser"})})
 * @ORM\Entity
 */
class MdlGradeGradesHistory
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
     * @ORM\Column(name="action", type="bigint", nullable=false)
     */
    private $action = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="oldid", type="bigint", nullable=false)
     */
    private $oldid;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255, nullable=true)
     */
    private $source;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=true)
     */
    private $timemodified;

    /**
     * @var integer
     *
     * @ORM\Column(name="loggeduser", type="bigint", nullable=true)
     */
    private $loggeduser;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set action
     *
     * @param integer $action
     * @return MdlGradeGradesHistory
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return integer 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set oldid
     *
     * @param integer $oldid
     * @return MdlGradeGradesHistory
     */
    public function setOldid($oldid)
    {
        $this->oldid = $oldid;

        return $this;
    }

    /**
     * Get oldid
     *
     * @return integer 
     */
    public function getOldid()
    {
        return $this->oldid;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return MdlGradeGradesHistory
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlGradeGradesHistory
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
     * Set loggeduser
     *
     * @param integer $loggeduser
     * @return MdlGradeGradesHistory
     */
    public function setLoggeduser($loggeduser)
    {
        $this->loggeduser = $loggeduser;

        return $this;
    }

    /**
     * Get loggeduser
     *
     * @return integer 
     */
    public function getLoggeduser()
    {
        return $this->loggeduser;
    }

    /**
     * Set itemid
     *
     * @param integer $itemid
     * @return MdlGradeGradesHistory
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
     * @return MdlGradeGradesHistory
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
     * @return MdlGradeGradesHistory
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
     * @return MdlGradeGradesHistory
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
     * @return MdlGradeGradesHistory
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
     * @return MdlGradeGradesHistory
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
     * @return MdlGradeGradesHistory
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
     * @return MdlGradeGradesHistory
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
     * @return MdlGradeGradesHistory
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
     * @return MdlGradeGradesHistory
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
     * @return MdlGradeGradesHistory
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
     * @return MdlGradeGradesHistory
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
     * @return MdlGradeGradesHistory
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
     * @return MdlGradeGradesHistory
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
     * @return MdlGradeGradesHistory
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
     * @return MdlGradeGradesHistory
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
     * @return MdlGradeGradesHistory
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
     * @return MdlGradeGradesHistory
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
}
