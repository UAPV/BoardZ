<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlMnetLog
 *
 * @ORM\Table(name="mdl_mnet_log", indexes={@ORM\Index(name="mdl_mnetlog_hosusecou_ix", columns={"hostid", "userid", "course"})})
 * @ORM\Entity
 */
class MdlMnetLog
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
     * @ORM\Column(name="hostid", type="bigint", nullable=false)
     */
    private $hostid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="remoteid", type="bigint", nullable=false)
     */
    private $remoteid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="bigint", nullable=false)
     */
    private $time = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=45, nullable=false)
     */
    private $ip = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="course", type="bigint", nullable=false)
     */
    private $course = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="coursename", type="string", length=40, nullable=false)
     */
    private $coursename = '';

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=20, nullable=false)
     */
    private $module = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="cmid", type="bigint", nullable=false)
     */
    private $cmid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=40, nullable=false)
     */
    private $action = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=100, nullable=false)
     */
    private $url = '';

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="string", length=255, nullable=false)
     */
    private $info = '';



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
     * Set hostid
     *
     * @param integer $hostid
     * @return MdlMnetLog
     */
    public function setHostid($hostid)
    {
        $this->hostid = $hostid;

        return $this;
    }

    /**
     * Get hostid
     *
     * @return integer 
     */
    public function getHostid()
    {
        return $this->hostid;
    }

    /**
     * Set remoteid
     *
     * @param integer $remoteid
     * @return MdlMnetLog
     */
    public function setRemoteid($remoteid)
    {
        $this->remoteid = $remoteid;

        return $this;
    }

    /**
     * Get remoteid
     *
     * @return integer 
     */
    public function getRemoteid()
    {
        return $this->remoteid;
    }

    /**
     * Set time
     *
     * @param integer $time
     * @return MdlMnetLog
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return integer 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlMnetLog
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
     * Set ip
     *
     * @param string $ip
     * @return MdlMnetLog
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set course
     *
     * @param integer $course
     * @return MdlMnetLog
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
     * Set coursename
     *
     * @param string $coursename
     * @return MdlMnetLog
     */
    public function setCoursename($coursename)
    {
        $this->coursename = $coursename;

        return $this;
    }

    /**
     * Get coursename
     *
     * @return string 
     */
    public function getCoursename()
    {
        return $this->coursename;
    }

    /**
     * Set module
     *
     * @param string $module
     * @return MdlMnetLog
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set cmid
     *
     * @param integer $cmid
     * @return MdlMnetLog
     */
    public function setCmid($cmid)
    {
        $this->cmid = $cmid;

        return $this;
    }

    /**
     * Get cmid
     *
     * @return integer 
     */
    public function getCmid()
    {
        return $this->cmid;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return MdlMnetLog
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return MdlMnetLog
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
     * Set info
     *
     * @param string $info
     * @return MdlMnetLog
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }
}
