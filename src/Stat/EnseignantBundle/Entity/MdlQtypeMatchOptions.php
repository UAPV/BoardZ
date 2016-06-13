<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQtypeMatchOptions
 *
 * @ORM\Table(name="mdl_qtype_match_options", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_qtypmatcopti_que_uix", columns={"questionid"})})
 * @ORM\Entity
 */
class MdlQtypeMatchOptions
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
     * @ORM\Column(name="shuffleanswers", type="smallint", nullable=false)
     */
    private $shuffleanswers = '1';

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
     * @return MdlQtypeMatchOptions
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
     * Set shuffleanswers
     *
     * @param integer $shuffleanswers
     * @return MdlQtypeMatchOptions
     */
    public function setShuffleanswers($shuffleanswers)
    {
        $this->shuffleanswers = $shuffleanswers;

        return $this;
    }

    /**
     * Get shuffleanswers
     *
     * @return integer 
     */
    public function getShuffleanswers()
    {
        return $this->shuffleanswers;
    }

    /**
     * Set correctfeedback
     *
     * @param string $correctfeedback
     * @return MdlQtypeMatchOptions
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
     * @return MdlQtypeMatchOptions
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
     * @return MdlQtypeMatchOptions
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
     * @return MdlQtypeMatchOptions
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
     * @return MdlQtypeMatchOptions
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
     * @return MdlQtypeMatchOptions
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
     * @return MdlQtypeMatchOptions
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
