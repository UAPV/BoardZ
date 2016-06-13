<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLanguagelabSubmissions
 *
 * @ORM\Table(name="mdl_languagelab_submissions", indexes={@ORM\Index(name="mdl_langsubm_lan_ix", columns={"languagelab"})})
 * @ORM\Entity
 */
class MdlLanguagelabSubmissions
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
     * @ORM\Column(name="languagelab", type="bigint", nullable=false)
     */
    private $languagelab = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="groupid", type="bigint", nullable=true)
     */
    private $groupid;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=true)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="parentnode", type="string", length=255, nullable=true)
     */
    private $parentnode;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';



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
     * Set languagelab
     *
     * @param integer $languagelab
     * @return MdlLanguagelabSubmissions
     */
    public function setLanguagelab($languagelab)
    {
        $this->languagelab = $languagelab;

        return $this;
    }

    /**
     * Get languagelab
     *
     * @return integer 
     */
    public function getLanguagelab()
    {
        return $this->languagelab;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlLanguagelabSubmissions
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
     * Set groupid
     *
     * @param integer $groupid
     * @return MdlLanguagelabSubmissions
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Get groupid
     *
     * @return integer 
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return MdlLanguagelabSubmissions
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
     * Set label
     *
     * @param string $label
     * @return MdlLanguagelabSubmissions
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return MdlLanguagelabSubmissions
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set parentnode
     *
     * @param string $parentnode
     * @return MdlLanguagelabSubmissions
     */
    public function setParentnode($parentnode)
    {
        $this->parentnode = $parentnode;

        return $this;
    }

    /**
     * Get parentnode
     *
     * @return string 
     */
    public function getParentnode()
    {
        return $this->parentnode;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlLanguagelabSubmissions
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

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlLanguagelabSubmissions
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
}
