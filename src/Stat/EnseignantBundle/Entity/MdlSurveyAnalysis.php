<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlSurveyAnalysis
 *
 * @ORM\Table(name="mdl_survey_analysis", indexes={@ORM\Index(name="mdl_survanal_use_ix", columns={"userid"}), @ORM\Index(name="mdl_survanal_sur_ix", columns={"survey"})})
 * @ORM\Entity
 */
class MdlSurveyAnalysis
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
     * @ORM\Column(name="survey", type="bigint", nullable=false)
     */
    private $survey = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=false)
     */
    private $notes;



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
     * Set survey
     *
     * @param integer $survey
     * @return MdlSurveyAnalysis
     */
    public function setSurvey($survey)
    {
        $this->survey = $survey;

        return $this;
    }

    /**
     * Get survey
     *
     * @return integer 
     */
    public function getSurvey()
    {
        return $this->survey;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlSurveyAnalysis
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
     * Set notes
     *
     * @param string $notes
     * @return MdlSurveyAnalysis
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }
}
