<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlRating
 *
 * @ORM\Table(name="mdl_rating", indexes={@ORM\Index(name="mdl_rati_comratconite_ix", columns={"component", "ratingarea", "contextid", "itemid"}), @ORM\Index(name="mdl_rati_con_ix", columns={"contextid"}), @ORM\Index(name="mdl_rati_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlRating
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
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid;

    /**
     * @var string
     *
     * @ORM\Column(name="component", type="string", length=100, nullable=false)
     */
    private $component = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ratingarea", type="string", length=50, nullable=false)
     */
    private $ratingarea = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="itemid", type="bigint", nullable=false)
     */
    private $itemid;

    /**
     * @var integer
     *
     * @ORM\Column(name="scaleid", type="bigint", nullable=false)
     */
    private $scaleid;

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="bigint", nullable=false)
     */
    private $rating;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

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
     * Set contextid
     *
     * @param integer $contextid
     * @return MdlRating
     */
    public function setContextid($contextid)
    {
        $this->contextid = $contextid;

        return $this;
    }

    /**
     * Get contextid
     *
     * @return integer 
     */
    public function getContextid()
    {
        return $this->contextid;
    }

    /**
     * Set component
     *
     * @param string $component
     * @return MdlRating
     */
    public function setComponent($component)
    {
        $this->component = $component;

        return $this;
    }

    /**
     * Get component
     *
     * @return string 
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Set ratingarea
     *
     * @param string $ratingarea
     * @return MdlRating
     */
    public function setRatingarea($ratingarea)
    {
        $this->ratingarea = $ratingarea;

        return $this;
    }

    /**
     * Get ratingarea
     *
     * @return string 
     */
    public function getRatingarea()
    {
        return $this->ratingarea;
    }

    /**
     * Set itemid
     *
     * @param integer $itemid
     * @return MdlRating
     */
    public function setItemid($itemid)
    {
        $this->itemid = $itemid;

        return $this;
    }

    /**
     * Get itemid
     *
     * @return integer 
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set scaleid
     *
     * @param integer $scaleid
     * @return MdlRating
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
     * Set rating
     *
     * @param integer $rating
     * @return MdlRating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlRating
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
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlRating
     */
    public function setTimecreated($timecreated)
    {
        $this->timecreated = $timecreated;

        return $this;
    }

    /**
     * Get timecreated
     *
     * @return integer 
     */
    public function getTimecreated()
    {
        return $this->timecreated;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlRating
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
