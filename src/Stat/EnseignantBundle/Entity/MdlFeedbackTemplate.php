<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlFeedbackTemplate
 *
 * @ORM\Table(name="mdl_feedback_template", indexes={@ORM\Index(name="mdl_feedtemp_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlFeedbackTemplate
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
     * @var boolean
     *
     * @ORM\Column(name="ispublic", type="boolean", nullable=false)
     */
    private $ispublic = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';



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
     * @return MdlFeedbackTemplate
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
     * Set ispublic
     *
     * @param boolean $ispublic
     * @return MdlFeedbackTemplate
     */
    public function setIspublic($ispublic)
    {
        $this->ispublic = $ispublic;

        return $this;
    }

    /**
     * Get ispublic
     *
     * @return boolean 
     */
    public function getIspublic()
    {
        return $this->ispublic;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlFeedbackTemplate
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
}
