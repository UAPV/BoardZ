<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlFeedbackValue
 *
 * @ORM\Table(name="mdl_feedback_value", indexes={@ORM\Index(name="mdl_feedvalu_cou_ix", columns={"course_id"}), @ORM\Index(name="mdl_feedvalu_ite_ix", columns={"item"})})
 * @ORM\Entity
 */
class MdlFeedbackValue
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
     * @ORM\Column(name="course_id", type="bigint", nullable=false)
     */
    private $courseId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item", type="bigint", nullable=false)
     */
    private $item = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="completed", type="bigint", nullable=false)
     */
    private $completed = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tmp_completed", type="bigint", nullable=false)
     */
    private $tmpCompleted = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=false)
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
     * Set courseId
     *
     * @param integer $courseId
     * @return MdlFeedbackValue
     */
    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;

        return $this;
    }

    /**
     * Get courseId
     *
     * @return integer 
     */
    public function getCourseId()
    {
        return $this->courseId;
    }

    /**
     * Set item
     *
     * @param integer $item
     * @return MdlFeedbackValue
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return integer 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set completed
     *
     * @param integer $completed
     * @return MdlFeedbackValue
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;

        return $this;
    }

    /**
     * Get completed
     *
     * @return integer 
     */
    public function getCompleted()
    {
        return $this->completed;
    }

    /**
     * Set tmpCompleted
     *
     * @param integer $tmpCompleted
     * @return MdlFeedbackValue
     */
    public function setTmpCompleted($tmpCompleted)
    {
        $this->tmpCompleted = $tmpCompleted;

        return $this;
    }

    /**
     * Get tmpCompleted
     *
     * @return integer 
     */
    public function getTmpCompleted()
    {
        return $this->tmpCompleted;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return MdlFeedbackValue
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
