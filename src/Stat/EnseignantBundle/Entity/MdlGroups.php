<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGroups
 *
 * @ORM\Table(name="mdl_groups", indexes={@ORM\Index(name="mdl_grou_idn_ix", columns={"idnumber"}), @ORM\Index(name="mdl_grou_cou_ix", columns={"courseid"})})
 * @ORM\Entity
 */
class MdlGroups
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
     * @ORM\Column(name="courseid", type="bigint", nullable=false)
     */
    private $courseid;

    /**
     * @var string
     *
     * @ORM\Column(name="idnumber", type="string", length=100, nullable=false)
     */
    private $idnumber = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=254, nullable=false)
     */
    private $name = '';

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
     * @var string
     *
     * @ORM\Column(name="enrolmentkey", type="string", length=50, nullable=true)
     */
    private $enrolmentkey;

    /**
     * @var integer
     *
     * @ORM\Column(name="picture", type="bigint", nullable=false)
     */
    private $picture = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="hidepicture", type="boolean", nullable=false)
     */
    private $hidepicture = '0';

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
     * @return MdlGroups
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
     * Set idnumber
     *
     * @param string $idnumber
     * @return MdlGroups
     */
    public function setIdnumber($idnumber)
    {
        $this->idnumber = $idnumber;

        return $this;
    }

    /**
     * Get idnumber
     *
     * @return string 
     */
    public function getIdnumber()
    {
        return $this->idnumber;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlGroups
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
     * Set description
     *
     * @param string $description
     * @return MdlGroups
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
     * @return MdlGroups
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
     * Set enrolmentkey
     *
     * @param string $enrolmentkey
     * @return MdlGroups
     */
    public function setEnrolmentkey($enrolmentkey)
    {
        $this->enrolmentkey = $enrolmentkey;

        return $this;
    }

    /**
     * Get enrolmentkey
     *
     * @return string 
     */
    public function getEnrolmentkey()
    {
        return $this->enrolmentkey;
    }

    /**
     * Set picture
     *
     * @param integer $picture
     * @return MdlGroups
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return integer 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set hidepicture
     *
     * @param boolean $hidepicture
     * @return MdlGroups
     */
    public function setHidepicture($hidepicture)
    {
        $this->hidepicture = $hidepicture;

        return $this;
    }

    /**
     * Get hidepicture
     *
     * @return boolean 
     */
    public function getHidepicture()
    {
        return $this->hidepicture;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlGroups
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
     * @return MdlGroups
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
}
