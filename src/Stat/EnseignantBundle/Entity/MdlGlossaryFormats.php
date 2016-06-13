<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlGlossaryFormats
 *
 * @ORM\Table(name="mdl_glossary_formats")
 * @ORM\Entity
 */
class MdlGlossaryFormats
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
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="popupformatname", type="string", length=50, nullable=false)
     */
    private $popupformatname = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false)
     */
    private $visible = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="showgroup", type="boolean", nullable=false)
     */
    private $showgroup = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="defaultmode", type="string", length=50, nullable=false)
     */
    private $defaultmode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="defaulthook", type="string", length=50, nullable=false)
     */
    private $defaulthook = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sortkey", type="string", length=50, nullable=false)
     */
    private $sortkey = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sortorder", type="string", length=50, nullable=false)
     */
    private $sortorder = '';



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
     * @return MdlGlossaryFormats
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
     * Set popupformatname
     *
     * @param string $popupformatname
     * @return MdlGlossaryFormats
     */
    public function setPopupformatname($popupformatname)
    {
        $this->popupformatname = $popupformatname;

        return $this;
    }

    /**
     * Get popupformatname
     *
     * @return string 
     */
    public function getPopupformatname()
    {
        return $this->popupformatname;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return MdlGlossaryFormats
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
     * Set showgroup
     *
     * @param boolean $showgroup
     * @return MdlGlossaryFormats
     */
    public function setShowgroup($showgroup)
    {
        $this->showgroup = $showgroup;

        return $this;
    }

    /**
     * Get showgroup
     *
     * @return boolean 
     */
    public function getShowgroup()
    {
        return $this->showgroup;
    }

    /**
     * Set defaultmode
     *
     * @param string $defaultmode
     * @return MdlGlossaryFormats
     */
    public function setDefaultmode($defaultmode)
    {
        $this->defaultmode = $defaultmode;

        return $this;
    }

    /**
     * Get defaultmode
     *
     * @return string 
     */
    public function getDefaultmode()
    {
        return $this->defaultmode;
    }

    /**
     * Set defaulthook
     *
     * @param string $defaulthook
     * @return MdlGlossaryFormats
     */
    public function setDefaulthook($defaulthook)
    {
        $this->defaulthook = $defaulthook;

        return $this;
    }

    /**
     * Get defaulthook
     *
     * @return string 
     */
    public function getDefaulthook()
    {
        return $this->defaulthook;
    }

    /**
     * Set sortkey
     *
     * @param string $sortkey
     * @return MdlGlossaryFormats
     */
    public function setSortkey($sortkey)
    {
        $this->sortkey = $sortkey;

        return $this;
    }

    /**
     * Get sortkey
     *
     * @return string 
     */
    public function getSortkey()
    {
        return $this->sortkey;
    }

    /**
     * Set sortorder
     *
     * @param string $sortorder
     * @return MdlGlossaryFormats
     */
    public function setSortorder($sortorder)
    {
        $this->sortorder = $sortorder;

        return $this;
    }

    /**
     * Get sortorder
     *
     * @return string 
     */
    public function getSortorder()
    {
        return $this->sortorder;
    }
}
