<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlFeedbackSitecourseMap
 *
 * @ORM\Table(name="mdl_feedback_sitecourse_map", indexes={@ORM\Index(name="mdl_feedsitemap_cou_ix", columns={"courseid"}), @ORM\Index(name="mdl_feedsitemap_fee_ix", columns={"feedbackid"})})
 * @ORM\Entity
 */
class MdlFeedbackSitecourseMap
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
     * @ORM\Column(name="feedbackid", type="bigint", nullable=false)
     */
    private $feedbackid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="courseid", type="bigint", nullable=false)
     */
    private $courseid = '0';



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
     * Set feedbackid
     *
     * @param integer $feedbackid
     * @return MdlFeedbackSitecourseMap
     */
    public function setFeedbackid($feedbackid)
    {
        $this->feedbackid = $feedbackid;

        return $this;
    }

    /**
     * Get feedbackid
     *
     * @return integer 
     */
    public function getFeedbackid()
    {
        return $this->feedbackid;
    }

    /**
     * Set courseid
     *
     * @param integer $courseid
     * @return MdlFeedbackSitecourseMap
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
}
