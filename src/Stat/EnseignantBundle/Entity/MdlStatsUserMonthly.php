<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlStatsUserMonthly
 *
 * @ORM\Table(name="mdl_stats_user_monthly", indexes={@ORM\Index(name="mdl_statusermont_cou_ix", columns={"courseid"}), @ORM\Index(name="mdl_statusermont_use_ix", columns={"userid"}), @ORM\Index(name="mdl_statusermont_rol_ix", columns={"roleid"}), @ORM\Index(name="mdl_statusermont_tim_ix", columns={"timeend"})})
 * @ORM\Entity
 */
class MdlStatsUserMonthly
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
     * @var integer
     *
     * @ORM\Column(name="roleid", type="bigint", nullable=false)
     */
    private $roleid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timeend", type="bigint", nullable=false)
     */
    private $timeend = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="statsreads", type="bigint", nullable=false)
     */
    private $statsreads = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="statswrites", type="bigint", nullable=false)
     */
    private $statswrites = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="stattype", type="string", length=30, nullable=false)
     */
    private $stattype = '';



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
     * Set courseid
     *
     * @param integer $courseid
     * @return MdlStatsUserMonthly
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
     * @return MdlStatsUserMonthly
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
     * Set roleid
     *
     * @param integer $roleid
     * @return MdlStatsUserMonthly
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
     * Set timeend
     *
     * @param integer $timeend
     * @return MdlStatsUserMonthly
     */
    public function setTimeend($timeend)
    {
        $this->timeend = $timeend;

        return $this;
    }

    /**
     * Get timeend
     *
     * @return integer 
     */
    public function getTimeend()
    {
        return $this->timeend;
    }

    /**
     * Set statsreads
     *
     * @param integer $statsreads
     * @return MdlStatsUserMonthly
     */
    public function setStatsreads($statsreads)
    {
        $this->statsreads = $statsreads;

        return $this;
    }

    /**
     * Get statsreads
     *
     * @return integer 
     */
    public function getStatsreads()
    {
        return $this->statsreads;
    }

    /**
     * Set statswrites
     *
     * @param integer $statswrites
     * @return MdlStatsUserMonthly
     */
    public function setStatswrites($statswrites)
    {
        $this->statswrites = $statswrites;

        return $this;
    }

    /**
     * Get statswrites
     *
     * @return integer 
     */
    public function getStatswrites()
    {
        return $this->statswrites;
    }

    /**
     * Set stattype
     *
     * @param string $stattype
     * @return MdlStatsUserMonthly
     */
    public function setStattype($stattype)
    {
        $this->stattype = $stattype;

        return $this;
    }

    /**
     * Get stattype
     *
     * @return string 
     */
    public function getStattype()
    {
        return $this->stattype;
    }
}
