<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignment
 *
 * @ORM\Table(name="mdl_assignment", indexes={@ORM\Index(name="mdl_assi_cou2_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlAssignment
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="intro", type="text", nullable=false)
     */
    private $intro;

    /**
     * @var integer
     *
     * @ORM\Column(name="introformat", type="smallint", nullable=false)
     */
    private $introformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="assignmenttype", type="string", length=50, nullable=false)
     */
    private $assignmenttype = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="resubmit", type="boolean", nullable=false)
     */
    private $resubmit = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="preventlate", type="boolean", nullable=false)
     */
    private $preventlate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="emailteachers", type="boolean", nullable=false)
     */
    private $emailteachers = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="var1", type="bigint", nullable=true)
     */
    private $var1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="var2", type="bigint", nullable=true)
     */
    private $var2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="var3", type="bigint", nullable=true)
     */
    private $var3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="var4", type="bigint", nullable=true)
     */
    private $var4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="var5", type="bigint", nullable=true)
     */
    private $var5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxbytes", type="bigint", nullable=false)
     */
    private $maxbytes = '100000';

    /**
     * @var integer
     *
     * @ORM\Column(name="timedue", type="bigint", nullable=false)
     */
    private $timedue = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timeavailable", type="bigint", nullable=false)
     */
    private $timeavailable = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="grade", type="bigint", nullable=false)
     */
    private $grade = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';



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
     * @return MdlAssignment
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
     * Set name
     *
     * @param string $name
     * @return MdlAssignment
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set intro
     *
     * @param string $intro
     * @return MdlAssignment
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Get intro
     *
     * @return string 
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * Set introformat
     *
     * @param integer $introformat
     * @return MdlAssignment
     */
    public function setIntroformat($introformat)
    {
        $this->introformat = $introformat;

        return $this;
    }

    /**
     * Get introformat
     *
     * @return integer 
     */
    public function getIntroformat()
    {
        return $this->introformat;
    }

    /**
     * Set assignmenttype
     *
     * @param string $assignmenttype
     * @return MdlAssignment
     */
    public function setAssignmenttype($assignmenttype)
    {
        $this->assignmenttype = $assignmenttype;

        return $this;
    }

    /**
     * Get assignmenttype
     *
     * @return string 
     */
    public function getAssignmenttype()
    {
        return $this->assignmenttype;
    }

    /**
     * Set resubmit
     *
     * @param boolean $resubmit
     * @return MdlAssignment
     */
    public function setResubmit($resubmit)
    {
        $this->resubmit = $resubmit;

        return $this;
    }

    /**
     * Get resubmit
     *
     * @return boolean 
     */
    public function getResubmit()
    {
        return $this->resubmit;
    }

    /**
     * Set preventlate
     *
     * @param boolean $preventlate
     * @return MdlAssignment
     */
    public function setPreventlate($preventlate)
    {
        $this->preventlate = $preventlate;

        return $this;
    }

    /**
     * Get preventlate
     *
     * @return boolean 
     */
    public function getPreventlate()
    {
        return $this->preventlate;
    }

    /**
     * Set emailteachers
     *
     * @param boolean $emailteachers
     * @return MdlAssignment
     */
    public function setEmailteachers($emailteachers)
    {
        $this->emailteachers = $emailteachers;

        return $this;
    }

    /**
     * Get emailteachers
     *
     * @return boolean 
     */
    public function getEmailteachers()
    {
        return $this->emailteachers;
    }

    /**
     * Set var1
     *
     * @param integer $var1
     * @return MdlAssignment
     */
    public function setVar1($var1)
    {
        $this->var1 = $var1;

        return $this;
    }

    /**
     * Get var1
     *
     * @return integer 
     */
    public function getVar1()
    {
        return $this->var1;
    }

    /**
     * Set var2
     *
     * @param integer $var2
     * @return MdlAssignment
     */
    public function setVar2($var2)
    {
        $this->var2 = $var2;

        return $this;
    }

    /**
     * Get var2
     *
     * @return integer 
     */
    public function getVar2()
    {
        return $this->var2;
    }

    /**
     * Set var3
     *
     * @param integer $var3
     * @return MdlAssignment
     */
    public function setVar3($var3)
    {
        $this->var3 = $var3;

        return $this;
    }

    /**
     * Get var3
     *
     * @return integer 
     */
    public function getVar3()
    {
        return $this->var3;
    }

    /**
     * Set var4
     *
     * @param integer $var4
     * @return MdlAssignment
     */
    public function setVar4($var4)
    {
        $this->var4 = $var4;

        return $this;
    }

    /**
     * Get var4
     *
     * @return integer 
     */
    public function getVar4()
    {
        return $this->var4;
    }

    /**
     * Set var5
     *
     * @param integer $var5
     * @return MdlAssignment
     */
    public function setVar5($var5)
    {
        $this->var5 = $var5;

        return $this;
    }

    /**
     * Get var5
     *
     * @return integer 
     */
    public function getVar5()
    {
        return $this->var5;
    }

    /**
     * Set maxbytes
     *
     * @param integer $maxbytes
     * @return MdlAssignment
     */
    public function setMaxbytes($maxbytes)
    {
        $this->maxbytes = $maxbytes;

        return $this;
    }

    /**
     * Get maxbytes
     *
     * @return integer 
     */
    public function getMaxbytes()
    {
        return $this->maxbytes;
    }

    /**
     * Set timedue
     *
     * @param integer $timedue
     * @return MdlAssignment
     */
    public function setTimedue($timedue)
    {
        $this->timedue = $timedue;

        return $this;
    }

    /**
     * Get timedue
     *
     * @return integer 
     */
    public function getTimedue()
    {
        return $this->timedue;
    }

    /**
     * Set timeavailable
     *
     * @param integer $timeavailable
     * @return MdlAssignment
     */
    public function setTimeavailable($timeavailable)
    {
        $this->timeavailable = $timeavailable;

        return $this;
    }

    /**
     * Get timeavailable
     *
     * @return integer 
     */
    public function getTimeavailable()
    {
        return $this->timeavailable;
    }

    /**
     * Set grade
     *
     * @param integer $grade
     * @return MdlAssignment
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return integer 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlAssignment
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
