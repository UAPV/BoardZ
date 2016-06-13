<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlPlagiarismCompilatioFiles
 *
 * @ORM\Table(name="mdl_plagiarism_compilatio_files", indexes={@ORM\Index(name="mdl_plagcompfile_cm_ix", columns={"cm"}), @ORM\Index(name="mdl_plagcompfile_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlPlagiarismCompilatioFiles
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
     * @ORM\Column(name="cm", type="bigint", nullable=false)
     */
    private $cm = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=255, nullable=false)
     */
    private $identifier = '';

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename = '';

    /**
     * @var string
     *
     * @ORM\Column(name="externalid", type="string", length=255, nullable=true)
     */
    private $externalid;

    /**
     * @var string
     *
     * @ORM\Column(name="reporturl", type="string", length=255, nullable=true)
     */
    private $reporturl;

    /**
     * @var string
     *
     * @ORM\Column(name="statuscode", type="string", length=10, nullable=true)
     */
    private $statuscode;

    /**
     * @var integer
     *
     * @ORM\Column(name="similarityscore", type="integer", nullable=false)
     */
    private $similarityscore = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="attempt", type="integer", nullable=false)
     */
    private $attempt = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="errorresponse", type="text", nullable=true)
     */
    private $errorresponse;

    /**
     * @var integer
     *
     * @ORM\Column(name="timesubmitted", type="bigint", nullable=false)
     */
    private $timesubmitted = '0';



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
     * Set cm
     *
     * @param integer $cm
     * @return MdlPlagiarismCompilatioFiles
     */
    public function setCm($cm)
    {
        $this->cm = $cm;

        return $this;
    }

    /**
     * Get cm
     *
     * @return integer 
     */
    public function getCm()
    {
        return $this->cm;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlPlagiarismCompilatioFiles
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
     * Set identifier
     *
     * @param string $identifier
     * @return MdlPlagiarismCompilatioFiles
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * Get identifier
     *
     * @return string 
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return MdlPlagiarismCompilatioFiles
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set externalid
     *
     * @param string $externalid
     * @return MdlPlagiarismCompilatioFiles
     */
    public function setExternalid($externalid)
    {
        $this->externalid = $externalid;

        return $this;
    }

    /**
     * Get externalid
     *
     * @return string 
     */
    public function getExternalid()
    {
        return $this->externalid;
    }

    /**
     * Set reporturl
     *
     * @param string $reporturl
     * @return MdlPlagiarismCompilatioFiles
     */
    public function setReporturl($reporturl)
    {
        $this->reporturl = $reporturl;

        return $this;
    }

    /**
     * Get reporturl
     *
     * @return string 
     */
    public function getReporturl()
    {
        return $this->reporturl;
    }

    /**
     * Set statuscode
     *
     * @param string $statuscode
     * @return MdlPlagiarismCompilatioFiles
     */
    public function setStatuscode($statuscode)
    {
        $this->statuscode = $statuscode;

        return $this;
    }

    /**
     * Get statuscode
     *
     * @return string 
     */
    public function getStatuscode()
    {
        return $this->statuscode;
    }

    /**
     * Set similarityscore
     *
     * @param integer $similarityscore
     * @return MdlPlagiarismCompilatioFiles
     */
    public function setSimilarityscore($similarityscore)
    {
        $this->similarityscore = $similarityscore;

        return $this;
    }

    /**
     * Get similarityscore
     *
     * @return integer 
     */
    public function getSimilarityscore()
    {
        return $this->similarityscore;
    }

    /**
     * Set attempt
     *
     * @param integer $attempt
     * @return MdlPlagiarismCompilatioFiles
     */
    public function setAttempt($attempt)
    {
        $this->attempt = $attempt;

        return $this;
    }

    /**
     * Get attempt
     *
     * @return integer 
     */
    public function getAttempt()
    {
        return $this->attempt;
    }

    /**
     * Set errorresponse
     *
     * @param string $errorresponse
     * @return MdlPlagiarismCompilatioFiles
     */
    public function setErrorresponse($errorresponse)
    {
        $this->errorresponse = $errorresponse;

        return $this;
    }

    /**
     * Get errorresponse
     *
     * @return string 
     */
    public function getErrorresponse()
    {
        return $this->errorresponse;
    }

    /**
     * Set timesubmitted
     *
     * @param integer $timesubmitted
     * @return MdlPlagiarismCompilatioFiles
     */
    public function setTimesubmitted($timesubmitted)
    {
        $this->timesubmitted = $timesubmitted;

        return $this;
    }

    /**
     * Get timesubmitted
     *
     * @return integer 
     */
    public function getTimesubmitted()
    {
        return $this->timesubmitted;
    }
}
