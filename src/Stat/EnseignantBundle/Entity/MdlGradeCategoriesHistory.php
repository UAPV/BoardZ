<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradeCategoriesHistory
 *
 * @ORM\Table(name="mdl_grade_categories_history", indexes={@ORM\Index(name="mdl_gradcatehist_act_ix", columns={"action"}), @ORM\Index(name="mdl_gradcatehist_old_ix", columns={"oldid"}), @ORM\Index(name="mdl_gradcatehist_cou_ix", columns={"courseid"}), @ORM\Index(name="mdl_gradcatehist_par_ix", columns={"parent"}), @ORM\Index(name="mdl_gradcatehist_log_ix", columns={"loggeduser"})})
 * @ORM\Entity
 */
class MdlGradeCategoriesHistory
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
     * Set action
     *
     * @param integer $action
     * @return MdlGradeCategoriesHistory
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
     * @return MdlGradeCategoriesHistory
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
     * @return MdlGradeCategoriesHistory
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
     * @return MdlGradeCategoriesHistory
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
     * @return MdlGradeCategoriesHistory
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
     * @return MdlGradeCategoriesHistory
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
     * @return MdlGradeCategoriesHistory
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
     * @return MdlGradeCategoriesHistory
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
     * @return MdlGradeCategoriesHistory
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
     * @return MdlGradeCategoriesHistory
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
     * @return MdlGradeCategoriesHistory
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
     * @return MdlGradeCategoriesHistory
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
     * @return MdlGradeCategoriesHistory
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
     * @return MdlGradeCategoriesHistory
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
     * @return MdlGradeCategoriesHistory
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
     * @return MdlGradeCategoriesHistory
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
     * Set hidden
     *
     * @param boolean $hidden
     * @return MdlGradeCategoriesHistory
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
