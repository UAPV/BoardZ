<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseFormatOptions
 *
 * @ORM\Table(name="mdl_course_format_options", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_courformopti_couforsec_uix", columns={"courseid", "format", "sectionid", "name"})}, indexes={@ORM\Index(name="mdl_courformopti_cou_ix", columns={"courseid"})})
 * @ORM\Entity
 */
class MdlCourseFormatOptions
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
     * @ORM\Column(name="format", type="string", length=21, nullable=false)
     */
    private $format = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="sectionid", type="bigint", nullable=false)
     */
    private $sectionid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=true)
     */
    private $value;



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
     * @return MdlCourseFormatOptions
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
     * Set format
     *
     * @param string $format
     * @return MdlCourseFormatOptions
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return string 
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set sectionid
     *
     * @param integer $sectionid
     * @return MdlCourseFormatOptions
     */
    public function setSectionid($sectionid)
    {
        $this->sectionid = $sectionid;

        return $this;
    }

    /**
     * Get sectionid
     *
     * @return integer 
     */
    public function getSectionid()
    {
        return $this->sectionid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlCourseFormatOptions
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
     * Set value
     *
     * @param string $value
     * @return MdlCourseFormatOptions
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
}
