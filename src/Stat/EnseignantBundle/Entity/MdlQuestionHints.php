<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestionHints
 *
 * @ORM\Table(name="mdl_question_hints", indexes={@ORM\Index(name="mdl_queshint_que_ix", columns={"questionid"})})
 * @ORM\Entity
 */
class MdlQuestionHints
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
     * @ORM\Column(name="questionid", type="bigint", nullable=false)
     */
    private $questionid;

    /**
     * @var string
     *
     * @ORM\Column(name="hint", type="text", nullable=false)
     */
    private $hint;

    /**
     * @var integer
     *
     * @ORM\Column(name="hintformat", type="smallint", nullable=false)
     */
    private $hintformat = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="shownumcorrect", type="boolean", nullable=true)
     */
    private $shownumcorrect;

    /**
     * @var boolean
     *
     * @ORM\Column(name="clearwrong", type="boolean", nullable=true)
     */
    private $clearwrong;

    /**
     * @var string
     *
     * @ORM\Column(name="options", type="string", length=255, nullable=true)
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
     * Set questionid
     *
     * @param integer $questionid
     * @return MdlQuestionHints
     */
    public function setQuestionid($questionid)
    {
        $this->questionid = $questionid;

        return $this;
    }

    /**
     * Get questionid
     *
     * @return integer 
     */
    public function getQuestionid()
    {
        return $this->questionid;
    }

    /**
     * Set hint
     *
     * @param string $hint
     * @return MdlQuestionHints
     */
    public function setHint($hint)
    {
        $this->hint = $hint;

        return $this;
    }

    /**
     * Get hint
     *
     * @return string 
     */
    public function getHint()
    {
        return $this->hint;
    }

    /**
     * Set hintformat
     *
     * @param integer $hintformat
     * @return MdlQuestionHints
     */
    public function setHintformat($hintformat)
    {
        $this->hintformat = $hintformat;

        return $this;
    }

    /**
     * Get hintformat
     *
     * @return integer 
     */
    public function getHintformat()
    {
        return $this->hintformat;
    }

    /**
     * Set shownumcorrect
     *
     * @param boolean $shownumcorrect
     * @return MdlQuestionHints
     */
    public function setShownumcorrect($shownumcorrect)
    {
        $this->shownumcorrect = $shownumcorrect;

        return $this;
    }

    /**
     * Get shownumcorrect
     *
     * @return boolean 
     */
    public function getShownumcorrect()
    {
        return $this->shownumcorrect;
    }

    /**
     * Set clearwrong
     *
     * @param boolean $clearwrong
     * @return MdlQuestionHints
     */
    public function setClearwrong($clearwrong)
    {
        $this->clearwrong = $clearwrong;

        return $this;
    }

    /**
     * Get clearwrong
     *
     * @return boolean 
     */
    public function getClearwrong()
    {
        return $this->clearwrong;
    }

    /**
     * Set options
     *
     * @param string $options
     * @return MdlQuestionHints
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
