<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlStatsDaily
 *
 * @ORM\Table(name="mdl_stats_daily", indexes={@ORM\Index(name="mdl_statdail_cou_ix", columns={"courseid"}), @ORM\Index(name="mdl_statdail_tim_ix", columns={"timeend"}), @ORM\Index(name="mdl_statdail_rol_ix", columns={"roleid"})})
 * @ORM\Entity
 */
class MdlStatsDaily
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
     * @ORM\Column(name="timeend", type="bigint", nullable=false)
     */
    private $timeend = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="roleid", type="bigint", nullable=false)
     */
    private $roleid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="stattype", type="string", length=20, nullable=false)
     */
    private $stattype = 'activity';

    /**
     * @var integer
     *
     * @ORM\Column(name="stat1", type="bigint", nullable=false)
     */
    private $stat1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="stat2", type="bigint", nullable=false)
     */
    private $stat2 = '0';



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
     * @return MdlStatsDaily
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
     * Set timeend
     *
     * @param integer $timeend
     * @return MdlStatsDaily
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
     * Set roleid
     *
     * @param integer $roleid
     * @return MdlStatsDaily
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
     * Set stattype
     *
     * @param string $stattype
     * @return MdlStatsDaily
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

    /**
     * Set stat1
     *
     * @param integer $stat1
     * @return MdlStatsDaily
     */
    public function setStat1($stat1)
    {
        $this->stat1 = $stat1;

        return $this;
    }

    /**
     * Get stat1
     *
     * @return integer 
     */
    public function getStat1()
    {
        return $this->stat1;
    }

    /**
     * Set stat2
     *
     * @param integer $stat2
     * @return MdlStatsDaily
     */
    public function setStat2($stat2)
    {
        $this->stat2 = $stat2;

        return $this;
    }

    /**
     * Get stat2
     *
     * @return integer 
     */
    public function getStat2()
    {
        return $this->stat2;
    }
}
