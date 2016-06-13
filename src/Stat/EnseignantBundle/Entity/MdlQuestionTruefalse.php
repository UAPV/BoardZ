<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestionTruefalse
 *
 * @ORM\Table(name="mdl_question_truefalse", indexes={@ORM\Index(name="mdl_questrue_que_ix", columns={"question"})})
 * @ORM\Entity
 */
class MdlQuestionTruefalse
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
     * @ORM\Column(name="question", type="bigint", nullable=false)
     */
    private $question = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="trueanswer", type="bigint", nullable=false)
     */
    private $trueanswer = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="falseanswer", type="bigint", nullable=false)
     */
    private $falseanswer = '0';



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
     * Set question
     *
     * @param integer $question
     * @return MdlQuestionTruefalse
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return integer 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set trueanswer
     *
     * @param integer $trueanswer
     * @return MdlQuestionTruefalse
     */
    public function setTrueanswer($trueanswer)
    {
        $this->trueanswer = $trueanswer;

        return $this;
    }

    /**
     * Get trueanswer
     *
     * @return integer 
     */
    public function getTrueanswer()
    {
        return $this->trueanswer;
    }

    /**
     * Set falseanswer
     *
     * @param integer $falseanswer
     * @return MdlQuestionTruefalse
     */
    public function setFalseanswer($falseanswer)
    {
        $this->falseanswer = $falseanswer;

        return $this;
    }

    /**
     * Get falseanswer
     *
     * @return integer 
     */
    public function getFalseanswer()
    {
        return $this->falseanswer;
    }
}
