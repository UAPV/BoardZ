<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlFeedbackItem
 *
 * @ORM\Table(name="mdl_feedback_item", indexes={@ORM\Index(name="mdl_feeditem_fee_ix", columns={"feedback"}), @ORM\Index(name="mdl_feeditem_tem_ix", columns={"template"})})
 * @ORM\Entity
 */
class MdlFeedbackItem
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
     * @ORM\Column(name="feedback", type="bigint", nullable=false)
     */
    private $feedback = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="template", type="bigint", nullable=false)
     */
    private $template = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label = '';

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="text", nullable=false)
     */
    private $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="typ", type="string", length=255, nullable=false)
     */
    private $typ = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="hasvalue", type="boolean", nullable=false)
     */
    private $hasvalue = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="smallint", nullable=false)
     */
    private $position = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="required", type="boolean", nullable=false)
     */
    private $required = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dependitem", type="bigint", nullable=false)
     */
    private $dependitem = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="dependvalue", type="string", length=255, nullable=false)
     */
    private $dependvalue = '';

    /**
     * @var string
     *
     * @ORM\Column(name="options", type="string", length=255, nullable=false)
     */
    private $options = '';



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
     * Set feedback
     *
     * @param integer $feedback
     * @return MdlFeedbackItem
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * Get feedback
     *
     * @return integer 
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Set template
     *
     * @param integer $template
     * @return MdlFeedbackItem
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return integer 
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlFeedbackItem
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
     * Set label
     *
     * @param string $label
     * @return MdlFeedbackItem
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     * @return MdlFeedbackItem
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string 
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set typ
     *
     * @param string $typ
     * @return MdlFeedbackItem
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;

        return $this;
    }

    /**
     * Get typ
     *
     * @return string 
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Set hasvalue
     *
     * @param boolean $hasvalue
     * @return MdlFeedbackItem
     */
    public function setHasvalue($hasvalue)
    {
        $this->hasvalue = $hasvalue;

        return $this;
    }

    /**
     * Get hasvalue
     *
     * @return boolean 
     */
    public function getHasvalue()
    {
        return $this->hasvalue;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return MdlFeedbackItem
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set required
     *
     * @param boolean $required
     * @return MdlFeedbackItem
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return boolean 
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set dependitem
     *
     * @param integer $dependitem
     * @return MdlFeedbackItem
     */
    public function setDependitem($dependitem)
    {
        $this->dependitem = $dependitem;

        return $this;
    }

    /**
     * Get dependitem
     *
     * @return integer 
     */
    public function getDependitem()
    {
        return $this->dependitem;
    }

    /**
     * Set dependvalue
     *
     * @param string $dependvalue
     * @return MdlFeedbackItem
     */
    public function setDependvalue($dependvalue)
    {
        $this->dependvalue = $dependvalue;

        return $this;
    }

    /**
     * Get dependvalue
     *
     * @return string 
     */
    public function getDependvalue()
    {
        return $this->dependvalue;
    }

    /**
     * Set options
     *
     * @param string $options
     * @return MdlFeedbackItem
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get options
     *
     * @return string 
     */
    public function getOptions()
    {
        return $this->options;
    }
}
