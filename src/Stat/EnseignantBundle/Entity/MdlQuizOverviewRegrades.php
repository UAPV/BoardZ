<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuizOverviewRegrades
 *
 * @ORM\Table(name="mdl_quiz_overview_regrades")
 * @ORM\Entity
 */
class MdlQuizOverviewRegrades
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
     * @ORM\Column(name="questionusageid", type="bigint", nullable=false)
     */
    private $questionusageid;

    /**
     * @var integer
     *
     * @ORM\Column(name="slot", type="bigint", nullable=false)
     */
    private $slot;

    /**
     * @var string
     *
     * @ORM\Column(name="newfraction", type="decimal", precision=12, scale=7, nullable=true)
     */
    private $newfraction;

    /**
     * @var string
     *
     * @ORM\Column(name="oldfraction", type="decimal", precision=12, scale=7, nullable=true)
     */
    private $oldfraction;

    /**
     * @var integer
     *
     * @ORM\Column(name="regraded", type="smallint", nullable=false)
     */
    private $regraded;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;



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
     * Set questionusageid
     *
     * @param integer $questionusageid
     * @return MdlQuizOverviewRegrades
     */
    public function setQuestionusageid($questionusageid)
    {
        $this->questionusageid = $questionusageid;

        return $this;
    }

    /**
     * Get questionusageid
     *
     * @return integer 
     */
    public function getQuestionusageid()
    {
        return $this->questionusageid;
    }

    /**
     * Set slot
     *
     * @param integer $slot
     * @return MdlQuizOverviewRegrades
     */
    public function setSlot($slot)
    {
        $this->slot = $slot;

        return $this;
    }

    /**
     * Get slot
     *
     * @return integer 
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * Set newfraction
     *
     * @param string $newfraction
     * @return MdlQuizOverviewRegrades
     */
    public function setNewfraction($newfraction)
    {
        $this->newfraction = $newfraction;

        return $this;
    }

    /**
     * Get newfraction
     *
     * @return string 
     */
    public function getNewfraction()
    {
        return $this->newfraction;
    }

    /**
     * Set oldfraction
     *
     * @param string $oldfraction
     * @return MdlQuizOverviewRegrades
     */
    public function setOldfraction($oldfraction)
    {
        $this->oldfraction = $oldfraction;

        return $this;
    }

    /**
     * Get oldfraction
     *
     * @return string 
     */
    public function getOldfraction()
    {
        return $this->oldfraction;
    }

    /**
     * Set regraded
     *
     * @param integer $regraded
     * @return MdlQuizOverviewRegrades
     */
    public function setRegraded($regraded)
    {
        $this->regraded = $regraded;

        return $this;
    }

    /**
     * Get regraded
     *
     * @return integer 
     */
    public function getRegraded()
    {
        return $this->regraded;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlQuizOverviewRegrades
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
