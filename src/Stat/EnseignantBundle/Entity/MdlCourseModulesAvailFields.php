<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseModulesAvailFields
 *
 * @ORM\Table(name="mdl_course_modules_avail_fields", indexes={@ORM\Index(name="mdl_courmoduavaifiel_cou_ix", columns={"coursemoduleid"})})
 * @ORM\Entity
 */
class MdlCourseModulesAvailFields
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
     * @ORM\Column(name="coursemoduleid", type="bigint", nullable=false)
     */
    private $coursemoduleid;

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
     * Set coursemoduleid
     *
     * @param integer $coursemoduleid
     * @return MdlCourseModulesAvailFields
     */
    public function setCoursemoduleid($coursemoduleid)
    {
        $this->coursemoduleid = $coursemoduleid;

        return $this;
    }

    /**
     * Get coursemoduleid
     *
     * @return integer 
     */
    public function getCoursemoduleid()
    {
        return $this->coursemoduleid;
    }

    /**
     * Set userfield
     *
     * @param string $userfield
     * @return MdlCourseModulesAvailFields
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
     * @return MdlCourseModulesAvailFields
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
     * @return MdlCourseModulesAvailFields
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
     * @return MdlCourseModulesAvailFields
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
