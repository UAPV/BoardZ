<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLtiSubmission
 *
 * @ORM\Table(name="mdl_lti_submission", indexes={@ORM\Index(name="mdl_ltisubm_lti_ix", columns={"ltiid"})})
 * @ORM\Entity
 */
class MdlLtiSubmission
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
     * @ORM\Column(name="ltiid", type="bigint", nullable=false)
     */
    private $ltiid;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="datesubmitted", type="bigint", nullable=false)
     */
    private $datesubmitted;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateupdated", type="bigint", nullable=false)
     */
    private $dateupdated;

    /**
     * @var string
     *
     * @ORM\Column(name="gradepercent", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $gradepercent;

    /**
     * @var string
     *
     * @ORM\Column(name="originalgrade", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $originalgrade;

    /**
     * @var integer
     *
     * @ORM\Column(name="launchid", type="bigint", nullable=false)
     */
    private $launchid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state;



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
     * Set ltiid
     *
     * @param integer $ltiid
     * @return MdlLtiSubmission
     */
    public function setLtiid($ltiid)
    {
        $this->ltiid = $ltiid;

        return $this;
    }

    /**
     * Get ltiid
     *
     * @return integer 
     */
    public function getLtiid()
    {
        return $this->ltiid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlLtiSubmission
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
     * Set datesubmitted
     *
     * @param integer $datesubmitted
     * @return MdlLtiSubmission
     */
    public function setDatesubmitted($datesubmitted)
    {
        $this->datesubmitted = $datesubmitted;

        return $this;
    }

    /**
     * Get datesubmitted
     *
     * @return integer 
     */
    public function getDatesubmitted()
    {
        return $this->datesubmitted;
    }

    /**
     * Set dateupdated
     *
     * @param integer $dateupdated
     * @return MdlLtiSubmission
     */
    public function setDateupdated($dateupdated)
    {
        $this->dateupdated = $dateupdated;

        return $this;
    }

    /**
     * Get dateupdated
     *
     * @return integer 
     */
    public function getDateupdated()
    {
        return $this->dateupdated;
    }

    /**
     * Set gradepercent
     *
     * @param string $gradepercent
     * @return MdlLtiSubmission
     */
    public function setGradepercent($gradepercent)
    {
        $this->gradepercent = $gradepercent;

        return $this;
    }

    /**
     * Get gradepercent
     *
     * @return string 
     */
    public function getGradepercent()
    {
        return $this->gradepercent;
    }

    /**
     * Set originalgrade
     *
     * @param string $originalgrade
     * @return MdlLtiSubmission
     */
    public function setOriginalgrade($originalgrade)
    {
        $this->originalgrade = $originalgrade;

        return $this;
    }

    /**
     * Get originalgrade
     *
     * @return string 
     */
    public function getOriginalgrade()
    {
        return $this->originalgrade;
    }

    /**
     * Set launchid
     *
     * @param integer $launchid
     * @return MdlLtiSubmission
     */
    public function setLaunchid($launchid)
    {
        $this->launchid = $launchid;

        return $this;
    }

    /**
     * Get launchid
     *
     * @return integer 
     */
    public function getLaunchid()
    {
        return $this->launchid;
    }

    /**
     * Set state
     *
     * @param boolean $state
     * @return MdlLtiSubmission
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return boolean 
     */
    public function getState()
    {
        return $this->state;
    }
}
