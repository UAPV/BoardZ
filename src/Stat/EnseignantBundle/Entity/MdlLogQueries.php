<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLogQueries
 *
 * @ORM\Table(name="mdl_log_queries")
 * @ORM\Entity
 */
class MdlLogQueries
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
     * @ORM\Column(name="qtype", type="integer", nullable=false)
     */
    private $qtype;

    /**
     * @var string
     *
     * @ORM\Column(name="sqltext", type="text", nullable=false)
     */
    private $sqltext;

    /**
     * @var string
     *
     * @ORM\Column(name="sqlparams", type="text", nullable=true)
     */
    private $sqlparams;

    /**
     * @var integer
     *
     * @ORM\Column(name="error", type="integer", nullable=false)
     */
    private $error = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", nullable=true)
     */
    private $info;

    /**
     * @var string
     *
     * @ORM\Column(name="backtrace", type="text", nullable=true)
     */
    private $backtrace;

    /**
     * @var string
     *
     * @ORM\Column(name="exectime", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $exectime;

    /**
     * @var integer
     *
     * @ORM\Column(name="timelogged", type="bigint", nullable=false)
     */
    private $timelogged;



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
     * Set qtype
     *
     * @param integer $qtype
     * @return MdlLogQueries
     */
    public function setQtype($qtype)
    {
        $this->qtype = $qtype;

        return $this;
    }

    /**
     * Get qtype
     *
     * @return integer 
     */
    public function getQtype()
    {
        return $this->qtype;
    }

    /**
     * Set sqltext
     *
     * @param string $sqltext
     * @return MdlLogQueries
     */
    public function setSqltext($sqltext)
    {
        $this->sqltext = $sqltext;

        return $this;
    }

    /**
     * Get sqltext
     *
     * @return string 
     */
    public function getSqltext()
    {
        return $this->sqltext;
    }

    /**
     * Set sqlparams
     *
     * @param string $sqlparams
     * @return MdlLogQueries
     */
    public function setSqlparams($sqlparams)
    {
        $this->sqlparams = $sqlparams;

        return $this;
    }

    /**
     * Get sqlparams
     *
     * @return string 
     */
    public function getSqlparams()
    {
        return $this->sqlparams;
    }

    /**
     * Set error
     *
     * @param integer $error
     * @return MdlLogQueries
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get error
     *
     * @return integer 
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return MdlLogQueries
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

    /**
     * Set backtrace
     *
     * @param string $backtrace
     * @return MdlLogQueries
     */
    public function setBacktrace($backtrace)
    {
        $this->backtrace = $backtrace;

        return $this;
    }

    /**
     * Get backtrace
     *
     * @return string 
     */
    public function getBacktrace()
    {
        return $this->backtrace;
    }

    /**
     * Set exectime
     *
     * @param string $exectime
     * @return MdlLogQueries
     */
    public function setExectime($exectime)
    {
        $this->exectime = $exectime;

        return $this;
    }

    /**
     * Get exectime
     *
     * @return string 
     */
    public function getExectime()
    {
        return $this->exectime;
    }

    /**
     * Set timelogged
     *
     * @param integer $timelogged
     * @return MdlLogQueries
     */
    public function setTimelogged($timelogged)
    {
        $this->timelogged = $timelogged;

        return $this;
    }

    /**
     * Get timelogged
     *
     * @return integer 
     */
    public function getTimelogged()
    {
        return $this->timelogged;
    }
}
