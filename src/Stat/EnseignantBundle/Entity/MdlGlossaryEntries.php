<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGlossaryEntries
 *
 * @ORM\Table(name="mdl_glossary_entries", indexes={@ORM\Index(name="mdl_glosentr_use_ix", columns={"userid"}), @ORM\Index(name="mdl_glosentr_con_ix", columns={"concept"}), @ORM\Index(name="mdl_glosentr_glo_ix", columns={"glossaryid"})})
 * @ORM\Entity
 */
class MdlGlossaryEntries
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
     * @ORM\Column(name="glossaryid", type="bigint", nullable=false)
     */
    private $glossaryid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="concept", type="string", length=255, nullable=false)
     */
    private $concept = '';

    /**
     * @var string
     *
     * @ORM\Column(name="definition", type="text", nullable=false)
     */
    private $definition;

    /**
     * @var boolean
     *
     * @ORM\Column(name="definitionformat", type="boolean", nullable=false)
     */
    private $definitionformat = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="definitiontrust", type="boolean", nullable=false)
     */
    private $definitiontrust = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="attachment", type="string", length=100, nullable=false)
     */
    private $attachment = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="teacherentry", type="boolean", nullable=false)
     */
    private $teacherentry = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sourceglossaryid", type="bigint", nullable=false)
     */
    private $sourceglossaryid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="usedynalink", type="boolean", nullable=false)
     */
    private $usedynalink = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="casesensitive", type="boolean", nullable=false)
     */
    private $casesensitive = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fullmatch", type="boolean", nullable=false)
     */
    private $fullmatch = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="approved", type="boolean", nullable=false)
     */
    private $approved = '1';



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
     * Set glossaryid
     *
     * @param integer $glossaryid
     * @return MdlGlossaryEntries
     */
    public function setGlossaryid($glossaryid)
    {
        $this->glossaryid = $glossaryid;

        return $this;
    }

    /**
     * Get glossaryid
     *
     * @return integer 
     */
    public function getGlossaryid()
    {
        return $this->glossaryid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlGlossaryEntries
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
     * Set concept
     *
     * @param string $concept
     * @return MdlGlossaryEntries
     */
    public function setConcept($concept)
    {
        $this->concept = $concept;

        return $this;
    }

    /**
     * Get concept
     *
     * @return string 
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * Set definition
     *
     * @param string $definition
     * @return MdlGlossaryEntries
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;

        return $this;
    }

    /**
     * Get definition
     *
     * @return string 
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Set definitionformat
     *
     * @param boolean $definitionformat
     * @return MdlGlossaryEntries
     */
    public function setDefinitionformat($definitionformat)
    {
        $this->definitionformat = $definitionformat;

        return $this;
    }

    /**
     * Get definitionformat
     *
     * @return boolean 
     */
    public function getDefinitionformat()
    {
        return $this->definitionformat;
    }

    /**
     * Set definitiontrust
     *
     * @param boolean $definitiontrust
     * @return MdlGlossaryEntries
     */
    public function setDefinitiontrust($definitiontrust)
    {
        $this->definitiontrust = $definitiontrust;

        return $this;
    }

    /**
     * Get definitiontrust
     *
     * @return boolean 
     */
    public function getDefinitiontrust()
    {
        return $this->definitiontrust;
    }

    /**
     * Set attachment
     *
     * @param string $attachment
     * @return MdlGlossaryEntries
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return string 
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlGlossaryEntries
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

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlGlossaryEntries
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
     * Set teacherentry
     *
     * @param boolean $teacherentry
     * @return MdlGlossaryEntries
     */
    public function setTeacherentry($teacherentry)
    {
        $this->teacherentry = $teacherentry;

        return $this;
    }

    /**
     * Get teacherentry
     *
     * @return boolean 
     */
    public function getTeacherentry()
    {
        return $this->teacherentry;
    }

    /**
     * Set sourceglossaryid
     *
     * @param integer $sourceglossaryid
     * @return MdlGlossaryEntries
     */
    public function setSourceglossaryid($sourceglossaryid)
    {
        $this->sourceglossaryid = $sourceglossaryid;

        return $this;
    }

    /**
     * Get sourceglossaryid
     *
     * @return integer 
     */
    public function getSourceglossaryid()
    {
        return $this->sourceglossaryid;
    }

    /**
     * Set usedynalink
     *
     * @param boolean $usedynalink
     * @return MdlGlossaryEntries
     */
    public function setUsedynalink($usedynalink)
    {
        $this->usedynalink = $usedynalink;

        return $this;
    }

    /**
     * Get usedynalink
     *
     * @return boolean 
     */
    public function getUsedynalink()
    {
        return $this->usedynalink;
    }

    /**
     * Set casesensitive
     *
     * @param boolean $casesensitive
     * @return MdlGlossaryEntries
     */
    public function setCasesensitive($casesensitive)
    {
        $this->casesensitive = $casesensitive;

        return $this;
    }

    /**
     * Get casesensitive
     *
     * @return boolean 
     */
    public function getCasesensitive()
    {
        return $this->casesensitive;
    }

    /**
     * Set fullmatch
     *
     * @param boolean $fullmatch
     * @return MdlGlossaryEntries
     */
    public function setFullmatch($fullmatch)
    {
        $this->fullmatch = $fullmatch;

        return $this;
    }

    /**
     * Get fullmatch
     *
     * @return boolean 
     */
    public function getFullmatch()
    {
        return $this->fullmatch;
    }

    /**
     * Set approved
     *
     * @param boolean $approved
     * @return MdlGlossaryEntries
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved
     *
     * @return boolean 
     */
    public function getApproved()
    {
        return $this->approved;
    }
}
