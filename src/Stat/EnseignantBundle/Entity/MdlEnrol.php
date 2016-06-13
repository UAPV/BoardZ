<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlEnrol
 *
 * @ORM\Table(name="mdl_enrol", indexes={@ORM\Index(name="mdl_enro_enr_ix", columns={"enrol"}), @ORM\Index(name="mdl_enro_cou_ix", columns={"courseid"})})
 * @ORM\Entity
 */
class MdlEnrol
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
     * @var string
     *
     * @ORM\Column(name="enrol", type="string", length=20, nullable=false)
     */
    private $enrol = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="bigint", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="courseid", type="bigint", nullable=false)
     */
    private $courseid;

    /**
     * @var integer
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="enrolperiod", type="bigint", nullable=true)
     */
    private $enrolperiod = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="enrolstartdate", type="bigint", nullable=true)
     */
    private $enrolstartdate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="enrolenddate", type="bigint", nullable=true)
     */
    private $enrolenddate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="expirynotify", type="boolean", nullable=true)
     */
    private $expirynotify = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="expirythreshold", type="bigint", nullable=true)
     */
    private $expirythreshold = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="notifyall", type="boolean", nullable=true)
     */
    private $notifyall = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="string", length=20, nullable=true)
     */
    private $cost;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=3, nullable=true)
     */
    private $currency;

    /**
     * @var integer
     *
     * @ORM\Column(name="roleid", type="bigint", nullable=true)
     */
    private $roleid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="customint1", type="bigint", nullable=true)
     */
    private $customint1;

    /**
     * @var integer
     *
     * @ORM\Column(name="customint2", type="bigint", nullable=true)
     */
    private $customint2;

    /**
     * @var integer
     *
     * @ORM\Column(name="customint3", type="bigint", nullable=true)
     */
    private $customint3;

    /**
     * @var integer
     *
     * @ORM\Column(name="customint4", type="bigint", nullable=true)
     */
    private $customint4;

    /**
     * @var integer
     *
     * @ORM\Column(name="customint5", type="bigint", nullable=true)
     */
    private $customint5;

    /**
     * @var integer
     *
     * @ORM\Column(name="customint6", type="bigint", nullable=true)
     */
    private $customint6;

    /**
     * @var integer
     *
     * @ORM\Column(name="customint7", type="bigint", nullable=true)
     */
    private $customint7;

    /**
     * @var integer
     *
     * @ORM\Column(name="customint8", type="bigint", nullable=true)
     */
    private $customint8;

    /**
     * @var string
     *
     * @ORM\Column(name="customchar1", type="string", length=255, nullable=true)
     */
    private $customchar1;

    /**
     * @var string
     *
     * @ORM\Column(name="customchar2", type="string", length=255, nullable=true)
     */
    private $customchar2;

    /**
     * @var string
     *
     * @ORM\Column(name="customchar3", type="string", length=1333, nullable=true)
     */
    private $customchar3;

    /**
     * @var string
     *
     * @ORM\Column(name="customdec1", type="decimal", precision=12, scale=7, nullable=true)
     */
    private $customdec1;

    /**
     * @var string
     *
     * @ORM\Column(name="customdec2", type="decimal", precision=12, scale=7, nullable=true)
     */
    private $customdec2;

    /**
     * @var string
     *
     * @ORM\Column(name="customtext1", type="text", nullable=true)
     */
    private $customtext1;

    /**
     * @var string
     *
     * @ORM\Column(name="customtext2", type="text", nullable=true)
     */
    private $customtext2;

    /**
     * @var string
     *
     * @ORM\Column(name="customtext3", type="text", nullable=true)
     */
    private $customtext3;

    /**
     * @var string
     *
     * @ORM\Column(name="customtext4", type="text", nullable=true)
     */
    private $customtext4;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

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
     * Set enrol
     *
     * @param string $enrol
     * @return MdlEnrol
     */
    public function setEnrol($enrol)
    {
        $this->enrol = $enrol;

        return $this;
    }

    /**
     * Get enrol
     *
     * @return string 
     */
    public function getEnrol()
    {
        return $this->enrol;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return MdlEnrol
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set courseid
     *
     * @param integer $courseid
     * @return MdlEnrol
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
     * Set sortorder
     *
     * @param integer $sortorder
     * @return MdlEnrol
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
     * Set name
     *
     * @param string $name
     * @return MdlEnrol
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
     * Set enrolperiod
     *
     * @param integer $enrolperiod
     * @return MdlEnrol
     */
    public function setEnrolperiod($enrolperiod)
    {
        $this->enrolperiod = $enrolperiod;

        return $this;
    }

    /**
     * Get enrolperiod
     *
     * @return integer 
     */
    public function getEnrolperiod()
    {
        return $this->enrolperiod;
    }

    /**
     * Set enrolstartdate
     *
     * @param integer $enrolstartdate
     * @return MdlEnrol
     */
    public function setEnrolstartdate($enrolstartdate)
    {
        $this->enrolstartdate = $enrolstartdate;

        return $this;
    }

    /**
     * Get enrolstartdate
     *
     * @return integer 
     */
    public function getEnrolstartdate()
    {
        return $this->enrolstartdate;
    }

    /**
     * Set enrolenddate
     *
     * @param integer $enrolenddate
     * @return MdlEnrol
     */
    public function setEnrolenddate($enrolenddate)
    {
        $this->enrolenddate = $enrolenddate;

        return $this;
    }

    /**
     * Get enrolenddate
     *
     * @return integer 
     */
    public function getEnrolenddate()
    {
        return $this->enrolenddate;
    }

    /**
     * Set expirynotify
     *
     * @param boolean $expirynotify
     * @return MdlEnrol
     */
    public function setExpirynotify($expirynotify)
    {
        $this->expirynotify = $expirynotify;

        return $this;
    }

    /**
     * Get expirynotify
     *
     * @return boolean 
     */
    public function getExpirynotify()
    {
        return $this->expirynotify;
    }

    /**
     * Set expirythreshold
     *
     * @param integer $expirythreshold
     * @return MdlEnrol
     */
    public function setExpirythreshold($expirythreshold)
    {
        $this->expirythreshold = $expirythreshold;

        return $this;
    }

    /**
     * Get expirythreshold
     *
     * @return integer 
     */
    public function getExpirythreshold()
    {
        return $this->expirythreshold;
    }

    /**
     * Set notifyall
     *
     * @param boolean $notifyall
     * @return MdlEnrol
     */
    public function setNotifyall($notifyall)
    {
        $this->notifyall = $notifyall;

        return $this;
    }

    /**
     * Get notifyall
     *
     * @return boolean 
     */
    public function getNotifyall()
    {
        return $this->notifyall;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return MdlEnrol
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set cost
     *
     * @param string $cost
     * @return MdlEnrol
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string 
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return MdlEnrol
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set roleid
     *
     * @param integer $roleid
     * @return MdlEnrol
     */
    public function setRoleid($roleid)
    {
        $this->roleid = $roleid;

        return $this;
    }

    /**
     * Get roleid
     *
     * @return integer 
     */
    public function getRoleid()
    {
        return $this->roleid;
    }

    /**
     * Set customint1
     *
     * @param integer $customint1
     * @return MdlEnrol
     */
    public function setCustomint1($customint1)
    {
        $this->customint1 = $customint1;

        return $this;
    }

    /**
     * Get customint1
     *
     * @return integer 
     */
    public function getCustomint1()
    {
        return $this->customint1;
    }

    /**
     * Set customint2
     *
     * @param integer $customint2
     * @return MdlEnrol
     */
    public function setCustomint2($customint2)
    {
        $this->customint2 = $customint2;

        return $this;
    }

    /**
     * Get customint2
     *
     * @return integer 
     */
    public function getCustomint2()
    {
        return $this->customint2;
    }

    /**
     * Set customint3
     *
     * @param integer $customint3
     * @return MdlEnrol
     */
    public function setCustomint3($customint3)
    {
        $this->customint3 = $customint3;

        return $this;
    }

    /**
     * Get customint3
     *
     * @return integer 
     */
    public function getCustomint3()
    {
        return $this->customint3;
    }

    /**
     * Set customint4
     *
     * @param integer $customint4
     * @return MdlEnrol
     */
    public function setCustomint4($customint4)
    {
        $this->customint4 = $customint4;

        return $this;
    }

    /**
     * Get customint4
     *
     * @return integer 
     */
    public function getCustomint4()
    {
        return $this->customint4;
    }

    /**
     * Set customint5
     *
     * @param integer $customint5
     * @return MdlEnrol
     */
    public function setCustomint5($customint5)
    {
        $this->customint5 = $customint5;

        return $this;
    }

    /**
     * Get customint5
     *
     * @return integer 
     */
    public function getCustomint5()
    {
        return $this->customint5;
    }

    /**
     * Set customint6
     *
     * @param integer $customint6
     * @return MdlEnrol
     */
    public function setCustomint6($customint6)
    {
        $this->customint6 = $customint6;

        return $this;
    }

    /**
     * Get customint6
     *
     * @return integer 
     */
    public function getCustomint6()
    {
        return $this->customint6;
    }

    /**
     * Set customint7
     *
     * @param integer $customint7
     * @return MdlEnrol
     */
    public function setCustomint7($customint7)
    {
        $this->customint7 = $customint7;

        return $this;
    }

    /**
     * Get customint7
     *
     * @return integer 
     */
    public function getCustomint7()
    {
        return $this->customint7;
    }

    /**
     * Set customint8
     *
     * @param integer $customint8
     * @return MdlEnrol
     */
    public function setCustomint8($customint8)
    {
        $this->customint8 = $customint8;

        return $this;
    }

    /**
     * Get customint8
     *
     * @return integer 
     */
    public function getCustomint8()
    {
        return $this->customint8;
    }

    /**
     * Set customchar1
     *
     * @param string $customchar1
     * @return MdlEnrol
     */
    public function setCustomchar1($customchar1)
    {
        $this->customchar1 = $customchar1;

        return $this;
    }

    /**
     * Get customchar1
     *
     * @return string 
     */
    public function getCustomchar1()
    {
        return $this->customchar1;
    }

    /**
     * Set customchar2
     *
     * @param string $customchar2
     * @return MdlEnrol
     */
    public function setCustomchar2($customchar2)
    {
        $this->customchar2 = $customchar2;

        return $this;
    }

    /**
     * Get customchar2
     *
     * @return string 
     */
    public function getCustomchar2()
    {
        return $this->customchar2;
    }

    /**
     * Set customchar3
     *
     * @param string $customchar3
     * @return MdlEnrol
     */
    public function setCustomchar3($customchar3)
    {
        $this->customchar3 = $customchar3;

        return $this;
    }

    /**
     * Get customchar3
     *
     * @return string 
     */
    public function getCustomchar3()
    {
        return $this->customchar3;
    }

    /**
     * Set customdec1
     *
     * @param string $customdec1
     * @return MdlEnrol
     */
    public function setCustomdec1($customdec1)
    {
        $this->customdec1 = $customdec1;

        return $this;
    }

    /**
     * Get customdec1
     *
     * @return string 
     */
    public function getCustomdec1()
    {
        return $this->customdec1;
    }

    /**
     * Set customdec2
     *
     * @param string $customdec2
     * @return MdlEnrol
     */
    public function setCustomdec2($customdec2)
    {
        $this->customdec2 = $customdec2;

        return $this;
    }

    /**
     * Get customdec2
     *
     * @return string 
     */
    public function getCustomdec2()
    {
        return $this->customdec2;
    }

    /**
     * Set customtext1
     *
     * @param string $customtext1
     * @return MdlEnrol
     */
    public function setCustomtext1($customtext1)
    {
        $this->customtext1 = $customtext1;

        return $this;
    }

    /**
     * Get customtext1
     *
     * @return string 
     */
    public function getCustomtext1()
    {
        return $this->customtext1;
    }

    /**
     * Set customtext2
     *
     * @param string $customtext2
     * @return MdlEnrol
     */
    public function setCustomtext2($customtext2)
    {
        $this->customtext2 = $customtext2;

        return $this;
    }

    /**
     * Get customtext2
     *
     * @return string 
     */
    public function getCustomtext2()
    {
        return $this->customtext2;
    }

    /**
     * Set customtext3
     *
     * @param string $customtext3
     * @return MdlEnrol
     */
    public function setCustomtext3($customtext3)
    {
        $this->customtext3 = $customtext3;

        return $this;
    }

    /**
     * Get customtext3
     *
     * @return string 
     */
    public function getCustomtext3()
    {
        return $this->customtext3;
    }

    /**
     * Set customtext4
     *
     * @param string $customtext4
     * @return MdlEnrol
     */
    public function setCustomtext4($customtext4)
    {
        $this->customtext4 = $customtext4;

        return $this;
    }

    /**
     * Get customtext4
     *
     * @return string 
     */
    public function getCustomtext4()
    {
        return $this->customtext4;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlEnrol
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
     * @return MdlEnrol
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
