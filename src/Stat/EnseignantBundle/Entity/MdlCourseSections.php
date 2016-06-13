<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseSections
 *
 * @ORM\Table(name="mdl_course_sections", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_coursect_cousec_uix", columns={"course", "section"})})
 * @ORM\Entity
 */
class MdlCourseSections
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
     * @ORM\Column(name="course", type="bigint", nullable=false)
     */
    private $course = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="section", type="bigint", nullable=false)
     */
    private $section = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", nullable=true)
     */
    private $summary;

    /**
     * @var boolean
     *
     * @ORM\Column(name="summaryformat", type="boolean", nullable=false)
     */
    private $summaryformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sequence", type="text", nullable=true)
     */
    private $sequence;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false)
     */
    private $visible = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="availablefrom", type="bigint", nullable=false)
     */
    private $availablefrom = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="availableuntil", type="bigint", nullable=false)
     */
    private $availableuntil = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="showavailability", type="boolean", nullable=false)
     */
    private $showavailability = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groupingid", type="bigint", nullable=false)
     */
    private $groupingid = '0';



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
     * Set course
     *
     * @param integer $course
     * @return MdlCourseSections
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return integer 
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set section
     *
     * @param integer $section
     * @return MdlCourseSections
     */
    public function setSection($section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return integer 
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlCourseSections
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
     * Set summary
     *
     * @param string $summary
     * @return MdlCourseSections
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
     * Set summaryformat
     *
     * @param boolean $summaryformat
     * @return MdlCourseSections
     */
    public function setSummaryformat($summaryformat)
    {
        $this->summaryformat = $summaryformat;

        return $this;
    }

    /**
     * Get summaryformat
     *
     * @return boolean 
     */
    public function getSummaryformat()
    {
        return $this->summaryformat;
    }

    /**
     * Set sequence
     *
     * @param string $sequence
     * @return MdlCourseSections
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return string 
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return MdlCourseSections
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
     * Set availablefrom
     *
     * @param integer $availablefrom
     * @return MdlCourseSections
     */
    public function setAvailablefrom($availablefrom)
    {
        $this->availablefrom = $availablefrom;

        return $this;
    }

    /**
     * Get availablefrom
     *
     * @return integer 
     */
    public function getAvailablefrom()
    {
        return $this->availablefrom;
    }

    /**
     * Set availableuntil
     *
     * @param integer $availableuntil
     * @return MdlCourseSections
     */
    public function setAvailableuntil($availableuntil)
    {
        $this->availableuntil = $availableuntil;

        return $this;
    }

    /**
     * Get availableuntil
     *
     * @return integer 
     */
    public function getAvailableuntil()
    {
        return $this->availableuntil;
    }

    /**
     * Set showavailability
     *
     * @param boolean $showavailability
     * @return MdlCourseSections
     */
    public function setShowavailability($showavailability)
    {
        $this->showavailability = $showavailability;

        return $this;
    }

    /**
     * Get showavailability
     *
     * @return boolean 
     */
    public function getShowavailability()
    {
        return $this->showavailability;
    }

    /**
     * Set groupingid
     *
     * @param integer $groupingid
     * @return MdlCourseSections
     */
    public function setGroupingid($groupingid)
    {
        $this->groupingid = $groupingid;

        return $this;
    }

    /**
     * Get groupingid
     *
     * @return integer 
     */
    public function getGroupingid()
    {
        return $this->groupingid;
    }
}
