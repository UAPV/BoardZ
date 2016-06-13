<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlEphorusDocument
 *
 * @ORM\Table(name="mdl_ephorus_document", indexes={@ORM\Index(name="mdl_ephodocu_gui_ix", columns={"guid"}), @ORM\Index(name="mdl_ephodocu_fil_ix", columns={"fileid"})})
 * @ORM\Entity
 */
class MdlEphorusDocument
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
     * @ORM\Column(name="guid", type="string", length=36, nullable=false)
     */
    private $guid = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="fileid", type="bigint", nullable=false)
     */
    private $fileid;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contenthash", type="string", length=55, nullable=false)
     */
    private $contenthash = '';

    /**
     * @var string
     *
     * @ORM\Column(name="student_name", type="string", length=60, nullable=false)
     */
    private $studentName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="student_number", type="string", length=25, nullable=false)
     */
    private $studentNumber = '';

    /**
     * @var string
     *
     * @ORM\Column(name="date_created", type="string", length=25, nullable=true)
     */
    private $dateCreated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="percentage", type="smallint", nullable=true)
     */
    private $percentage = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="duplicate_guid", type="string", length=36, nullable=true)
     */
    private $duplicateGuid;

    /**
     * @var string
     *
     * @ORM\Column(name="duplicate_student_name", type="string", length=60, nullable=true)
     */
    private $duplicateStudentName;

    /**
     * @var string
     *
     * @ORM\Column(name="duplicate_student_number", type="string", length=25, nullable=true)
     */
    private $duplicateStudentNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="error", type="string", length=30, nullable=true)
     */
    private $error;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", nullable=true)
     */
    private $summary;

    /**
     * @var boolean
     *
     * @ORM\Column(name="compressed", type="boolean", nullable=true)
     */
    private $compressed = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false)
     */
    private $visible = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="processtype", type="boolean", nullable=false)
     */
    private $processtype = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="submission", type="bigint", nullable=true)
     */
    private $submission;



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
     * Set guid
     *
     * @param string $guid
     * @return MdlEphorusDocument
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Get guid
     *
     * @return string 
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set fileid
     *
     * @param integer $fileid
     * @return MdlEphorusDocument
     */
    public function setFileid($fileid)
    {
        $this->fileid = $fileid;

        return $this;
    }

    /**
     * Get fileid
     *
     * @return integer 
     */
    public function getFileid()
    {
        return $this->fileid;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return MdlEphorusDocument
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
     * Set contenthash
     *
     * @param string $contenthash
     * @return MdlEphorusDocument
     */
    public function setContenthash($contenthash)
    {
        $this->contenthash = $contenthash;

        return $this;
    }

    /**
     * Get contenthash
     *
     * @return string 
     */
    public function getContenthash()
    {
        return $this->contenthash;
    }

    /**
     * Set studentName
     *
     * @param string $studentName
     * @return MdlEphorusDocument
     */
    public function setStudentName($studentName)
    {
        $this->studentName = $studentName;

        return $this;
    }

    /**
     * Get studentName
     *
     * @return string 
     */
    public function getStudentName()
    {
        return $this->studentName;
    }

    /**
     * Set studentNumber
     *
     * @param string $studentNumber
     * @return MdlEphorusDocument
     */
    public function setStudentNumber($studentNumber)
    {
        $this->studentNumber = $studentNumber;

        return $this;
    }

    /**
     * Get studentNumber
     *
     * @return string 
     */
    public function getStudentNumber()
    {
        return $this->studentNumber;
    }

    /**
     * Set dateCreated
     *
     * @param string $dateCreated
     * @return MdlEphorusDocument
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return string 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set percentage
     *
     * @param integer $percentage
     * @return MdlEphorusDocument
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Get percentage
     *
     * @return integer 
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Set duplicateGuid
     *
     * @param string $duplicateGuid
     * @return MdlEphorusDocument
     */
    public function setDuplicateGuid($duplicateGuid)
    {
        $this->duplicateGuid = $duplicateGuid;

        return $this;
    }

    /**
     * Get duplicateGuid
     *
     * @return string 
     */
    public function getDuplicateGuid()
    {
        return $this->duplicateGuid;
    }

    /**
     * Set duplicateStudentName
     *
     * @param string $duplicateStudentName
     * @return MdlEphorusDocument
     */
    public function setDuplicateStudentName($duplicateStudentName)
    {
        $this->duplicateStudentName = $duplicateStudentName;

        return $this;
    }

    /**
     * Get duplicateStudentName
     *
     * @return string 
     */
    public function getDuplicateStudentName()
    {
        return $this->duplicateStudentName;
    }

    /**
     * Set duplicateStudentNumber
     *
     * @param string $duplicateStudentNumber
     * @return MdlEphorusDocument
     */
    public function setDuplicateStudentNumber($duplicateStudentNumber)
    {
        $this->duplicateStudentNumber = $duplicateStudentNumber;

        return $this;
    }

    /**
     * Get duplicateStudentNumber
     *
     * @return string 
     */
    public function getDuplicateStudentNumber()
    {
        return $this->duplicateStudentNumber;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return MdlEphorusDocument
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set error
     *
     * @param string $error
     * @return MdlEphorusDocument
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get error
     *
     * @return string 
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return MdlEphorusDocument
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set compressed
     *
     * @param boolean $compressed
     * @return MdlEphorusDocument
     */
    public function setCompressed($compressed)
    {
        $this->compressed = $compressed;

        return $this;
    }

    /**
     * Get compressed
     *
     * @return boolean 
     */
    public function getCompressed()
    {
        return $this->compressed;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return MdlEphorusDocument
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set processtype
     *
     * @param boolean $processtype
     * @return MdlEphorusDocument
     */
    public function setProcesstype($processtype)
    {
        $this->processtype = $processtype;

        return $this;
    }

    /**
     * Get processtype
     *
     * @return boolean 
     */
    public function getProcesstype()
    {
        return $this->processtype;
    }

    /**
     * Set submission
     *
     * @param integer $submission
     * @return MdlEphorusDocument
     */
    public function setSubmission($submission)
    {
        $this->submission = $submission;

        return $this;
    }

    /**
     * Get submission
     *
     * @return integer 
     */
    public function getSubmission()
    {
        return $this->submission;
    }
}
