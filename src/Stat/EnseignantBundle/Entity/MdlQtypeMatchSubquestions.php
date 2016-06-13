<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQtypeMatchSubquestions
 *
 * @ORM\Table(name="mdl_qtype_match_subquestions", indexes={@ORM\Index(name="mdl_qtypmatcsubq_que_ix", columns={"questionid"})})
 * @ORM\Entity
 */
class MdlQtypeMatchSubquestions
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
    private $questionid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="questiontext", type="text", nullable=false)
     */
    private $questiontext;

    /**
     * @var boolean
     *
     * @ORM\Column(name="questiontextformat", type="boolean", nullable=false)
     */
    private $questiontextformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="answertext", type="string", length=255, nullable=false)
     */
    private $answertext = '';



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
     * @return MdlQtypeMatchSubquestions
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
     * Set questiontext
     *
     * @param string $questiontext
     * @return MdlQtypeMatchSubquestions
     */
    public function setQuestiontext($questiontext)
    {
        $this->questiontext = $questiontext;

        return $this;
    }

    /**
     * Get questiontext
     *
     * @return string 
     */
    public function getQuestiontext()
    {
        return $this->questiontext;
    }

    /**
     * Set questiontextformat
     *
     * @param boolean $questiontextformat
     * @return MdlQtypeMatchSubquestions
     */
    public function setQuestiontextformat($questiontextformat)
    {
        $this->questiontextformat = $questiontextformat;

        return $this;
    }

    /**
     * Get questiontextformat
     *
     * @return boolean 
     */
    public function getQuestiontextformat()
    {
        return $this->questiontextformat;
    }

    /**
     * Set answertext
     *
     * @param string $answertext
     * @return MdlQtypeMatchSubquestions
     */
    public function setAnswertext($answertext)
    {
        $this->answertext = $answertext;

        return $this;
    }

    /**
     * Get answertext
     *
     * @return string 
     */
    public function getAnswertext()
    {
        return $this->answertext;
    }
}
