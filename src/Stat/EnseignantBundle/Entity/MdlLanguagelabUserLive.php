<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLanguagelabUserLive
 *
 * @ORM\Table(name="mdl_languagelab_user_live")
 * @ORM\Entity
 */
class MdlLanguagelabUserLive
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
     * @ORM\Column(name="live", type="text", nullable=false)
     */
    private $live;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;



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
     * @return MdlLanguagelabUserLive
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
     * @return MdlLanguagelabUserLive
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
     * Set live
     *
     * @param string $live
     * @return MdlLanguagelabUserLive
     */
    public function setLive($live)
    {
        $this->live = $live;

        return $this;
    }

    /**
     * Get live
     *
     * @return string 
     */
    public function getLive()
    {
        return $this->live;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlLanguagelabUserLive
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
