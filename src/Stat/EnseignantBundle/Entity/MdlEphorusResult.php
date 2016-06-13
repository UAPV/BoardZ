<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlEphorusResult
 *
 * @ORM\Table(name="mdl_ephorus_result", indexes={@ORM\Index(name="mdl_ephoresu_doc_ix", columns={"document_guid"})})
 * @ORM\Entity
 */
class MdlEphorusResult
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
     * @ORM\Column(name="guid", type="string", length=36, nullable=true)
     */
    private $guid;

    /**
     * @var string
     *
     * @ORM\Column(name="document_guid", type="string", length=36, nullable=true)
     */
    private $documentGuid;

    /**
     * @var string
     *
     * @ORM\Column(name="original_guid", type="string", length=36, nullable=true)
     */
    private $originalGuid;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="percentage", type="smallint", nullable=true)
     */
    private $percentage = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comparison", type="text", nullable=true)
     */
    private $comparison;

    /**
     * @var boolean
     *
     * @ORM\Column(name="compressed", type="boolean", nullable=true)
     */
    private $compressed = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="student_name", type="string", length=60, nullable=true)
     */
    private $studentName;

    /**
     * @var string
     *
     * @ORM\Column(name="student_number", type="string", length=25, nullable=true)
     */
    private $studentNumber;



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
     * @return MdlEphorusResult
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
     * Set documentGuid
     *
     * @param string $documentGuid
     * @return MdlEphorusResult
     */
    public function setDocumentGuid($documentGuid)
    {
        $this->documentGuid = $documentGuid;

        return $this;
    }

    /**
     * Get documentGuid
     *
     * @return string 
     */
    public function getDocumentGuid()
    {
        return $this->documentGuid;
    }

    /**
     * Set originalGuid
     *
     * @param string $originalGuid
     * @return MdlEphorusResult
     */
    public function setOriginalGuid($originalGuid)
    {
        $this->originalGuid = $originalGuid;

        return $this;
    }

    /**
     * Get originalGuid
     *
     * @return string 
     */
    public function getOriginalGuid()
    {
        return $this->originalGuid;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return MdlEphorusResult
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
     * Set type
     *
     * @param string $type
     * @return MdlEphorusResult
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set percentage
     *
     * @param integer $percentage
     * @return MdlEphorusResult
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
     * Set comparison
     *
     * @param string $comparison
     * @return MdlEphorusResult
     */
    public function setComparison($comparison)
    {
        $this->comparison = $comparison;

        return $this;
    }

    /**
     * Get comparison
     *
     * @return string 
     */
    public function getComparison()
    {
        return $this->comparison;
    }

    /**
     * Set compressed
     *
     * @param boolean $compressed
     * @return MdlEphorusResult
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
     * Set studentName
     *
     * @param string $studentName
     * @return MdlEphorusResult
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
     * @return MdlEphorusResult
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
}
