<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseModules
 *
 * @ORM\Table(name="mdl_course_modules", indexes={@ORM\Index(name="mdl_courmodu_vis_ix", columns={"visible"}), @ORM\Index(name="mdl_courmodu_cou_ix", columns={"course"}), @ORM\Index(name="mdl_courmodu_mod_ix", columns={"module"}), @ORM\Index(name="mdl_courmodu_ins_ix", columns={"instance"}), @ORM\Index(name="mdl_courmodu_idncou_ix", columns={"idnumber", "course"}), @ORM\Index(name="mdl_courmodu_gro_ix", columns={"groupingid"})})
 * @ORM\Entity
 */
class MdlCourseModules
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
     * @ORM\Column(name="course", type="bigint", nullable=false)
     */
    private $course = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="module", type="bigint", nullable=false)
     */
    private $module = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="instance", type="bigint", nullable=false)
     */
    private $instance = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="section", type="bigint", nullable=false)
     */
    private $section = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="idnumber", type="string", length=100, nullable=true)
     */
    private $idnumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="added", type="bigint", nullable=false)
     */
    private $added = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="smallint", nullable=false)
     */
    private $score = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="indent", type="integer", nullable=false)
     */
    private $indent = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false)
     */
    private $visible = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="visibleold", type="boolean", nullable=false)
     */
    private $visibleold = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="groupmode", type="smallint", nullable=false)
     */
    private $groupmode = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groupingid", type="bigint", nullable=false)
     */
    private $groupingid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groupmembersonly", type="smallint", nullable=false)
     */
    private $groupmembersonly = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="completion", type="boolean", nullable=false)
     */
    private $completion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="completiongradeitemnumber", type="bigint", nullable=true)
     */
    private $completiongradeitemnumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="completionview", type="boolean", nullable=false)
     */
    private $completionview = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="completionexpected", type="bigint", nullable=false)
     */
    private $completionexpected = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="availablefrom", type="bigint", nullable=false)
     */
    private $availablefrom = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="availableuntil", type="bigint", nullable=false)
     */
    private $availableuntil = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="showavailability", type="boolean", nullable=false)
     */
    private $showavailability = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="showdescription", type="boolean", nullable=false)
     */
    private $showdescription = '0';



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
     * Set course
     *
     * @param integer $course
     * @return MdlCourseModules
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return integer 
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set module
     *
     * @param integer $module
     * @return MdlCourseModules
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return integer 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set instance
     *
     * @param integer $instance
     * @return MdlCourseModules
     */
    public function setInstance($instance)
    {
        $this->instance = $instance;

        return $this;
    }

    /**
     * Get instance
     *
     * @return integer 
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Set section
     *
     * @param integer $section
     * @return MdlCourseModules
     */
    public function setSection($section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return integer 
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set idnumber
     *
     * @param string $idnumber
     * @return MdlCourseModules
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
     * Set added
     *
     * @param integer $added
     * @return MdlCourseModules
     */
    public function setAdded($added)
    {
        $this->added = $added;

        return $this;
    }

    /**
     * Get added
     *
     * @return integer 
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * Set score
     *
     * @param integer $score
     * @return MdlCourseModules
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set indent
     *
     * @param integer $indent
     * @return MdlCourseModules
     */
    public function setIndent($indent)
    {
        $this->indent = $indent;

        return $this;
    }

    /**
     * Get indent
     *
     * @return integer 
     */
    public function getIndent()
    {
        return $this->indent;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return MdlCourseModules
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set visibleold
     *
     * @param boolean $visibleold
     * @return MdlCourseModules
     */
    public function setVisibleold($visibleold)
    {
        $this->visibleold = $visibleold;

        return $this;
    }

    /**
     * Get visibleold
     *
     * @return boolean 
     */
    public function getVisibleold()
    {
        return $this->visibleold;
    }

    /**
     * Set groupmode
     *
     * @param integer $groupmode
     * @return MdlCourseModules
     */
    public function setGroupmode($groupmode)
    {
        $this->groupmode = $groupmode;

        return $this;
    }

    /**
     * Get groupmode
     *
     * @return integer 
     */
    public function getGroupmode()
    {
        return $this->groupmode;
    }

    /**
     * Set groupingid
     *
     * @param integer $groupingid
     * @return MdlCourseModules
     */
    public function setGroupingid($groupingid)
    {
        $this->groupingid = $groupingid;

        return $this;
    }

    /**
     * Get groupingid
     *
     * @return integer 
     */
    public function getGroupingid()
    {
        return $this->groupingid;
    }

    /**
     * Set groupmembersonly
     *
     * @param integer $groupmembersonly
     * @return MdlCourseModules
     */
    public function setGroupmembersonly($groupmembersonly)
    {
        $this->groupmembersonly = $groupmembersonly;

        return $this;
    }

    /**
     * Get groupmembersonly
     *
     * @return integer 
     */
    public function getGroupmembersonly()
    {
        return $this->groupmembersonly;
    }

    /**
     * Set completion
     *
     * @param boolean $completion
     * @return MdlCourseModules
     */
    public function setCompletion($completion)
    {
        $this->completion = $completion;

        return $this;
    }

    /**
     * Get completion
     *
     * @return boolean 
     */
    public function getCompletion()
    {
        return $this->completion;
    }

    /**
     * Set completiongradeitemnumber
     *
     * @param integer $completiongradeitemnumber
     * @return MdlCourseModules
     */
    public function setCompletiongradeitemnumber($completiongradeitemnumber)
    {
        $this->completiongradeitemnumber = $completiongradeitemnumber;

        return $this;
    }

    /**
     * Get completiongradeitemnumber
     *
     * @return integer 
     */
    public function getCompletiongradeitemnumber()
    {
        return $this->completiongradeitemnumber;
    }

    /**
     * Set completionview
     *
     * @param boolean $completionview
     * @return MdlCourseModules
     */
    public function setCompletionview($completionview)
    {
        $this->completionview = $completionview;

        return $this;
    }

    /**
     * Get completionview
     *
     * @return boolean 
     */
    public function getCompletionview()
    {
        return $this->completionview;
    }

    /**
     * Set completionexpected
     *
     * @param integer $completionexpected
     * @return MdlCourseModules
     */
    public function setCompletionexpected($completionexpected)
    {
        $this->completionexpected = $completionexpected;

        return $this;
    }

    /**
     * Get completionexpected
     *
     * @return integer 
     */
    public function getCompletionexpected()
    {
        return $this->completionexpected;
    }

    /**
     * Set availablefrom
     *
     * @param integer $availablefrom
     * @return MdlCourseModules
     */
    public function setAvailablefrom($availablefrom)
    {
        $this->availablefrom = $availablefrom;

        return $this;
    }

    /**
     * Get availablefrom
     *
     * @return integer 
     */
    public function getAvailablefrom()
    {
        return $this->availablefrom;
    }

    /**
     * Set availableuntil
     *
     * @param integer $availableuntil
     * @return MdlCourseModules
     */
    public function setAvailableuntil($availableuntil)
    {
        $this->availableuntil = $availableuntil;

        return $this;
    }

    /**
     * Get availableuntil
     *
     * @return integer 
     */
    public function getAvailableuntil()
    {
        return $this->availableuntil;
    }

    /**
     * Set showavailability
     *
     * @param boolean $showavailability
     * @return MdlCourseModules
     */
    public function setShowavailability($showavailability)
    {
        $this->showavailability = $showavailability;

        return $this;
    }

    /**
     * Get showavailability
     *
     * @return boolean 
     */
    public function getShowavailability()
    {
        return $this->showavailability;
    }

    /**
     * Set showdescription
     *
     * @param boolean $showdescription
     * @return MdlCourseModules
     */
    public function setShowdescription($showdescription)
    {
        $this->showdescription = $showdescription;

        return $this;
    }

    /**
     * Get showdescription
     *
     * @return boolean 
     */
    public function getShowdescription()
    {
        return $this->showdescription;
    }
}
