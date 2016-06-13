<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseCategories
 *
 * @ORM\Table(name="mdl_course_categories", indexes={@ORM\Index(name="mdl_courcate_par_ix", columns={"parent"})})
 * @ORM\Entity
 */
class MdlCourseCategories
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="idnumber", type="string", length=100, nullable=true)
     */
    private $idnumber;

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
     * @var integer
     *
     * @ORM\Column(name="parent", type="bigint", nullable=false)
     */
    private $parent = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="coursecount", type="bigint", nullable=false)
     */
    private $coursecount = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false)
     */
    private $visible = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="visibleold", type="boolean", nullable=false)
     */
    private $visibleold = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="depth", type="bigint", nullable=false)
     */
    private $depth = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=false)
     */
    private $path = '';

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=50, nullable=true)
     */
    private $theme;



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
     * Set name
     *
     * @param string $name
     * @return MdlCourseCategories
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set idnumber
     *
     * @param string $idnumber
     * @return MdlCourseCategories
     */
    public function setIdnumber($idnumber)
    {
        $this->idnumber = $idnumber;

        return $this;
    }

    /**
     * Get idnumber
     *
     * @return string 
     */
    public function getIdnumber()
    {
        return $this->idnumber;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return MdlCourseCategories
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
     * @return MdlCourseCategories
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

    /**
     * Set parent
     *
     * @param integer $parent
     * @return MdlCourseCategories
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
     * Set sortorder
     *
     * @param integer $sortorder
     * @return MdlCourseCategories
     */
    public function setSortorder($sortorder)
    {
        $this->sortorder = $sortorder;

        return $this;
    }

    /**
     * Get sortorder
     *
     * @return integer 
     */
    public function getSortorder()
    {
        return $this->sortorder;
    }

    /**
     * Set coursecount
     *
     * @param integer $coursecount
     * @return MdlCourseCategories
     */
    public function setCoursecount($coursecount)
    {
        $this->coursecount = $coursecount;

        return $this;
    }

    /**
     * Get coursecount
     *
     * @return integer 
     */
    public function getCoursecount()
    {
        return $this->coursecount;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return MdlCourseCategories
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set visibleold
     *
     * @param boolean $visibleold
     * @return MdlCourseCategories
     */
    public function setVisibleold($visibleold)
    {
        $this->visibleold = $visibleold;

        return $this;
    }

    /**
     * Get visibleold
     *
     * @return boolean 
     */
    public function getVisibleold()
    {
        return $this->visibleold;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlCourseCategories
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
     * Set depth
     *
     * @param integer $depth
     * @return MdlCourseCategories
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
     * @return MdlCourseCategories
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
     * Set theme
     *
     * @param string $theme
     * @return MdlCourseCategories
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function getTheme()
    {
        return $this->theme;
    }
}
