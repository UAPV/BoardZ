<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseSectionsAvailFields
 *
 * @ORM\Table(name="mdl_course_sections_avail_fields", indexes={@ORM\Index(name="mdl_coursectavaifiel_cou_ix", columns={"coursesectionid"})})
 * @ORM\Entity
 */
class MdlCourseSectionsAvailFields
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
     * @ORM\Column(name="coursesectionid", type="bigint", nullable=false)
     */
    private $coursesectionid;

    /**
     * @var string
     *
     * @ORM\Column(name="userfield", type="string", length=50, nullable=true)
     */
    private $userfield;

    /**
     * @var integer
     *
     * @ORM\Column(name="customfieldid", type="bigint", nullable=true)
     */
    private $customfieldid;

    /**
     * @var string
     *
     * @ORM\Column(name="operator", type="string", length=20, nullable=false)
     */
    private $operator = '';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value = '';



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
     * Set coursesectionid
     *
     * @param integer $coursesectionid
     * @return MdlCourseSectionsAvailFields
     */
    public function setCoursesectionid($coursesectionid)
    {
        $this->coursesectionid = $coursesectionid;

        return $this;
    }

    /**
     * Get coursesectionid
     *
     * @return integer 
     */
    public function getCoursesectionid()
    {
        return $this->coursesectionid;
    }

    /**
     * Set userfield
     *
     * @param string $userfield
     * @return MdlCourseSectionsAvailFields
     */
    public function setUserfield($userfield)
    {
        $this->userfield = $userfield;

        return $this;
    }

    /**
     * Get userfield
     *
     * @return string 
     */
    public function getUserfield()
    {
        return $this->userfield;
    }

    /**
     * Set customfieldid
     *
     * @param integer $customfieldid
     * @return MdlCourseSectionsAvailFields
     */
    public function setCustomfieldid($customfieldid)
    {
        $this->customfieldid = $customfieldid;

        return $this;
    }

    /**
     * Get customfieldid
     *
     * @return integer 
     */
    public function getCustomfieldid()
    {
        return $this->customfieldid;
    }

    /**
     * Set operator
     *
     * @param string $operator
     * @return MdlCourseSectionsAvailFields
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * Get operator
     *
     * @return string 
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return MdlCourseSectionsAvailFields
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
