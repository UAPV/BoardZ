<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlScormScoes
 *
 * @ORM\Table(name="mdl_scorm_scoes", indexes={@ORM\Index(name="mdl_scorscoe_sco_ix", columns={"scorm"})})
 * @ORM\Entity
 */
class MdlScormScoes
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
     * @ORM\Column(name="scorm", type="bigint", nullable=false)
     */
    private $scorm = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="manifest", type="string", length=255, nullable=false)
     */
    private $manifest = '';

    /**
     * @var string
     *
     * @ORM\Column(name="organization", type="string", length=255, nullable=false)
     */
    private $organization = '';

    /**
     * @var string
     *
     * @ORM\Column(name="parent", type="string", length=255, nullable=false)
     */
    private $parent = '';

    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=255, nullable=false)
     */
    private $identifier = '';

    /**
     * @var string
     *
     * @ORM\Column(name="launch", type="text", nullable=false)
     */
    private $launch;

    /**
     * @var string
     *
     * @ORM\Column(name="scormtype", type="string", length=5, nullable=false)
     */
    private $scormtype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder = '0';



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
     * Set scorm
     *
     * @param integer $scorm
     * @return MdlScormScoes
     */
    public function setScorm($scorm)
    {
        $this->scorm = $scorm;

        return $this;
    }

    /**
     * Get scorm
     *
     * @return integer 
     */
    public function getScorm()
    {
        return $this->scorm;
    }

    /**
     * Set manifest
     *
     * @param string $manifest
     * @return MdlScormScoes
     */
    public function setManifest($manifest)
    {
        $this->manifest = $manifest;

        return $this;
    }

    /**
     * Get manifest
     *
     * @return string 
     */
    public function getManifest()
    {
        return $this->manifest;
    }

    /**
     * Set organization
     *
     * @param string $organization
     * @return MdlScormScoes
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get organization
     *
     * @return string 
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Set parent
     *
     * @param string $parent
     * @return MdlScormScoes
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return string 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set identifier
     *
     * @param string $identifier
     * @return MdlScormScoes
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * Get identifier
     *
     * @return string 
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set launch
     *
     * @param string $launch
     * @return MdlScormScoes
     */
    public function setLaunch($launch)
    {
        $this->launch = $launch;

        return $this;
    }

    /**
     * Get launch
     *
     * @return string 
     */
    public function getLaunch()
    {
        return $this->launch;
    }

    /**
     * Set scormtype
     *
     * @param string $scormtype
     * @return MdlScormScoes
     */
    public function setScormtype($scormtype)
    {
        $this->scormtype = $scormtype;

        return $this;
    }

    /**
     * Get scormtype
     *
     * @return string 
     */
    public function getScormtype()
    {
        return $this->scormtype;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return MdlScormScoes
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set sortorder
     *
     * @param integer $sortorder
     * @return MdlScormScoes
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
}
