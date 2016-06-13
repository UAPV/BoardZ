<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQtypeRandomsamatchOptions
 *
 * @ORM\Table(name="mdl_qtype_randomsamatch_options", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_qtyprandopti_que_uix", columns={"questionid"})})
 * @ORM\Entity
 */
class MdlQtypeRandomsamatchOptions
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
     * @var integer
     *
     * @ORM\Column(name="choose", type="bigint", nullable=false)
     */
    private $choose = '4';

    /**
     * @var boolean
     *
     * @ORM\Column(name="subcats", type="boolean", nullable=false)
     */
    private $subcats = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="correctfeedback", type="text", nullable=false)
     */
    private $correctfeedback;

    /**
     * @var boolean
     *
     * @ORM\Column(name="correctfeedbackformat", type="boolean", nullable=false)
     */
    private $correctfeedbackformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="partiallycorrectfeedback", type="text", nullable=false)
     */
    private $partiallycorrectfeedback;

    /**
     * @var boolean
     *
     * @ORM\Column(name="partiallycorrectfeedbackformat", type="boolean", nullable=false)
     */
    private $partiallycorrectfeedbackformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="incorrectfeedback", type="text", nullable=false)
     */
    private $incorrectfeedback;

    /**
     * @var boolean
     *
     * @ORM\Column(name="incorrectfeedbackformat", type="boolean", nullable=false)
     */
    private $incorrectfeedbackformat = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="shownumcorrect", type="boolean", nullable=false)
     */
    private $shownumcorrect = '0';



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
     * @return MdlQtypeRandomsamatchOptions
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
     * Set choose
     *
     * @param integer $choose
     * @return MdlQtypeRandomsamatchOptions
     */
    public function setChoose($choose)
    {
        $this->choose = $choose;

        return $this;
    }

    /**
     * Get choose
     *
     * @return integer 
     */
    public function getChoose()
    {
        return $this->choose;
    }

    /**
     * Set subcats
     *
     * @param boolean $subcats
     * @return MdlQtypeRandomsamatchOptions
     */
    public function setSubcats($subcats)
    {
        $this->subcats = $subcats;

        return $this;
    }

    /**
     * Get subcats
     *
     * @return boolean 
     */
    public function getSubcats()
    {
        return $this->subcats;
    }

    /**
     * Set correctfeedback
     *
     * @param string $correctfeedback
     * @return MdlQtypeRandomsamatchOptions
     */
    public function setCorrectfeedback($correctfeedback)
    {
        $this->correctfeedback = $correctfeedback;

        return $this;
    }

    /**
     * Get correctfeedback
     *
     * @return string 
     */
    public function getCorrectfeedback()
    {
        return $this->correctfeedback;
    }

    /**
     * Set correctfeedbackformat
     *
     * @param boolean $correctfeedbackformat
     * @return MdlQtypeRandomsamatchOptions
     */
    public function setCorrectfeedbackformat($correctfeedbackformat)
    {
        $this->correctfeedbackformat = $correctfeedbackformat;

        return $this;
    }

    /**
     * Get correctfeedbackformat
     *
     * @return boolean 
     */
    public function getCorrectfeedbackformat()
    {
        return $this->correctfeedbackformat;
    }

    /**
     * Set partiallycorrectfeedback
     *
     * @param string $partiallycorrectfeedback
     * @return MdlQtypeRandomsamatchOptions
     */
    public function setPartiallycorrectfeedback($partiallycorrectfeedback)
    {
        $this->partiallycorrectfeedback = $partiallycorrectfeedback;

        return $this;
    }

    /**
     * Get partiallycorrectfeedback
     *
     * @return string 
     */
    public function getPartiallycorrectfeedback()
    {
        return $this->partiallycorrectfeedback;
    }

    /**
     * Set partiallycorrectfeedbackformat
     *
     * @param boolean $partiallycorrectfeedbackformat
     * @return MdlQtypeRandomsamatchOptions
     */
    public function setPartiallycorrectfeedbackformat($partiallycorrectfeedbackformat)
    {
        $this->partiallycorrectfeedbackformat = $partiallycorrectfeedbackformat;

        return $this;
    }

    /**
     * Get partiallycorrectfeedbackformat
     *
     * @return boolean 
     */
    public function getPartiallycorrectfeedbackformat()
    {
        return $this->partiallycorrectfeedbackformat;
    }

    /**
     * Set incorrectfeedback
     *
     * @param string $incorrectfeedback
     * @return MdlQtypeRandomsamatchOptions
     */
    public function setIncorrectfeedback($incorrectfeedback)
    {
        $this->incorrectfeedback = $incorrectfeedback;

        return $this;
    }

    /**
     * Get incorrectfeedback
     *
     * @return string 
     */
    public function getIncorrectfeedback()
    {
        return $this->incorrectfeedback;
    }

    /**
     * Set incorrectfeedbackformat
     *
     * @param boolean $incorrectfeedbackformat
     * @return MdlQtypeRandomsamatchOptions
     */
    public function setIncorrectfeedbackformat($incorrectfeedbackformat)
    {
        $this->incorrectfeedbackformat = $incorrectfeedbackformat;

        return $this;
    }

    /**
     * Get incorrectfeedbackformat
     *
     * @return boolean 
     */
    public function getIncorrectfeedbackformat()
    {
        return $this->incorrectfeedbackformat;
    }

    /**
     * Set shownumcorrect
     *
     * @param boolean $shownumcorrect
     * @return MdlQtypeRandomsamatchOptions
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
}
