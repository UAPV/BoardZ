<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockCommunity
 *
 * @ORM\Table(name="mdl_block_community")
 * @ORM\Entity
 */
class MdlBlockCommunity
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
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="coursename", type="string", length=255, nullable=false)
     */
    private $coursename = '';

    /**
     * @var string
     *
     * @ORM\Column(name="coursedescription", type="text", nullable=true)
     */
    private $coursedescription;

    /**
     * @var string
     *
     * @ORM\Column(name="courseurl", type="string", length=255, nullable=false)
     */
    private $courseurl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="imageurl", type="string", length=255, nullable=false)
     */
    private $imageurl = '';



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
     * @return MdlBlockCommunity
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
     * Set coursename
     *
     * @param string $coursename
     * @return MdlBlockCommunity
     */
    public function setCoursename($coursename)
    {
        $this->coursename = $coursename;

        return $this;
    }

    /**
     * Get coursename
     *
     * @return string 
     */
    public function getCoursename()
    {
        return $this->coursename;
    }

    /**
     * Set coursedescription
     *
     * @param string $coursedescription
     * @return MdlBlockCommunity
     */
    public function setCoursedescription($coursedescription)
    {
        $this->coursedescription = $coursedescription;

        return $this;
    }

    /**
     * Get coursedescription
     *
     * @return string 
     */
    public function getCoursedescription()
    {
        return $this->coursedescription;
    }

    /**
     * Set courseurl
     *
     * @param string $courseurl
     * @return MdlBlockCommunity
     */
    public function setCourseurl($courseurl)
    {
        $this->courseurl = $courseurl;

        return $this;
    }

    /**
     * Get courseurl
     *
     * @return string 
     */
    public function getCourseurl()
    {
        return $this->courseurl;
    }

    /**
     * Set imageurl
     *
     * @param string $imageurl
     * @return MdlBlockCommunity
     */
    public function setImageurl($imageurl)
    {
        $this->imageurl = $imageurl;

        return $this;
    }

    /**
     * Get imageurl
     *
     * @return string 
     */
    public function getImageurl()
    {
        return $this->imageurl;
    }
}
