<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlChoiceAnswers
 *
 * @ORM\Table(name="mdl_choice_answers", indexes={@ORM\Index(name="mdl_choiansw_use_ix", columns={"userid"}), @ORM\Index(name="mdl_choiansw_cho_ix", columns={"choiceid"}), @ORM\Index(name="mdl_choiansw_opt_ix", columns={"optionid"})})
 * @ORM\Entity
 */
class MdlChoiceAnswers
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
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="optionid", type="bigint", nullable=false)
     */
    private $optionid = '0';

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
     * @return MdlChoiceAnswers
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
     * Set userid
     *
     * @param integer $userid
     * @return MdlChoiceAnswers
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set optionid
     *
     * @param integer $optionid
     * @return MdlChoiceAnswers
     */
    public function setOptionid($optionid)
    {
        $this->optionid = $optionid;

        return $this;
    }

    /**
     * Get optionid
     *
     * @return integer 
     */
    public function getOptionid()
    {
        return $this->optionid;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlChoiceAnswers
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
