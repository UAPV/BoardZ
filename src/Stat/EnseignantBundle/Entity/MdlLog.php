<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLog
 *
 * @ORM\Table(name="mdl_log", indexes={@ORM\Index(name="mdl_log_coumodact_ix", columns={"course", "module", "action"}), @ORM\Index(name="mdl_log_tim_ix", columns={"time"}), @ORM\Index(name="mdl_log_act_ix", columns={"action"}), @ORM\Index(name="mdl_log_usecou_ix", columns={"userid", "course"}), @ORM\Index(name="mdl_log_cmi_ix", columns={"cmid"})})
 * @ORM\Entity
 */
class MdlLog
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
     * Set time
     *
     * @param integer $time
     * @return MdlLog
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
     * @return MdlLog
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
     * @return MdlLog
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
     * @return MdlLog
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
     * @param string $module
     * @return MdlLog
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
     * @return MdlLog
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
     * @return MdlLog
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
     * @return MdlLog
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
     * @return MdlLog
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
