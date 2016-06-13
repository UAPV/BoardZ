<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLanguagelabUserEvent
 *
 * @ORM\Table(name="mdl_languagelab_user_event", indexes={@ORM\Index(name="mdl_langusereven_lan_ix", columns={"languagelab"})})
 * @ORM\Entity
 */
class MdlLanguagelabUserEvent
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
    private $languagelab;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="text", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", nullable=false)
     */
    private $data;

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
     * Set languagelab
     *
     * @param integer $languagelab
     * @return MdlLanguagelabUserEvent
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
     * @return MdlLanguagelabUserEvent
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
     * Set type
     *
     * @param string $type
     * @return MdlLanguagelabUserEvent
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
     * Set data
     *
     * @param string $data
     * @return MdlLanguagelabUserEvent
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlLanguagelabUserEvent
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
