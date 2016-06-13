<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGradingformGuideComments
 *
 * @ORM\Table(name="mdl_gradingform_guide_comments", indexes={@ORM\Index(name="mdl_gradguidcomm_def_ix", columns={"definitionid"})})
 * @ORM\Entity
 */
class MdlGradingformGuideComments
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
     * @return MdlGradingformGuideComments
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
     * @return MdlGradingformGuideComments
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
     * Set description
     *
     * @param string $description
     * @return MdlGradingformGuideComments
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
     * @return MdlGradingformGuideComments
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
