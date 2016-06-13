<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLti
 *
 * @ORM\Table(name="mdl_lti", indexes={@ORM\Index(name="mdl_lti_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlLti
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
     * @ORM\Column(name="intro", type="text", nullable=true)
     */
    private $intro;

    /**
     * @var integer
     *
     * @ORM\Column(name="introformat", type="smallint", nullable=true)
     */
    private $introformat = '0';

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
     * @var integer
     *
     * @ORM\Column(name="typeid", type="bigint", nullable=true)
     */
    private $typeid;

    /**
     * @var string
     *
     * @ORM\Column(name="toolurl", type="text", nullable=false)
     */
    private $toolurl;

    /**
     * @var string
     *
     * @ORM\Column(name="securetoolurl", type="text", nullable=true)
     */
    private $securetoolurl;

    /**
     * @var boolean
     *
     * @ORM\Column(name="instructorchoicesendname", type="boolean", nullable=true)
     */
    private $instructorchoicesendname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="instructorchoicesendemailaddr", type="boolean", nullable=true)
     */
    private $instructorchoicesendemailaddr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="instructorchoiceallowroster", type="boolean", nullable=true)
     */
    private $instructorchoiceallowroster;

    /**
     * @var boolean
     *
     * @ORM\Column(name="instructorchoiceallowsetting", type="boolean", nullable=true)
     */
    private $instructorchoiceallowsetting;

    /**
     * @var string
     *
     * @ORM\Column(name="instructorcustomparameters", type="string", length=255, nullable=true)
     */
    private $instructorcustomparameters;

    /**
     * @var boolean
     *
     * @ORM\Column(name="instructorchoiceacceptgrades", type="boolean", nullable=true)
     */
    private $instructorchoiceacceptgrades;

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $grade = '100.00000';

    /**
     * @var boolean
     *
     * @ORM\Column(name="launchcontainer", type="boolean", nullable=false)
     */
    private $launchcontainer = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="resourcekey", type="string", length=255, nullable=true)
     */
    private $resourcekey;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="debuglaunch", type="boolean", nullable=false)
     */
    private $debuglaunch = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="showtitlelaunch", type="boolean", nullable=false)
     */
    private $showtitlelaunch = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="showdescriptionlaunch", type="boolean", nullable=false)
     */
    private $showdescriptionlaunch = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="servicesalt", type="string", length=40, nullable=true)
     */
    private $servicesalt;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="text", nullable=true)
     */
    private $icon;

    /**
     * @var string
     *
     * @ORM\Column(name="secureicon", type="text", nullable=true)
     */
    private $secureicon;



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
     * @return MdlLti
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
     * @return MdlLti
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
     * @return MdlLti
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
     * @return MdlLti
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
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlLti
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
     * @return MdlLti
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
     * Set typeid
     *
     * @param integer $typeid
     * @return MdlLti
     */
    public function setTypeid($typeid)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get typeid
     *
     * @return integer 
     */
    public function getTypeid()
    {
        return $this->typeid;
    }

    /**
     * Set toolurl
     *
     * @param string $toolurl
     * @return MdlLti
     */
    public function setToolurl($toolurl)
    {
        $this->toolurl = $toolurl;

        return $this;
    }

    /**
     * Get toolurl
     *
     * @return string 
     */
    public function getToolurl()
    {
        return $this->toolurl;
    }

    /**
     * Set securetoolurl
     *
     * @param string $securetoolurl
     * @return MdlLti
     */
    public function setSecuretoolurl($securetoolurl)
    {
        $this->securetoolurl = $securetoolurl;

        return $this;
    }

    /**
     * Get securetoolurl
     *
     * @return string 
     */
    public function getSecuretoolurl()
    {
        return $this->securetoolurl;
    }

    /**
     * Set instructorchoicesendname
     *
     * @param boolean $instructorchoicesendname
     * @return MdlLti
     */
    public function setInstructorchoicesendname($instructorchoicesendname)
    {
        $this->instructorchoicesendname = $instructorchoicesendname;

        return $this;
    }

    /**
     * Get instructorchoicesendname
     *
     * @return boolean 
     */
    public function getInstructorchoicesendname()
    {
        return $this->instructorchoicesendname;
    }

    /**
     * Set instructorchoicesendemailaddr
     *
     * @param boolean $instructorchoicesendemailaddr
     * @return MdlLti
     */
    public function setInstructorchoicesendemailaddr($instructorchoicesendemailaddr)
    {
        $this->instructorchoicesendemailaddr = $instructorchoicesendemailaddr;

        return $this;
    }

    /**
     * Get instructorchoicesendemailaddr
     *
     * @return boolean 
     */
    public function getInstructorchoicesendemailaddr()
    {
        return $this->instructorchoicesendemailaddr;
    }

    /**
     * Set instructorchoiceallowroster
     *
     * @param boolean $instructorchoiceallowroster
     * @return MdlLti
     */
    public function setInstructorchoiceallowroster($instructorchoiceallowroster)
    {
        $this->instructorchoiceallowroster = $instructorchoiceallowroster;

        return $this;
    }

    /**
     * Get instructorchoiceallowroster
     *
     * @return boolean 
     */
    public function getInstructorchoiceallowroster()
    {
        return $this->instructorchoiceallowroster;
    }

    /**
     * Set instructorchoiceallowsetting
     *
     * @param boolean $instructorchoiceallowsetting
     * @return MdlLti
     */
    public function setInstructorchoiceallowsetting($instructorchoiceallowsetting)
    {
        $this->instructorchoiceallowsetting = $instructorchoiceallowsetting;

        return $this;
    }

    /**
     * Get instructorchoiceallowsetting
     *
     * @return boolean 
     */
    public function getInstructorchoiceallowsetting()
    {
        return $this->instructorchoiceallowsetting;
    }

    /**
     * Set instructorcustomparameters
     *
     * @param string $instructorcustomparameters
     * @return MdlLti
     */
    public function setInstructorcustomparameters($instructorcustomparameters)
    {
        $this->instructorcustomparameters = $instructorcustomparameters;

        return $this;
    }

    /**
     * Get instructorcustomparameters
     *
     * @return string 
     */
    public function getInstructorcustomparameters()
    {
        return $this->instructorcustomparameters;
    }

    /**
     * Set instructorchoiceacceptgrades
     *
     * @param boolean $instructorchoiceacceptgrades
     * @return MdlLti
     */
    public function setInstructorchoiceacceptgrades($instructorchoiceacceptgrades)
    {
        $this->instructorchoiceacceptgrades = $instructorchoiceacceptgrades;

        return $this;
    }

    /**
     * Get instructorchoiceacceptgrades
     *
     * @return boolean 
     */
    public function getInstructorchoiceacceptgrades()
    {
        return $this->instructorchoiceacceptgrades;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return MdlLti
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set launchcontainer
     *
     * @param boolean $launchcontainer
     * @return MdlLti
     */
    public function setLaunchcontainer($launchcontainer)
    {
        $this->launchcontainer = $launchcontainer;

        return $this;
    }

    /**
     * Get launchcontainer
     *
     * @return boolean 
     */
    public function getLaunchcontainer()
    {
        return $this->launchcontainer;
    }

    /**
     * Set resourcekey
     *
     * @param string $resourcekey
     * @return MdlLti
     */
    public function setResourcekey($resourcekey)
    {
        $this->resourcekey = $resourcekey;

        return $this;
    }

    /**
     * Get resourcekey
     *
     * @return string 
     */
    public function getResourcekey()
    {
        return $this->resourcekey;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return MdlLti
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
     * Set debuglaunch
     *
     * @param boolean $debuglaunch
     * @return MdlLti
     */
    public function setDebuglaunch($debuglaunch)
    {
        $this->debuglaunch = $debuglaunch;

        return $this;
    }

    /**
     * Get debuglaunch
     *
     * @return boolean 
     */
    public function getDebuglaunch()
    {
        return $this->debuglaunch;
    }

    /**
     * Set showtitlelaunch
     *
     * @param boolean $showtitlelaunch
     * @return MdlLti
     */
    public function setShowtitlelaunch($showtitlelaunch)
    {
        $this->showtitlelaunch = $showtitlelaunch;

        return $this;
    }

    /**
     * Get showtitlelaunch
     *
     * @return boolean 
     */
    public function getShowtitlelaunch()
    {
        return $this->showtitlelaunch;
    }

    /**
     * Set showdescriptionlaunch
     *
     * @param boolean $showdescriptionlaunch
     * @return MdlLti
     */
    public function setShowdescriptionlaunch($showdescriptionlaunch)
    {
        $this->showdescriptionlaunch = $showdescriptionlaunch;

        return $this;
    }

    /**
     * Get showdescriptionlaunch
     *
     * @return boolean 
     */
    public function getShowdescriptionlaunch()
    {
        return $this->showdescriptionlaunch;
    }

    /**
     * Set servicesalt
     *
     * @param string $servicesalt
     * @return MdlLti
     */
    public function setServicesalt($servicesalt)
    {
        $this->servicesalt = $servicesalt;

        return $this;
    }

    /**
     * Get servicesalt
     *
     * @return string 
     */
    public function getServicesalt()
    {
        return $this->servicesalt;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return MdlLti
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string 
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set secureicon
     *
     * @param string $secureicon
     * @return MdlLti
     */
    public function setSecureicon($secureicon)
    {
        $this->secureicon = $secureicon;

        return $this;
    }

    /**
     * Get secureicon
     *
     * @return string 
     */
    public function getSecureicon()
    {
        return $this->secureicon;
    }
}
