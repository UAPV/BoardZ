<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCohortMembers
 *
 * @ORM\Table(name="mdl_cohort_members", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_cohomemb_cohuse_uix", columns={"cohortid", "userid"})}, indexes={@ORM\Index(name="mdl_cohomemb_coh_ix", columns={"cohortid"}), @ORM\Index(name="mdl_cohomemb_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlCohortMembers
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
     * @ORM\Column(name="cohortid", type="bigint", nullable=false)
     */
    private $cohortid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timeadded", type="bigint", nullable=false)
     */
    private $timeadded = '0';



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
     * Set cohortid
     *
     * @param integer $cohortid
     * @return MdlCohortMembers
     */
    public function setCohortid($cohortid)
    {
        $this->cohortid = $cohortid;

        return $this;
    }

    /**
     * Get cohortid
     *
     * @return integer 
     */
    public function getCohortid()
    {
        return $this->cohortid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlCohortMembers
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
     * Set timeadded
     *
     * @param integer $timeadded
     * @return MdlCohortMembers
     */
    public function setTimeadded($timeadded)
    {
        $this->timeadded = $timeadded;

        return $this;
    }

    /**
     * Get timeadded
     *
     * @return integer 
     */
    public function getTimeadded()
    {
        return $this->timeadded;
    }
}
