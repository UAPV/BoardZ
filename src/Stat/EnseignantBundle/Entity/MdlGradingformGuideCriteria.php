<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradingformGuideCriteria
 *
 * @ORM\Table(name="mdl_gradingform_guide_criteria", indexes={@ORM\Index(name="mdl_gradguidcrit_def_ix", columns={"definitionid"})})
 * @ORM\Entity
 */
class MdlGradingformGuideCriteria
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
     * @ORM\Column(name="definitionid", type="bigint", nullable=false)
     */
    private $definitionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder;

    /**
     * @var string
     *
     * @ORM\Column(name="shortname", type="string", length=255, nullable=false)
     */
    private $shortname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="descriptionformat", type="boolean", nullable=true)
     */
    private $descriptionformat;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionmarkers", type="text", nullable=true)
     */
    private $descriptionmarkers;

    /**
     * @var boolean
     *
     * @ORM\Column(name="descriptionmarkersformat", type="boolean", nullable=true)
     */
    private $descriptionmarkersformat;

    /**
     * @var string
     *
     * @ORM\Column(name="maxscore", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $maxscore;



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
     * Set definitionid
     *
     * @param integer $definitionid
     * @return MdlGradingformGuideCriteria
     */
    public function setDefinitionid($definitionid)
    {
        $this->definitionid = $definitionid;

        return $this;
    }

    /**
     * Get definitionid
     *
     * @return integer 
     */
    public function getDefinitionid()
    {
        return $this->definitionid;
    }

    /**
     * Set sortorder
     *
     * @param integer $sortorder
     * @return MdlGradingformGuideCriteria
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
     * Set shortname
     *
     * @param string $shortname
     * @return MdlGradingformGuideCriteria
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
     * Set description
     *
     * @param string $description
     * @return MdlGradingformGuideCriteria
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
     * @return MdlGradingformGuideCriteria
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
     * Set descriptionmarkers
     *
     * @param string $descriptionmarkers
     * @return MdlGradingformGuideCriteria
     */
    public function setDescriptionmarkers($descriptionmarkers)
    {
        $this->descriptionmarkers = $descriptionmarkers;

        return $this;
    }

    /**
     * Get descriptionmarkers
     *
     * @return string 
     */
    public function getDescriptionmarkers()
    {
        return $this->descriptionmarkers;
    }

    /**
     * Set descriptionmarkersformat
     *
     * @param boolean $descriptionmarkersformat
     * @return MdlGradingformGuideCriteria
     */
    public function setDescriptionmarkersformat($descriptionmarkersformat)
    {
        $this->descriptionmarkersformat = $descriptionmarkersformat;

        return $this;
    }

    /**
     * Get descriptionmarkersformat
     *
     * @return boolean 
     */
    public function getDescriptionmarkersformat()
    {
        return $this->descriptionmarkersformat;
    }

    /**
     * Set maxscore
     *
     * @param string $maxscore
     * @return MdlGradingformGuideCriteria
     */
    public function setMaxscore($maxscore)
    {
        $this->maxscore = $maxscore;

        return $this;
    }

    /**
     * Get maxscore
     *
     * @return string 
     */
    public function getMaxscore()
    {
        return $this->maxscore;
    }
}
