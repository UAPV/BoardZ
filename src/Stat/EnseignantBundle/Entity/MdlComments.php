<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlComments
 *
 * @ORM\Table(name="mdl_comments")
 * @ORM\Entity
 */
class MdlComments
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
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid;

    /**
     * @var string
     *
     * @ORM\Column(name="commentarea", type="string", length=255, nullable=false)
     */
    private $commentarea = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="itemid", type="bigint", nullable=false)
     */
    private $itemid;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var boolean
     *
     * @ORM\Column(name="format", type="boolean", nullable=false)
     */
    private $format = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;



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
     * Set contextid
     *
     * @param integer $contextid
     * @return MdlComments
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
     * Set commentarea
     *
     * @param string $commentarea
     * @return MdlComments
     */
    public function setCommentarea($commentarea)
    {
        $this->commentarea = $commentarea;

        return $this;
    }

    /**
     * Get commentarea
     *
     * @return string 
     */
    public function getCommentarea()
    {
        return $this->commentarea;
    }

    /**
     * Set itemid
     *
     * @param integer $itemid
     * @return MdlComments
     */
    public function setItemid($itemid)
    {
        $this->itemid = $itemid;

        return $this;
    }

    /**
     * Get itemid
     *
     * @return integer 
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return MdlComments
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set format
     *
     * @param boolean $format
     * @return MdlComments
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return boolean 
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlComments
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
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlComments
     */
    public function setTimecreated($timecreated)
    {
        $this->timecreated = $timecreated;

        return $this;
    }

    /**
     * Get timecreated
     *
     * @return integer 
     */
    public function getTimecreated()
    {
        return $this->timecreated;
    }
}
