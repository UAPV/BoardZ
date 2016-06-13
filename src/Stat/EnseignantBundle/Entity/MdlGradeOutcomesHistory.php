<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradeOutcomesHistory
 *
 * @ORM\Table(name="mdl_grade_outcomes_history", indexes={@ORM\Index(name="mdl_gradoutchist_act_ix", columns={"action"}), @ORM\Index(name="mdl_gradoutchist_old_ix", columns={"oldid"}), @ORM\Index(name="mdl_gradoutchist_cou_ix", columns={"courseid"}), @ORM\Index(name="mdl_gradoutchist_sca_ix", columns={"scaleid"}), @ORM\Index(name="mdl_gradoutchist_log_ix", columns={"loggeduser"})})
 * @ORM\Entity
 */
class MdlGradeOutcomesHistory
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
     * @ORM\Column(name="action", type="bigint", nullable=false)
     */
    private $action = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="oldid", type="bigint", nullable=false)
     */
    private $oldid;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255, nullable=true)
     */
    private $source;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=true)
     */
    private $timemodified;

    /**
     * @var integer
     *
     * @ORM\Column(name="loggeduser", type="bigint", nullable=true)
     */
    private $loggeduser;

    /**
     * @var integer
     *
     * @ORM\Column(name="courseid", type="bigint", nullable=true)
     */
    private $courseid;

    /**
     * @var string
     *
     * @ORM\Column(name="shortname", type="string", length=255, nullable=false)
     */
    private $shortname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="text", nullable=false)
     */
    private $fullname;

    /**
     * @var integer
     *
     * @ORM\Column(name="scaleid", type="bigint", nullable=true)
     */
    private $scaleid;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="descriptionformat", type="boolean", nullable=false)
     */
    private $descriptionformat = '0';



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
     * Set action
     *
     * @param integer $action
     * @return MdlGradeOutcomesHistory
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return integer 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set oldid
     *
     * @param integer $oldid
     * @return MdlGradeOutcomesHistory
     */
    public function setOldid($oldid)
    {
        $this->oldid = $oldid;

        return $this;
    }

    /**
     * Get oldid
     *
     * @return integer 
     */
    public function getOldid()
    {
        return $this->oldid;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return MdlGradeOutcomesHistory
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlGradeOutcomesHistory
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

    /**
     * Set loggeduser
     *
     * @param integer $loggeduser
     * @return MdlGradeOutcomesHistory
     */
    public function setLoggeduser($loggeduser)
    {
        $this->loggeduser = $loggeduser;

        return $this;
    }

    /**
     * Get loggeduser
     *
     * @return integer 
     */
    public function getLoggeduser()
    {
        return $this->loggeduser;
    }

    /**
     * Set courseid
     *
     * @param integer $courseid
     * @return MdlGradeOutcomesHistory
     */
    public function setCourseid($courseid)
    {
        $this->courseid = $courseid;

        return $this;
    }

    /**
     * Get courseid
     *
     * @return integer 
     */
    public function getCourseid()
    {
        return $this->courseid;
    }

    /**
     * Set shortname
     *
     * @param string $shortname
     * @return MdlGradeOutcomesHistory
     */
    public function setShortname($shortname)
    {
        $this->shortname = $shortname;

        return $this;
    }

    /**
     * Get shortname
     *
     * @return string 
     */
    public function getShortname()
    {
        return $this->shortname;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     * @return MdlGradeOutcomesHistory
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set scaleid
     *
     * @param integer $scaleid
     * @return MdlGradeOutcomesHistory
     */
    public function setScaleid($scaleid)
    {
        $this->scaleid = $scaleid;

        return $this;
    }

    /**
     * Get scaleid
     *
     * @return integer 
     */
    public function getScaleid()
    {
        return $this->scaleid;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return MdlGradeOutcomesHistory
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set descriptionformat
     *
     * @param boolean $descriptionformat
     * @return MdlGradeOutcomesHistory
     */
    public function setDescriptionformat($descriptionformat)
    {
        $this->descriptionformat = $descriptionformat;

        return $this;
    }

    /**
     * Get descriptionformat
     *
     * @return boolean 
     */
    public function getDescriptionformat()
    {
        return $this->descriptionformat;
    }
}
