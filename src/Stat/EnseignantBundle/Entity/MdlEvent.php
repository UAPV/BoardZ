<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlEvent
 *
 * @ORM\Table(name="mdl_event", indexes={@ORM\Index(name="mdl_even_cou_ix", columns={"courseid"}), @ORM\Index(name="mdl_even_use_ix", columns={"userid"}), @ORM\Index(name="mdl_even_tim_ix", columns={"timestart"}), @ORM\Index(name="mdl_even_tim2_ix", columns={"timeduration"}), @ORM\Index(name="mdl_even_grocouvisuse_ix", columns={"groupid", "courseid", "visible", "userid"})})
 * @ORM\Entity
 */
class MdlEvent
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
     * @ORM\Column(name="name", type="text", nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="format", type="smallint", nullable=false)
     */
    private $format = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="courseid", type="bigint", nullable=false)
     */
    private $courseid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groupid", type="bigint", nullable=false)
     */
    private $groupid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="repeatid", type="bigint", nullable=false)
     */
    private $repeatid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="modulename", type="string", length=20, nullable=false)
     */
    private $modulename = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="instance", type="bigint", nullable=false)
     */
    private $instance = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="eventtype", type="string", length=20, nullable=false)
     */
    private $eventtype = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="timestart", type="bigint", nullable=false)
     */
    private $timestart = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timeduration", type="bigint", nullable=false)
     */
    private $timeduration = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="visible", type="smallint", nullable=false)
     */
    private $visible = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="uuid", type="string", length=255, nullable=false)
     */
    private $uuid = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="sequence", type="bigint", nullable=false)
     */
    private $sequence = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="subscriptionid", type="bigint", nullable=true)
     */
    private $subscriptionid;



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
     * Set name
     *
     * @param string $name
     * @return MdlEvent
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
     * Set description
     *
     * @param string $description
     * @return MdlEvent
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set format
     *
     * @param integer $format
     * @return MdlEvent
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return integer 
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set courseid
     *
     * @param integer $courseid
     * @return MdlEvent
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
     * Set groupid
     *
     * @param integer $groupid
     * @return MdlEvent
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Get groupid
     *
     * @return integer 
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlEvent
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
     * Set repeatid
     *
     * @param integer $repeatid
     * @return MdlEvent
     */
    public function setRepeatid($repeatid)
    {
        $this->repeatid = $repeatid;

        return $this;
    }

    /**
     * Get repeatid
     *
     * @return integer 
     */
    public function getRepeatid()
    {
        return $this->repeatid;
    }

    /**
     * Set modulename
     *
     * @param string $modulename
     * @return MdlEvent
     */
    public function setModulename($modulename)
    {
        $this->modulename = $modulename;

        return $this;
    }

    /**
     * Get modulename
     *
     * @return string 
     */
    public function getModulename()
    {
        return $this->modulename;
    }

    /**
     * Set instance
     *
     * @param integer $instance
     * @return MdlEvent
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
     * Set eventtype
     *
     * @param string $eventtype
     * @return MdlEvent
     */
    public function setEventtype($eventtype)
    {
        $this->eventtype = $eventtype;

        return $this;
    }

    /**
     * Get eventtype
     *
     * @return string 
     */
    public function getEventtype()
    {
        return $this->eventtype;
    }

    /**
     * Set timestart
     *
     * @param integer $timestart
     * @return MdlEvent
     */
    public function setTimestart($timestart)
    {
        $this->timestart = $timestart;

        return $this;
    }

    /**
     * Get timestart
     *
     * @return integer 
     */
    public function getTimestart()
    {
        return $this->timestart;
    }

    /**
     * Set timeduration
     *
     * @param integer $timeduration
     * @return MdlEvent
     */
    public function setTimeduration($timeduration)
    {
        $this->timeduration = $timeduration;

        return $this;
    }

    /**
     * Get timeduration
     *
     * @return integer 
     */
    public function getTimeduration()
    {
        return $this->timeduration;
    }

    /**
     * Set visible
     *
     * @param integer $visible
     * @return MdlEvent
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return integer 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set uuid
     *
     * @param string $uuid
     * @return MdlEvent
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * Get uuid
     *
     * @return string 
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Set sequence
     *
     * @param integer $sequence
     * @return MdlEvent
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return integer 
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlEvent
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
     * Set subscriptionid
     *
     * @param integer $subscriptionid
     * @return MdlEvent
     */
    public function setSubscriptionid($subscriptionid)
    {
        $this->subscriptionid = $subscriptionid;

        return $this;
    }

    /**
     * Get subscriptionid
     *
     * @return integer 
     */
    public function getSubscriptionid()
    {
        return $this->subscriptionid;
    }
}
