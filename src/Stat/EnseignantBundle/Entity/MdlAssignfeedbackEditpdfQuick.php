<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignfeedbackEditpdfQuick
 *
 * @ORM\Table(name="mdl_assignfeedback_editpdf_quick", indexes={@ORM\Index(name="mdl_assieditquic_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlAssignfeedbackEditpdfQuick
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
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="rawtext", type="text", nullable=false)
     */
    private $rawtext;

    /**
     * @var integer
     *
     * @ORM\Column(name="width", type="bigint", nullable=false)
     */
    private $width = '120';

    /**
     * @var string
     *
     * @ORM\Column(name="colour", type="string", length=10, nullable=true)
     */
    private $colour = 'yellow';



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
     * Set userid
     *
     * @param integer $userid
     * @return MdlAssignfeedbackEditpdfQuick
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set rawtext
     *
     * @param string $rawtext
     * @return MdlAssignfeedbackEditpdfQuick
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
     * Set width
     *
     * @param integer $width
     * @return MdlAssignfeedbackEditpdfQuick
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
     * Set colour
     *
     * @param string $colour
     * @return MdlAssignfeedbackEditpdfQuick
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
}
