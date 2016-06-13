<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlEventSubscriptions
 *
 * @ORM\Table(name="mdl_event_subscriptions")
 * @ORM\Entity
 */
class MdlEventSubscriptions
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
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url = '';

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
     * @var string
     *
     * @ORM\Column(name="eventtype", type="string", length=20, nullable=false)
     */
    private $eventtype = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="pollinterval", type="bigint", nullable=false)
     */
    private $pollinterval = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastupdated", type="bigint", nullable=true)
     */
    private $lastupdated;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';



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
     * Set url
     *
     * @param string $url
     * @return MdlEventSubscriptions
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set courseid
     *
     * @param integer $courseid
     * @return MdlEventSubscriptions
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
     * @return MdlEventSubscriptions
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
     * @return MdlEventSubscriptions
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
     * Set eventtype
     *
     * @param string $eventtype
     * @return MdlEventSubscriptions
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
     * Set pollinterval
     *
     * @param integer $pollinterval
     * @return MdlEventSubscriptions
     */
    public function setPollinterval($pollinterval)
    {
        $this->pollinterval = $pollinterval;

        return $this;
    }

    /**
     * Get pollinterval
     *
     * @return integer 
     */
    public function getPollinterval()
    {
        return $this->pollinterval;
    }

    /**
     * Set lastupdated
     *
     * @param integer $lastupdated
     * @return MdlEventSubscriptions
     */
    public function setLastupdated($lastupdated)
    {
        $this->lastupdated = $lastupdated;

        return $this;
    }

    /**
     * Get lastupdated
     *
     * @return integer 
     */
    public function getLastupdated()
    {
        return $this->lastupdated;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlEventSubscriptions
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
}
