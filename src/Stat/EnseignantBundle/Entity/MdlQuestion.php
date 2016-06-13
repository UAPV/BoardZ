<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestion
 *
 * @ORM\Table(name="mdl_question", indexes={@ORM\Index(name="mdl_ques_cat_ix", columns={"category"}), @ORM\Index(name="mdl_ques_par_ix", columns={"parent"}), @ORM\Index(name="mdl_ques_cre_ix", columns={"createdby"}), @ORM\Index(name="mdl_ques_mod_ix", columns={"modifiedby"})})
 * @ORM\Entity
 */
class MdlQuestion
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
     * @ORM\Column(name="category", type="bigint", nullable=false)
     */
    private $category = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="parent", type="bigint", nullable=false)
     */
    private $parent = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="questiontext", type="text", nullable=false)
     */
    private $questiontext;

    /**
     * @var boolean
     *
     * @ORM\Column(name="questiontextformat", type="boolean", nullable=false)
     */
    private $questiontextformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="generalfeedback", type="text", nullable=false)
     */
    private $generalfeedback;

    /**
     * @var boolean
     *
     * @ORM\Column(name="generalfeedbackformat", type="boolean", nullable=false)
     */
    private $generalfeedbackformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="defaultmark", type="decimal", precision=12, scale=7, nullable=false)
     */
    private $defaultmark = '1.0000000';

    /**
     * @var string
     *
     * @ORM\Column(name="penalty", type="decimal", precision=12, scale=7, nullable=false)
     */
    private $penalty = '0.3333333';

    /**
     * @var string
     *
     * @ORM\Column(name="qtype", type="string", length=20, nullable=false)
     */
    private $qtype = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="length", type="bigint", nullable=false)
     */
    private $length = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="stamp", type="string", length=255, nullable=false)
     */
    private $stamp = '';

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=255, nullable=false)
     */
    private $version = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=false)
     */
    private $hidden = '0';

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
     * @var integer
     *
     * @ORM\Column(name="createdby", type="bigint", nullable=true)
     */
    private $createdby;

    /**
     * @var integer
     *
     * @ORM\Column(name="modifiedby", type="bigint", nullable=true)
     */
    private $modifiedby;



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
     * Set category
     *
     * @param integer $category
     * @return MdlQuestion
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return integer 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     * @return MdlQuestion
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return integer 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlQuestion
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
     * Set questiontext
     *
     * @param string $questiontext
     * @return MdlQuestion
     */
    public function setQuestiontext($questiontext)
    {
        $this->questiontext = $questiontext;

        return $this;
    }

    /**
     * Get questiontext
     *
     * @return string 
     */
    public function getQuestiontext()
    {
        return $this->questiontext;
    }

    /**
     * Set questiontextformat
     *
     * @param boolean $questiontextformat
     * @return MdlQuestion
     */
    public function setQuestiontextformat($questiontextformat)
    {
        $this->questiontextformat = $questiontextformat;

        return $this;
    }

    /**
     * Get questiontextformat
     *
     * @return boolean 
     */
    public function getQuestiontextformat()
    {
        return $this->questiontextformat;
    }

    /**
     * Set generalfeedback
     *
     * @param string $generalfeedback
     * @return MdlQuestion
     */
    public function setGeneralfeedback($generalfeedback)
    {
        $this->generalfeedback = $generalfeedback;

        return $this;
    }

    /**
     * Get generalfeedback
     *
     * @return string 
     */
    public function getGeneralfeedback()
    {
        return $this->generalfeedback;
    }

    /**
     * Set generalfeedbackformat
     *
     * @param boolean $generalfeedbackformat
     * @return MdlQuestion
     */
    public function setGeneralfeedbackformat($generalfeedbackformat)
    {
        $this->generalfeedbackformat = $generalfeedbackformat;

        return $this;
    }

    /**
     * Get generalfeedbackformat
     *
     * @return boolean 
     */
    public function getGeneralfeedbackformat()
    {
        return $this->generalfeedbackformat;
    }

    /**
     * Set defaultmark
     *
     * @param string $defaultmark
     * @return MdlQuestion
     */
    public function setDefaultmark($defaultmark)
    {
        $this->defaultmark = $defaultmark;

        return $this;
    }

    /**
     * Get defaultmark
     *
     * @return string 
     */
    public function getDefaultmark()
    {
        return $this->defaultmark;
    }

    /**
     * Set penalty
     *
     * @param string $penalty
     * @return MdlQuestion
     */
    public function setPenalty($penalty)
    {
        $this->penalty = $penalty;

        return $this;
    }

    /**
     * Get penalty
     *
     * @return string 
     */
    public function getPenalty()
    {
        return $this->penalty;
    }

    /**
     * Set qtype
     *
     * @param string $qtype
     * @return MdlQuestion
     */
    public function setQtype($qtype)
    {
        $this->qtype = $qtype;

        return $this;
    }

    /**
     * Get qtype
     *
     * @return string 
     */
    public function getQtype()
    {
        return $this->qtype;
    }

    /**
     * Set length
     *
     * @param integer $length
     * @return MdlQuestion
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return integer 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set stamp
     *
     * @param string $stamp
     * @return MdlQuestion
     */
    public function setStamp($stamp)
    {
        $this->stamp = $stamp;

        return $this;
    }

    /**
     * Get stamp
     *
     * @return string 
     */
    public function getStamp()
    {
        return $this->stamp;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return MdlQuestion
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set hidden
     *
     * @param boolean $hidden
     * @return MdlQuestion
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * Get hidden
     *
     * @return boolean 
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlQuestion
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
     * @return MdlQuestion
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
     * Set createdby
     *
     * @param integer $createdby
     * @return MdlQuestion
     */
    public function setCreatedby($createdby)
    {
        $this->createdby = $createdby;

        return $this;
    }

    /**
     * Get createdby
     *
     * @return integer 
     */
    public function getCreatedby()
    {
        return $this->createdby;
    }

    /**
     * Set modifiedby
     *
     * @param integer $modifiedby
     * @return MdlQuestion
     */
    public function setModifiedby($modifiedby)
    {
        $this->modifiedby = $modifiedby;

        return $this;
    }

    /**
     * Get modifiedby
     *
     * @return integer 
     */
    public function getModifiedby()
    {
        return $this->modifiedby;
    }
}
