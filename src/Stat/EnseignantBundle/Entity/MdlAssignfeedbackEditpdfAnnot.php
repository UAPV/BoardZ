<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignfeedbackEditpdfAnnot
 *
 * @ORM\Table(name="mdl_assignfeedback_editpdf_annot", indexes={@ORM\Index(name="mdl_assieditanno_grapag_ix", columns={"gradeid", "pageno"}), @ORM\Index(name="mdl_assieditanno_gra_ix", columns={"gradeid"})})
 * @ORM\Entity
 */
class MdlAssignfeedbackEditpdfAnnot
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
     * @ORM\Column(name="pageno", type="bigint", nullable=false)
     */
    private $pageno = '0';

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
     * @ORM\Column(name="endx", type="bigint", nullable=true)
     */
    private $endx = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="endy", type="bigint", nullable=true)
     */
    private $endy = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="text", nullable=true)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=true)
     */
    private $type = 'line';

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
     * @return MdlAssignfeedbackEditpdfAnnot
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
     * Set pageno
     *
     * @param integer $pageno
     * @return MdlAssignfeedbackEditpdfAnnot
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
     * Set x
     *
     * @param integer $x
     * @return MdlAssignfeedbackEditpdfAnnot
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
     * @return MdlAssignfeedbackEditpdfAnnot
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
     * Set endx
     *
     * @param integer $endx
     * @return MdlAssignfeedbackEditpdfAnnot
     */
    public function setEndx($endx)
    {
        $this->endx = $endx;

        return $this;
    }

    /**
     * Get endx
     *
     * @return integer 
     */
    public function getEndx()
    {
        return $this->endx;
    }

    /**
     * Set endy
     *
     * @param integer $endy
     * @return MdlAssignfeedbackEditpdfAnnot
     */
    public function setEndy($endy)
    {
        $this->endy = $endy;

        return $this;
    }

    /**
     * Get endy
     *
     * @return integer 
     */
    public function getEndy()
    {
        return $this->endy;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return MdlAssignfeedbackEditpdfAnnot
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
     * Set type
     *
     * @param string $type
     * @return MdlAssignfeedbackEditpdfAnnot
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set colour
     *
     * @param string $colour
     * @return MdlAssignfeedbackEditpdfAnnot
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
     * @return MdlAssignfeedbackEditpdfAnnot
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
