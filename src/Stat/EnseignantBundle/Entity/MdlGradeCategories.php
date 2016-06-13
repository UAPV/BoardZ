<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradeCategories
 *
 * @ORM\Table(name="mdl_grade_categories", indexes={@ORM\Index(name="mdl_gradcate_cou_ix", columns={"courseid"}), @ORM\Index(name="mdl_gradcate_par_ix", columns={"parent"})})
 * @ORM\Entity
 */
class MdlGradeCategories
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
     * @ORM\Column(name="parent", type="bigint", nullable=true)
     */
    private $parent;

    /**
     * @var integer
     *
     * @ORM\Column(name="depth", type="bigint", nullable=false)
     */
    private $depth = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", length=255, nullable=false)
     */
    private $fullname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="aggregation", type="bigint", nullable=false)
     */
    private $aggregation = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keephigh", type="bigint", nullable=false)
     */
    private $keephigh = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="droplow", type="bigint", nullable=false)
     */
    private $droplow = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="aggregateonlygraded", type="boolean", nullable=false)
     */
    private $aggregateonlygraded = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="aggregateoutcomes", type="boolean", nullable=false)
     */
    private $aggregateoutcomes = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="aggregatesubcats", type="boolean", nullable=false)
     */
    private $aggregatesubcats = '0';

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
     * @var boolean
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=false)
     */
    private $hidden = '0';



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
     * @return MdlGradeCategories
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
     * Set parent
     *
     * @param integer $parent
     * @return MdlGradeCategories
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return integer 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set depth
     *
     * @param integer $depth
     * @return MdlGradeCategories
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Get depth
     *
     * @return integer 
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return MdlGradeCategories
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     * @return MdlGradeCategories
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
     * Set aggregation
     *
     * @param integer $aggregation
     * @return MdlGradeCategories
     */
    public function setAggregation($aggregation)
    {
        $this->aggregation = $aggregation;

        return $this;
    }

    /**
     * Get aggregation
     *
     * @return integer 
     */
    public function getAggregation()
    {
        return $this->aggregation;
    }

    /**
     * Set keephigh
     *
     * @param integer $keephigh
     * @return MdlGradeCategories
     */
    public function setKeephigh($keephigh)
    {
        $this->keephigh = $keephigh;

        return $this;
    }

    /**
     * Get keephigh
     *
     * @return integer 
     */
    public function getKeephigh()
    {
        return $this->keephigh;
    }

    /**
     * Set droplow
     *
     * @param integer $droplow
     * @return MdlGradeCategories
     */
    public function setDroplow($droplow)
    {
        $this->droplow = $droplow;

        return $this;
    }

    /**
     * Get droplow
     *
     * @return integer 
     */
    public function getDroplow()
    {
        return $this->droplow;
    }

    /**
     * Set aggregateonlygraded
     *
     * @param boolean $aggregateonlygraded
     * @return MdlGradeCategories
     */
    public function setAggregateonlygraded($aggregateonlygraded)
    {
        $this->aggregateonlygraded = $aggregateonlygraded;

        return $this;
    }

    /**
     * Get aggregateonlygraded
     *
     * @return boolean 
     */
    public function getAggregateonlygraded()
    {
        return $this->aggregateonlygraded;
    }

    /**
     * Set aggregateoutcomes
     *
     * @param boolean $aggregateoutcomes
     * @return MdlGradeCategories
     */
    public function setAggregateoutcomes($aggregateoutcomes)
    {
        $this->aggregateoutcomes = $aggregateoutcomes;

        return $this;
    }

    /**
     * Get aggregateoutcomes
     *
     * @return boolean 
     */
    public function getAggregateoutcomes()
    {
        return $this->aggregateoutcomes;
    }

    /**
     * Set aggregatesubcats
     *
     * @param boolean $aggregatesubcats
     * @return MdlGradeCategories
     */
    public function setAggregatesubcats($aggregatesubcats)
    {
        $this->aggregatesubcats = $aggregatesubcats;

        return $this;
    }

    /**
     * Get aggregatesubcats
     *
     * @return boolean 
     */
    public function getAggregatesubcats()
    {
        return $this->aggregatesubcats;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlGradeCategories
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
     * @return MdlGradeCategories
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
     * Set hidden
     *
     * @param boolean $hidden
     * @return MdlGradeCategories
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * Get hidden
     *
     * @return boolean 
     */
    public function getHidden()
    {
        return $this->hidden;
    }
}
