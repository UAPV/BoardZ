<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlSurveyQuestions
 *
 * @ORM\Table(name="mdl_survey_questions")
 * @ORM\Entity
 */
class MdlSurveyQuestions
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
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255, nullable=false)
     */
    private $text = '';

    /**
     * @var string
     *
     * @ORM\Column(name="shorttext", type="string", length=30, nullable=false)
     */
    private $shorttext = '';

    /**
     * @var string
     *
     * @ORM\Column(name="multi", type="string", length=100, nullable=false)
     */
    private $multi = '';

    /**
     * @var string
     *
     * @ORM\Column(name="intro", type="string", length=50, nullable=false)
     */
    private $intro = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="smallint", nullable=false)
     */
    private $type = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="options", type="text", nullable=true)
     */
    private $options;



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
     * Set text
     *
     * @param string $text
     * @return MdlSurveyQuestions
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set shorttext
     *
     * @param string $shorttext
     * @return MdlSurveyQuestions
     */
    public function setShorttext($shorttext)
    {
        $this->shorttext = $shorttext;

        return $this;
    }

    /**
     * Get shorttext
     *
     * @return string 
     */
    public function getShorttext()
    {
        return $this->shorttext;
    }

    /**
     * Set multi
     *
     * @param string $multi
     * @return MdlSurveyQuestions
     */
    public function setMulti($multi)
    {
        $this->multi = $multi;

        return $this;
    }

    /**
     * Get multi
     *
     * @return string 
     */
    public function getMulti()
    {
        return $this->multi;
    }

    /**
     * Set intro
     *
     * @param string $intro
     * @return MdlSurveyQuestions
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Get intro
     *
     * @return string 
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return MdlSurveyQuestions
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set options
     *
     * @param string $options
     * @return MdlSurveyQuestions
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
