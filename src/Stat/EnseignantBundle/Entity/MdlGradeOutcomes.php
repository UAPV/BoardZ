<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradeOutcomes
 *
 * @ORM\Table(name="mdl_grade_outcomes", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_gradoutc_cousho_uix", columns={"courseid", "shortname"})}, indexes={@ORM\Index(name="mdl_gradoutc_cou_ix", columns={"courseid"}), @ORM\Index(name="mdl_gradoutc_sca_ix", columns={"scaleid"}), @ORM\Index(name="mdl_gradoutc_use_ix", columns={"usermodified"})})
 * @ORM\Entity
 */
class MdlGradeOutcomes
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
     * @ORM\Column(name="courseid", type="bigint", nullable=true)
     */
    private $courseid;

    /**
     * @var string
     *
     * @ORM\Column(name="shortname", type="string", length=255, nullable=false)
     */
    private $shortname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="text", nullable=false)
     */
    private $fullname;

    /**
     * @var integer
     *
     * @ORM\Column(name="scaleid", type="bigint", nullable=true)
     */
    private $scaleid;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="descriptionformat", type="boolean", nullable=false)
     */
    private $descriptionformat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=true)
     */
    private $timecreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=true)
     */
    private $timemodified;

    /**
     * @var integer
     *
     * @ORM\Column(name="usermodified", type="bigint", nullable=true)
     */
    private $usermodified;



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
     * @return MdlGradeOutcomes
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
     * Set shortname
     *
     * @param string $shortname
     * @return MdlGradeOutcomes
     */
    public function setShortname($shortname)
    {
        $this->shortname = $shortname;

        return $this;
    }

    /**
     * Get shortname
     *
     * @return string 
     */
    public function getShortname()
    {
        return $this->shortname;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     * @return MdlGradeOutcomes
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set scaleid
     *
     * @param integer $scaleid
     * @return MdlGradeOutcomes
     */
    public function setScaleid($scaleid)
    {
        $this->scaleid = $scaleid;

        return $this;
    }

    /**
     * Get scaleid
     *
     * @return integer 
     */
    public function getScaleid()
    {
        return $this->scaleid;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return MdlGradeOutcomes
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set descriptionformat
     *
     * @param boolean $descriptionformat
     * @return MdlGradeOutcomes
     */
    public function setDescriptionformat($descriptionformat)
    {
        $this->descriptionformat = $descriptionformat;

        return $this;
    }

    /**
     * Get descriptionformat
     *
     * @return boolean 
     */
    public function getDescriptionformat()
    {
        return $this->descriptionformat;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlGradeOutcomes
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
     * @return MdlGradeOutcomes
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
     * Set usermodified
     *
     * @param integer $usermodified
     * @return MdlGradeOutcomes
     */
    public function setUsermodified($usermodified)
    {
        $this->usermodified = $usermodified;

        return $this;
    }

    /**
     * Get usermodified
     *
     * @return integer 
     */
    public function getUsermodified()
    {
        return $this->usermodified;
    }
}
