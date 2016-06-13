<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlPortfolioLog
 *
 * @ORM\Table(name="mdl_portfolio_log", indexes={@ORM\Index(name="mdl_portlog_use_ix", columns={"userid"}), @ORM\Index(name="mdl_portlog_por_ix", columns={"portfolio"})})
 * @ORM\Entity
 */
class MdlPortfolioLog
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
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="bigint", nullable=false)
     */
    private $time;

    /**
     * @var integer
     *
     * @ORM\Column(name="portfolio", type="bigint", nullable=false)
     */
    private $portfolio;

    /**
     * @var string
     *
     * @ORM\Column(name="caller_class", type="string", length=150, nullable=false)
     */
    private $callerClass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="caller_file", type="string", length=255, nullable=false)
     */
    private $callerFile = '';

    /**
     * @var string
     *
     * @ORM\Column(name="caller_component", type="string", length=255, nullable=true)
     */
    private $callerComponent;

    /**
     * @var string
     *
     * @ORM\Column(name="caller_sha1", type="string", length=255, nullable=false)
     */
    private $callerSha1 = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="tempdataid", type="bigint", nullable=false)
     */
    private $tempdataid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="returnurl", type="string", length=255, nullable=false)
     */
    private $returnurl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="continueurl", type="string", length=255, nullable=false)
     */
    private $continueurl = '';



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
     * Set userid
     *
     * @param integer $userid
     * @return MdlPortfolioLog
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
     * Set time
     *
     * @param integer $time
     * @return MdlPortfolioLog
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
     * Set portfolio
     *
     * @param integer $portfolio
     * @return MdlPortfolioLog
     */
    public function setPortfolio($portfolio)
    {
        $this->portfolio = $portfolio;

        return $this;
    }

    /**
     * Get portfolio
     *
     * @return integer 
     */
    public function getPortfolio()
    {
        return $this->portfolio;
    }

    /**
     * Set callerClass
     *
     * @param string $callerClass
     * @return MdlPortfolioLog
     */
    public function setCallerClass($callerClass)
    {
        $this->callerClass = $callerClass;

        return $this;
    }

    /**
     * Get callerClass
     *
     * @return string 
     */
    public function getCallerClass()
    {
        return $this->callerClass;
    }

    /**
     * Set callerFile
     *
     * @param string $callerFile
     * @return MdlPortfolioLog
     */
    public function setCallerFile($callerFile)
    {
        $this->callerFile = $callerFile;

        return $this;
    }

    /**
     * Get callerFile
     *
     * @return string 
     */
    public function getCallerFile()
    {
        return $this->callerFile;
    }

    /**
     * Set callerComponent
     *
     * @param string $callerComponent
     * @return MdlPortfolioLog
     */
    public function setCallerComponent($callerComponent)
    {
        $this->callerComponent = $callerComponent;

        return $this;
    }

    /**
     * Get callerComponent
     *
     * @return string 
     */
    public function getCallerComponent()
    {
        return $this->callerComponent;
    }

    /**
     * Set callerSha1
     *
     * @param string $callerSha1
     * @return MdlPortfolioLog
     */
    public function setCallerSha1($callerSha1)
    {
        $this->callerSha1 = $callerSha1;

        return $this;
    }

    /**
     * Get callerSha1
     *
     * @return string 
     */
    public function getCallerSha1()
    {
        return $this->callerSha1;
    }

    /**
     * Set tempdataid
     *
     * @param integer $tempdataid
     * @return MdlPortfolioLog
     */
    public function setTempdataid($tempdataid)
    {
        $this->tempdataid = $tempdataid;

        return $this;
    }

    /**
     * Get tempdataid
     *
     * @return integer 
     */
    public function getTempdataid()
    {
        return $this->tempdataid;
    }

    /**
     * Set returnurl
     *
     * @param string $returnurl
     * @return MdlPortfolioLog
     */
    public function setReturnurl($returnurl)
    {
        $this->returnurl = $returnurl;

        return $this;
    }

    /**
     * Get returnurl
     *
     * @return string 
     */
    public function getReturnurl()
    {
        return $this->returnurl;
    }

    /**
     * Set continueurl
     *
     * @param string $continueurl
     * @return MdlPortfolioLog
     */
    public function setContinueurl($continueurl)
    {
        $this->continueurl = $continueurl;

        return $this;
    }

    /**
     * Get continueurl
     *
     * @return string 
     */
    public function getContinueurl()
    {
        return $this->continueurl;
    }
}
