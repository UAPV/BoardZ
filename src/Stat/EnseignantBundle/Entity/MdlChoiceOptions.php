<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlChoiceOptions
 *
 * @ORM\Table(name="mdl_choice_options", indexes={@ORM\Index(name="mdl_choiopti_cho_ix", columns={"choiceid"})})
 * @ORM\Entity
 */
class MdlChoiceOptions
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
     * @ORM\Column(name="choiceid", type="bigint", nullable=false)
     */
    private $choiceid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    private $text;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxanswers", type="bigint", nullable=true)
     */
    private $maxanswers = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';



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
     * Set choiceid
     *
     * @param integer $choiceid
     * @return MdlChoiceOptions
     */
    public function setChoiceid($choiceid)
    {
        $this->choiceid = $choiceid;

        return $this;
    }

    /**
     * Get choiceid
     *
     * @return integer 
     */
    public function getChoiceid()
    {
        return $this->choiceid;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return MdlChoiceOptions
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
     * Set maxanswers
     *
     * @param integer $maxanswers
     * @return MdlChoiceOptions
     */
    public function setMaxanswers($maxanswers)
    {
        $this->maxanswers = $maxanswers;

        return $this;
    }

    /**
     * Get maxanswers
     *
     * @return integer 
     */
    public function getMaxanswers()
    {
        return $this->maxanswers;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlChoiceOptions
     */
    public function setTimemodified($timemodified)
    {
        $this->timemodified = $timemodified;

        return $this;
    }

    /**
     * Get timemodified
     *
     * @return integer 
     */
    public function getTimemodified()
    {
        return $this->timemodified;
    }
}
