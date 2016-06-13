<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestionCategories
 *
 * @ORM\Table(name="mdl_question_categories", indexes={@ORM\Index(name="mdl_quescate_con_ix", columns={"contextid"}), @ORM\Index(name="mdl_quescate_par_ix", columns={"parent"})})
 * @ORM\Entity
 */
class MdlQuestionCategories
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
     * @var integer
     *
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", nullable=false)
     */
    private $info;

    /**
     * @var boolean
     *
     * @ORM\Column(name="infoformat", type="boolean", nullable=false)
     */
    private $infoformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="stamp", type="string", length=255, nullable=false)
     */
    private $stamp = '';

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
    private $sortorder = '999';



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
     * @return MdlQuestionCategories
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
     * Set contextid
     *
     * @param integer $contextid
     * @return MdlQuestionCategories
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
     * Set info
     *
     * @param string $info
     * @return MdlQuestionCategories
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set infoformat
     *
     * @param boolean $infoformat
     * @return MdlQuestionCategories
     */
    public function setInfoformat($infoformat)
    {
        $this->infoformat = $infoformat;

        return $this;
    }

    /**
     * Get infoformat
     *
     * @return boolean 
     */
    public function getInfoformat()
    {
        return $this->infoformat;
    }

    /**
     * Set stamp
     *
     * @param string $stamp
     * @return MdlQuestionCategories
     */
    public function setStamp($stamp)
    {
        $this->stamp = $stamp;

        return $this;
    }

    /**
     * Get stamp
     *
     * @return string 
     */
    public function getStamp()
    {
        return $this->stamp;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     * @return MdlQuestionCategories
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
     * @return MdlQuestionCategories
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
