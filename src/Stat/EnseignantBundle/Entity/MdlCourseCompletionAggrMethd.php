<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseCompletionAggrMethd
 *
 * @ORM\Table(name="mdl_course_completion_aggr_methd", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_courcompaggrmeth_coucr_uix", columns={"course", "criteriatype"})}, indexes={@ORM\Index(name="mdl_courcompaggrmeth_cou_ix", columns={"course"}), @ORM\Index(name="mdl_courcompaggrmeth_cri_ix", columns={"criteriatype"})})
 * @ORM\Entity
 */
class MdlCourseCompletionAggrMethd
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
     * @ORM\Column(name="criteriatype", type="bigint", nullable=true)
     */
    private $criteriatype;

    /**
     * @var boolean
     *
     * @ORM\Column(name="method", type="boolean", nullable=false)
     */
    private $method = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="decimal", precision=10, scale=5, nullable=true)
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
     * Set course
     *
     * @param integer $course
     * @return MdlCourseCompletionAggrMethd
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
     * Set criteriatype
     *
     * @param integer $criteriatype
     * @return MdlCourseCompletionAggrMethd
     */
    public function setCriteriatype($criteriatype)
    {
        $this->criteriatype = $criteriatype;

        return $this;
    }

    /**
     * Get criteriatype
     *
     * @return integer 
     */
    public function getCriteriatype()
    {
        return $this->criteriatype;
    }

    /**
     * Set method
     *
     * @param boolean $method
     * @return MdlCourseCompletionAggrMethd
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method
     *
     * @return boolean 
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return MdlCourseCompletionAggrMethd
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
