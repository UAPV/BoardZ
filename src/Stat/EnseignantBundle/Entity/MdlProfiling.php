<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlProfiling
 *
 * @ORM\Table(name="mdl_profiling", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_prof_run_uix", columns={"runid"})}, indexes={@ORM\Index(name="mdl_prof_urlrun_ix", columns={"url", "runreference"}), @ORM\Index(name="mdl_prof_timrun_ix", columns={"timecreated", "runreference"})})
 * @ORM\Entity
 */
class MdlProfiling
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
     * @ORM\Column(name="runid", type="string", length=32, nullable=false)
     */
    private $runid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url = '';

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", nullable=false)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalexecutiontime", type="bigint", nullable=false)
     */
    private $totalexecutiontime;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalcputime", type="bigint", nullable=false)
     */
    private $totalcputime;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalcalls", type="bigint", nullable=false)
     */
    private $totalcalls;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalmemory", type="bigint", nullable=false)
     */
    private $totalmemory;

    /**
     * @var boolean
     *
     * @ORM\Column(name="runreference", type="boolean", nullable=false)
     */
    private $runreference = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="runcomment", type="string", length=255, nullable=false)
     */
    private $runcomment = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;



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
     * Set runid
     *
     * @param string $runid
     * @return MdlProfiling
     */
    public function setRunid($runid)
    {
        $this->runid = $runid;

        return $this;
    }

    /**
     * Get runid
     *
     * @return string 
     */
    public function getRunid()
    {
        return $this->runid;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return MdlProfiling
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
     * Set data
     *
     * @param string $data
     * @return MdlProfiling
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set totalexecutiontime
     *
     * @param integer $totalexecutiontime
     * @return MdlProfiling
     */
    public function setTotalexecutiontime($totalexecutiontime)
    {
        $this->totalexecutiontime = $totalexecutiontime;

        return $this;
    }

    /**
     * Get totalexecutiontime
     *
     * @return integer 
     */
    public function getTotalexecutiontime()
    {
        return $this->totalexecutiontime;
    }

    /**
     * Set totalcputime
     *
     * @param integer $totalcputime
     * @return MdlProfiling
     */
    public function setTotalcputime($totalcputime)
    {
        $this->totalcputime = $totalcputime;

        return $this;
    }

    /**
     * Get totalcputime
     *
     * @return integer 
     */
    public function getTotalcputime()
    {
        return $this->totalcputime;
    }

    /**
     * Set totalcalls
     *
     * @param integer $totalcalls
     * @return MdlProfiling
     */
    public function setTotalcalls($totalcalls)
    {
        $this->totalcalls = $totalcalls;

        return $this;
    }

    /**
     * Get totalcalls
     *
     * @return integer 
     */
    public function getTotalcalls()
    {
        return $this->totalcalls;
    }

    /**
     * Set totalmemory
     *
     * @param integer $totalmemory
     * @return MdlProfiling
     */
    public function setTotalmemory($totalmemory)
    {
        $this->totalmemory = $totalmemory;

        return $this;
    }

    /**
     * Get totalmemory
     *
     * @return integer 
     */
    public function getTotalmemory()
    {
        return $this->totalmemory;
    }

    /**
     * Set runreference
     *
     * @param boolean $runreference
     * @return MdlProfiling
     */
    public function setRunreference($runreference)
    {
        $this->runreference = $runreference;

        return $this;
    }

    /**
     * Get runreference
     *
     * @return boolean 
     */
    public function getRunreference()
    {
        return $this->runreference;
    }

    /**
     * Set runcomment
     *
     * @param string $runcomment
     * @return MdlProfiling
     */
    public function setRuncomment($runcomment)
    {
        $this->runcomment = $runcomment;

        return $this;
    }

    /**
     * Get runcomment
     *
     * @return string 
     */
    public function getRuncomment()
    {
        return $this->runcomment;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlProfiling
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
}
