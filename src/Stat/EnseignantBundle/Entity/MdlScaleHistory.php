<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlScaleHistory
 *
 * @ORM\Table(name="mdl_scale_history", indexes={@ORM\Index(name="mdl_scalhist_act_ix", columns={"action"}), @ORM\Index(name="mdl_scalhist_old_ix", columns={"oldid"}), @ORM\Index(name="mdl_scalhist_cou_ix", columns={"courseid"}), @ORM\Index(name="mdl_scalhist_log_ix", columns={"loggeduser"})})
 * @ORM\Entity
 */
class MdlScaleHistory
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
     * @ORM\Column(name="courseid", type="bigint", nullable=false)
     */
    private $courseid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="scale", type="text", nullable=false)
     */
    private $scale;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;



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
     * @return MdlScaleHistory
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
     * @return MdlScaleHistory
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
     * @return MdlScaleHistory
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
     * @return MdlScaleHistory
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
     * @return MdlScaleHistory
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
     * @return MdlScaleHistory
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
     * Set userid
     *
     * @param integer $userid
     * @return MdlScaleHistory
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
     * Set name
     *
     * @param string $name
     * @return MdlScaleHistory
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
     * Set scale
     *
     * @param string $scale
     * @return MdlScaleHistory
     */
    public function setScale($scale)
    {
        $this->scale = $scale;

        return $this;
    }

    /**
     * Get scale
     *
     * @return string 
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return MdlScaleHistory
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
}
