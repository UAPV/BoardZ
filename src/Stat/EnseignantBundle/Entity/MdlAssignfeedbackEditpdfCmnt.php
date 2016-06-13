<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignfeedbackEditpdfCmnt
 *
 * @ORM\Table(name="mdl_assignfeedback_editpdf_cmnt", indexes={@ORM\Index(name="mdl_assieditcmnt_grapag_ix", columns={"gradeid", "pageno"}), @ORM\Index(name="mdl_assieditcmnt_gra_ix", columns={"gradeid"})})
 * @ORM\Entity
 */
class MdlAssignfeedbackEditpdfCmnt
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
     * @ORM\Column(name="gradeid", type="bigint", nullable=false)
     */
    private $gradeid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="x", type="bigint", nullable=true)
     */
    private $x = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="y", type="bigint", nullable=true)
     */
    private $y = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="width", type="bigint", nullable=true)
     */
    private $width = '120';

    /**
     * @var string
     *
     * @ORM\Column(name="rawtext", type="text", nullable=true)
     */
    private $rawtext;

    /**
     * @var integer
     *
     * @ORM\Column(name="pageno", type="bigint", nullable=false)
     */
    private $pageno = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="colour", type="string", length=10, nullable=true)
     */
    private $colour = 'black';

    /**
     * @var boolean
     *
     * @ORM\Column(name="draft", type="boolean", nullable=false)
     */
    private $draft = '1';



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
     * Set gradeid
     *
     * @param integer $gradeid
     * @return MdlAssignfeedbackEditpdfCmnt
     */
    public function setGradeid($gradeid)
    {
        $this->gradeid = $gradeid;

        return $this;
    }

    /**
     * Get gradeid
     *
     * @return integer 
     */
    public function getGradeid()
    {
        return $this->gradeid;
    }

    /**
     * Set x
     *
     * @param integer $x
     * @return MdlAssignfeedbackEditpdfCmnt
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return integer 
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param integer $y
     * @return MdlAssignfeedbackEditpdfCmnt
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return integer 
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set width
     *
     * @param integer $width
     * @return MdlAssignfeedbackEditpdfCmnt
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set rawtext
     *
     * @param string $rawtext
     * @return MdlAssignfeedbackEditpdfCmnt
     */
    public function setRawtext($rawtext)
    {
        $this->rawtext = $rawtext;

        return $this;
    }

    /**
     * Get rawtext
     *
     * @return string 
     */
    public function getRawtext()
    {
        return $this->rawtext;
    }

    /**
     * Set pageno
     *
     * @param integer $pageno
     * @return MdlAssignfeedbackEditpdfCmnt
     */
    public function setPageno($pageno)
    {
        $this->pageno = $pageno;

        return $this;
    }

    /**
     * Get pageno
     *
     * @return integer 
     */
    public function getPageno()
    {
        return $this->pageno;
    }

    /**
     * Set colour
     *
     * @param string $colour
     * @return MdlAssignfeedbackEditpdfCmnt
     */
    public function setColour($colour)
    {
        $this->colour = $colour;

        return $this;
    }

    /**
     * Get colour
     *
     * @return string 
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * Set draft
     *
     * @param boolean $draft
     * @return MdlAssignfeedbackEditpdfCmnt
     */
    public function setDraft($draft)
    {
        $this->draft = $draft;

        return $this;
    }

    /**
     * Get draft
     *
     * @return boolean 
     */
    public function getDraft()
    {
        return $this->draft;
    }
}
