<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradeOutcomesCourses
 *
 * @ORM\Table(name="mdl_grade_outcomes_courses", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_gradoutccour_couout_uix", columns={"courseid", "outcomeid"})}, indexes={@ORM\Index(name="mdl_gradoutccour_cou_ix", columns={"courseid"}), @ORM\Index(name="mdl_gradoutccour_out_ix", columns={"outcomeid"})})
 * @ORM\Entity
 */
class MdlGradeOutcomesCourses
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
     * @ORM\Column(name="courseid", type="bigint", nullable=false)
     */
    private $courseid;

    /**
     * @var integer
     *
     * @ORM\Column(name="outcomeid", type="bigint", nullable=false)
     */
    private $outcomeid;



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
     * Set courseid
     *
     * @param integer $courseid
     * @return MdlGradeOutcomesCourses
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
     * Set outcomeid
     *
     * @param integer $outcomeid
     * @return MdlGradeOutcomesCourses
     */
    public function setOutcomeid($outcomeid)
    {
        $this->outcomeid = $outcomeid;

        return $this;
    }

    /**
     * Get outcomeid
     *
     * @return integer 
     */
    public function getOutcomeid()
    {
        return $this->outcomeid;
    }
}
