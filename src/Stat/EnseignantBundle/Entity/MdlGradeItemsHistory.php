<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradeItemsHistory
 *
 * @ORM\Table(name="mdl_grade_items_history", indexes={@ORM\Index(name="mdl_graditemhist_act_ix", columns={"action"}), @ORM\Index(name="mdl_graditemhist_old_ix", columns={"oldid"}), @ORM\Index(name="mdl_graditemhist_cou_ix", columns={"courseid"}), @ORM\Index(name="mdl_graditemhist_cat_ix", columns={"categoryid"}), @ORM\Index(name="mdl_graditemhist_sca_ix", columns={"scaleid"}), @ORM\Index(name="mdl_graditemhist_out_ix", columns={"outcomeid"}), @ORM\Index(name="mdl_graditemhist_log_ix", columns={"loggeduser"})})
 * @ORM\Entity
 */
class MdlGradeItemsHistory
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
     * @ORM\Column(name="courseid", type="bigint", nullable=true)
     */
    private $courseid;

    /**
     * @var integer
     *
     * @ORM\Column(name="categoryid", type="bigint", nullable=true)
     */
    private $categoryid;

    /**
     * @var string
     *
     * @ORM\Column(name="itemname", type="string", length=255, nullable=true)
     */
    private $itemname;

    /**
     * @var string
     *
     * @ORM\Column(name="itemtype", type="string", length=30, nullable=false)
     */
    private $itemtype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="itemmodule", type="string", length=30, nullable=true)
     */
    private $itemmodule;

    /**
     * @var integer
     *
     * @ORM\Column(name="iteminstance", type="bigint", nullable=true)
     */
    private $iteminstance;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemnumber", type="bigint", nullable=true)
     */
    private $itemnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="iteminfo", type="text", nullable=true)
     */
    private $iteminfo;

    /**
     * @var string
     *
     * @ORM\Column(name="idnumber", type="string", length=255, nullable=true)
     */
    private $idnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="calculation", type="text", nullable=true)
     */
    private $calculation;

    /**
     * @var integer
     *
     * @ORM\Column(name="gradetype", type="smallint", nullable=false)
     */
    private $gradetype = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="grademax", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $grademax = '100.00000';

    /**
     * @var string
     *
     * @ORM\Column(name="grademin", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $grademin = '0.00000';

    /**
     * @var integer
     *
     * @ORM\Column(name="scaleid", type="bigint", nullable=true)
     */
    private $scaleid;

    /**
     * @var integer
     *
     * @ORM\Column(name="outcomeid", type="bigint", nullable=true)
     */
    private $outcomeid;

    /**
     * @var string
     *
     * @ORM\Column(name="gradepass", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $gradepass = '0.00000';

    /**
     * @var string
     *
     * @ORM\Column(name="multfactor", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $multfactor = '1.00000';

    /**
     * @var string
     *
     * @ORM\Column(name="plusfactor", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $plusfactor = '0.00000';

    /**
     * @var string
     *
     * @ORM\Column(name="aggregationcoef", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $aggregationcoef = '0.00000';

    /**
     * @var integer
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder = '0';

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
     * @ORM\Column(name="needsupdate", type="bigint", nullable=false)
     */
    private $needsupdate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="display", type="bigint", nullable=false)
     */
    private $display = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="decimals", type="boolean", nullable=true)
     */
    private $decimals;



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
     * @return MdlGradeItemsHistory
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
     * @return MdlGradeItemsHistory
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
     * @return MdlGradeItemsHistory
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
     * @return MdlGradeItemsHistory
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
     * @return MdlGradeItemsHistory
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
     * Set courseid
     *
     * @param integer $courseid
     * @return MdlGradeItemsHistory
     */
    public function setCourseid($courseid)
    {
        $this->courseid = $courseid;

        return $this;
    }

    /**
     * Get courseid
     *
     * @return integer 
     */
    public function getCourseid()
    {
        return $this->courseid;
    }

    /**
     * Set categoryid
     *
     * @param integer $categoryid
     * @return MdlGradeItemsHistory
     */
    public function setCategoryid($categoryid)
    {
        $this->categoryid = $categoryid;

        return $this;
    }

    /**
     * Get categoryid
     *
     * @return integer 
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }

    /**
     * Set itemname
     *
     * @param string $itemname
     * @return MdlGradeItemsHistory
     */
    public function setItemname($itemname)
    {
        $this->itemname = $itemname;

        return $this;
    }

    /**
     * Get itemname
     *
     * @return string 
     */
    public function getItemname()
    {
        return $this->itemname;
    }

    /**
     * Set itemtype
     *
     * @param string $itemtype
     * @return MdlGradeItemsHistory
     */
    public function setItemtype($itemtype)
    {
        $this->itemtype = $itemtype;

        return $this;
    }

    /**
     * Get itemtype
     *
     * @return string 
     */
    public function getItemtype()
    {
        return $this->itemtype;
    }

    /**
     * Set itemmodule
     *
     * @param string $itemmodule
     * @return MdlGradeItemsHistory
     */
    public function setItemmodule($itemmodule)
    {
        $this->itemmodule = $itemmodule;

        return $this;
    }

    /**
     * Get itemmodule
     *
     * @return string 
     */
    public function getItemmodule()
    {
        return $this->itemmodule;
    }

    /**
     * Set iteminstance
     *
     * @param integer $iteminstance
     * @return MdlGradeItemsHistory
     */
    public function setIteminstance($iteminstance)
    {
        $this->iteminstance = $iteminstance;

        return $this;
    }

    /**
     * Get iteminstance
     *
     * @return integer 
     */
    public function getIteminstance()
    {
        return $this->iteminstance;
    }

    /**
     * Set itemnumber
     *
     * @param integer $itemnumber
     * @return MdlGradeItemsHistory
     */
    public function setItemnumber($itemnumber)
    {
        $this->itemnumber = $itemnumber;

        return $this;
    }

    /**
     * Get itemnumber
     *
     * @return integer 
     */
    public function getItemnumber()
    {
        return $this->itemnumber;
    }

    /**
     * Set iteminfo
     *
     * @param string $iteminfo
     * @return MdlGradeItemsHistory
     */
    public function setIteminfo($iteminfo)
    {
        $this->iteminfo = $iteminfo;

        return $this;
    }

    /**
     * Get iteminfo
     *
     * @return string 
     */
    public function getIteminfo()
    {
        return $this->iteminfo;
    }

    /**
     * Set idnumber
     *
     * @param string $idnumber
     * @return MdlGradeItemsHistory
     */
    public function setIdnumber($idnumber)
    {
        $this->idnumber = $idnumber;

        return $this;
    }

    /**
     * Get idnumber
     *
     * @return string 
     */
    public function getIdnumber()
    {
        return $this->idnumber;
    }

    /**
     * Set calculation
     *
     * @param string $calculation
     * @return MdlGradeItemsHistory
     */
    public function setCalculation($calculation)
    {
        $this->calculation = $calculation;

        return $this;
    }

    /**
     * Get calculation
     *
     * @return string 
     */
    public function getCalculation()
    {
        return $this->calculation;
    }

    /**
     * Set gradetype
     *
     * @param integer $gradetype
     * @return MdlGradeItemsHistory
     */
    public function setGradetype($gradetype)
    {
        $this->gradetype = $gradetype;

        return $this;
    }

    /**
     * Get gradetype
     *
     * @return integer 
     */
    public function getGradetype()
    {
        return $this->gradetype;
    }

    /**
     * Set grademax
     *
     * @param string $grademax
     * @return MdlGradeItemsHistory
     */
    public function setGrademax($grademax)
    {
        $this->grademax = $grademax;

        return $this;
    }

    /**
     * Get grademax
     *
     * @return string 
     */
    public function getGrademax()
    {
        return $this->grademax;
    }

    /**
     * Set grademin
     *
     * @param string $grademin
     * @return MdlGradeItemsHistory
     */
    public function setGrademin($grademin)
    {
        $this->grademin = $grademin;

        return $this;
    }

    /**
     * Get grademin
     *
     * @return string 
     */
    public function getGrademin()
    {
        return $this->grademin;
    }

    /**
     * Set scaleid
     *
     * @param integer $scaleid
     * @return MdlGradeItemsHistory
     */
    public function setScaleid($scaleid)
    {
        $this->scaleid = $scaleid;

        return $this;
    }

    /**
     * Get scaleid
     *
     * @return integer 
     */
    public function getScaleid()
    {
        return $this->scaleid;
    }

    /**
     * Set outcomeid
     *
     * @param integer $outcomeid
     * @return MdlGradeItemsHistory
     */
    public function setOutcomeid($outcomeid)
    {
        $this->outcomeid = $outcomeid;

        return $this;
    }

    /**
     * Get outcomeid
     *
     * @return integer 
     */
    public function getOutcomeid()
    {
        return $this->outcomeid;
    }

    /**
     * Set gradepass
     *
     * @param string $gradepass
     * @return MdlGradeItemsHistory
     */
    public function setGradepass($gradepass)
    {
        $this->gradepass = $gradepass;

        return $this;
    }

    /**
     * Get gradepass
     *
     * @return string 
     */
    public function getGradepass()
    {
        return $this->gradepass;
    }

    /**
     * Set multfactor
     *
     * @param string $multfactor
     * @return MdlGradeItemsHistory
     */
    public function setMultfactor($multfactor)
    {
        $this->multfactor = $multfactor;

        return $this;
    }

    /**
     * Get multfactor
     *
     * @return string 
     */
    public function getMultfactor()
    {
        return $this->multfactor;
    }

    /**
     * Set plusfactor
     *
     * @param string $plusfactor
     * @return MdlGradeItemsHistory
     */
    public function setPlusfactor($plusfactor)
    {
        $this->plusfactor = $plusfactor;

        return $this;
    }

    /**
     * Get plusfactor
     *
     * @return string 
     */
    public function getPlusfactor()
    {
        return $this->plusfactor;
    }

    /**
     * Set aggregationcoef
     *
     * @param string $aggregationcoef
     * @return MdlGradeItemsHistory
     */
    public function setAggregationcoef($aggregationcoef)
    {
        $this->aggregationcoef = $aggregationcoef;

        return $this;
    }

    /**
     * Get aggregationcoef
     *
     * @return string 
     */
    public function getAggregationcoef()
    {
        return $this->aggregationcoef;
    }

    /**
     * Set sortorder
     *
     * @param integer $sortorder
     * @return MdlGradeItemsHistory
     */
    public function setSortorder($sortorder)
    {
        $this->sortorder = $sortorder;

        return $this;
    }

    /**
     * Get sortorder
     *
     * @return integer 
     */
    public function getSortorder()
    {
        return $this->sortorder;
    }

    /**
     * Set hidden
     *
     * @param integer $hidden
     * @return MdlGradeItemsHistory
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
     * @return MdlGradeItemsHistory
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
     * @return MdlGradeItemsHistory
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
     * Set needsupdate
     *
     * @param integer $needsupdate
     * @return MdlGradeItemsHistory
     */
    public function setNeedsupdate($needsupdate)
    {
        $this->needsupdate = $needsupdate;

        return $this;
    }

    /**
     * Get needsupdate
     *
     * @return integer 
     */
    public function getNeedsupdate()
    {
        return $this->needsupdate;
    }

    /**
     * Set display
     *
     * @param integer $display
     * @return MdlGradeItemsHistory
     */
    public function setDisplay($display)
    {
        $this->display = $display;

        return $this;
    }

    /**
     * Get display
     *
     * @return integer 
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Set decimals
     *
     * @param boolean $decimals
     * @return MdlGradeItemsHistory
     */
    public function setDecimals($decimals)
    {
        $this->decimals = $decimals;

        return $this;
    }

    /**
     * Get decimals
     *
     * @return boolean 
     */
    public function getDecimals()
    {
        return $this->decimals;
    }
}
