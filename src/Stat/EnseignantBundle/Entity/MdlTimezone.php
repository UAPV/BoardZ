<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlTimezone
 *
 * @ORM\Table(name="mdl_timezone")
 * @ORM\Entity
 */
class MdlTimezone
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
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="bigint", nullable=false)
     */
    private $year = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tzrule", type="string", length=20, nullable=false)
     */
    private $tzrule = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="gmtoff", type="bigint", nullable=false)
     */
    private $gmtoff = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dstoff", type="bigint", nullable=false)
     */
    private $dstoff = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="dst_month", type="boolean", nullable=false)
     */
    private $dstMonth = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dst_startday", type="smallint", nullable=false)
     */
    private $dstStartday = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dst_weekday", type="smallint", nullable=false)
     */
    private $dstWeekday = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dst_skipweeks", type="smallint", nullable=false)
     */
    private $dstSkipweeks = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="dst_time", type="string", length=6, nullable=false)
     */
    private $dstTime = '00:00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="std_month", type="boolean", nullable=false)
     */
    private $stdMonth = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="std_startday", type="smallint", nullable=false)
     */
    private $stdStartday = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="std_weekday", type="smallint", nullable=false)
     */
    private $stdWeekday = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="std_skipweeks", type="smallint", nullable=false)
     */
    private $stdSkipweeks = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="std_time", type="string", length=6, nullable=false)
     */
    private $stdTime = '00:00';



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
     * @return MdlTimezone
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
     * Set year
     *
     * @param integer $year
     * @return MdlTimezone
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set tzrule
     *
     * @param string $tzrule
     * @return MdlTimezone
     */
    public function setTzrule($tzrule)
    {
        $this->tzrule = $tzrule;

        return $this;
    }

    /**
     * Get tzrule
     *
     * @return string 
     */
    public function getTzrule()
    {
        return $this->tzrule;
    }

    /**
     * Set gmtoff
     *
     * @param integer $gmtoff
     * @return MdlTimezone
     */
    public function setGmtoff($gmtoff)
    {
        $this->gmtoff = $gmtoff;

        return $this;
    }

    /**
     * Get gmtoff
     *
     * @return integer 
     */
    public function getGmtoff()
    {
        return $this->gmtoff;
    }

    /**
     * Set dstoff
     *
     * @param integer $dstoff
     * @return MdlTimezone
     */
    public function setDstoff($dstoff)
    {
        $this->dstoff = $dstoff;

        return $this;
    }

    /**
     * Get dstoff
     *
     * @return integer 
     */
    public function getDstoff()
    {
        return $this->dstoff;
    }

    /**
     * Set dstMonth
     *
     * @param boolean $dstMonth
     * @return MdlTimezone
     */
    public function setDstMonth($dstMonth)
    {
        $this->dstMonth = $dstMonth;

        return $this;
    }

    /**
     * Get dstMonth
     *
     * @return boolean 
     */
    public function getDstMonth()
    {
        return $this->dstMonth;
    }

    /**
     * Set dstStartday
     *
     * @param integer $dstStartday
     * @return MdlTimezone
     */
    public function setDstStartday($dstStartday)
    {
        $this->dstStartday = $dstStartday;

        return $this;
    }

    /**
     * Get dstStartday
     *
     * @return integer 
     */
    public function getDstStartday()
    {
        return $this->dstStartday;
    }

    /**
     * Set dstWeekday
     *
     * @param integer $dstWeekday
     * @return MdlTimezone
     */
    public function setDstWeekday($dstWeekday)
    {
        $this->dstWeekday = $dstWeekday;

        return $this;
    }

    /**
     * Get dstWeekday
     *
     * @return integer 
     */
    public function getDstWeekday()
    {
        return $this->dstWeekday;
    }

    /**
     * Set dstSkipweeks
     *
     * @param integer $dstSkipweeks
     * @return MdlTimezone
     */
    public function setDstSkipweeks($dstSkipweeks)
    {
        $this->dstSkipweeks = $dstSkipweeks;

        return $this;
    }

    /**
     * Get dstSkipweeks
     *
     * @return integer 
     */
    public function getDstSkipweeks()
    {
        return $this->dstSkipweeks;
    }

    /**
     * Set dstTime
     *
     * @param string $dstTime
     * @return MdlTimezone
     */
    public function setDstTime($dstTime)
    {
        $this->dstTime = $dstTime;

        return $this;
    }

    /**
     * Get dstTime
     *
     * @return string 
     */
    public function getDstTime()
    {
        return $this->dstTime;
    }

    /**
     * Set stdMonth
     *
     * @param boolean $stdMonth
     * @return MdlTimezone
     */
    public function setStdMonth($stdMonth)
    {
        $this->stdMonth = $stdMonth;

        return $this;
    }

    /**
     * Get stdMonth
     *
     * @return boolean 
     */
    public function getStdMonth()
    {
        return $this->stdMonth;
    }

    /**
     * Set stdStartday
     *
     * @param integer $stdStartday
     * @return MdlTimezone
     */
    public function setStdStartday($stdStartday)
    {
        $this->stdStartday = $stdStartday;

        return $this;
    }

    /**
     * Get stdStartday
     *
     * @return integer 
     */
    public function getStdStartday()
    {
        return $this->stdStartday;
    }

    /**
     * Set stdWeekday
     *
     * @param integer $stdWeekday
     * @return MdlTimezone
     */
    public function setStdWeekday($stdWeekday)
    {
        $this->stdWeekday = $stdWeekday;

        return $this;
    }

    /**
     * Get stdWeekday
     *
     * @return integer 
     */
    public function getStdWeekday()
    {
        return $this->stdWeekday;
    }

    /**
     * Set stdSkipweeks
     *
     * @param integer $stdSkipweeks
     * @return MdlTimezone
     */
    public function setStdSkipweeks($stdSkipweeks)
    {
        $this->stdSkipweeks = $stdSkipweeks;

        return $this;
    }

    /**
     * Get stdSkipweeks
     *
     * @return integer 
     */
    public function getStdSkipweeks()
    {
        return $this->stdSkipweeks;
    }

    /**
     * Set stdTime
     *
     * @param string $stdTime
     * @return MdlTimezone
     */
    public function setStdTime($stdTime)
    {
        $this->stdTime = $stdTime;

        return $this;
    }

    /**
     * Get stdTime
     *
     * @return string 
     */
    public function getStdTime()
    {
        return $this->stdTime;
    }
}
