<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWikiPages
 *
 * @ORM\Table(name="mdl_wiki_pages", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_wikipage_subtituse_uix", columns={"subwikiid", "title", "userid"})}, indexes={@ORM\Index(name="mdl_wikipage_sub_ix", columns={"subwikiid"})})
 * @ORM\Entity
 */
class MdlWikiPages
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
     * @ORM\Column(name="subwikiid", type="bigint", nullable=false)
     */
    private $subwikiid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = 'title';

    /**
     * @var string
     *
     * @ORM\Column(name="cachedcontent", type="text", nullable=false)
     */
    private $cachedcontent;

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
     * @var integer
     *
     * @ORM\Column(name="timerendered", type="bigint", nullable=false)
     */
    private $timerendered = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pageviews", type="bigint", nullable=false)
     */
    private $pageviews = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="readonly", type="boolean", nullable=false)
     */
    private $readonly = '0';



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
     * Set subwikiid
     *
     * @param integer $subwikiid
     * @return MdlWikiPages
     */
    public function setSubwikiid($subwikiid)
    {
        $this->subwikiid = $subwikiid;

        return $this;
    }

    /**
     * Get subwikiid
     *
     * @return integer 
     */
    public function getSubwikiid()
    {
        return $this->subwikiid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return MdlWikiPages
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set cachedcontent
     *
     * @param string $cachedcontent
     * @return MdlWikiPages
     */
    public function setCachedcontent($cachedcontent)
    {
        $this->cachedcontent = $cachedcontent;

        return $this;
    }

    /**
     * Get cachedcontent
     *
     * @return string 
     */
    public function getCachedcontent()
    {
        return $this->cachedcontent;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlWikiPages
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
     * @return MdlWikiPages
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

    /**
     * Set timerendered
     *
     * @param integer $timerendered
     * @return MdlWikiPages
     */
    public function setTimerendered($timerendered)
    {
        $this->timerendered = $timerendered;

        return $this;
    }

    /**
     * Get timerendered
     *
     * @return integer 
     */
    public function getTimerendered()
    {
        return $this->timerendered;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlWikiPages
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
     * Set pageviews
     *
     * @param integer $pageviews
     * @return MdlWikiPages
     */
    public function setPageviews($pageviews)
    {
        $this->pageviews = $pageviews;

        return $this;
    }

    /**
     * Get pageviews
     *
     * @return integer 
     */
    public function getPageviews()
    {
        return $this->pageviews;
    }

    /**
     * Set readonly
     *
     * @param boolean $readonly
     * @return MdlWikiPages
     */
    public function setReadonly($readonly)
    {
        $this->readonly = $readonly;

        return $this;
    }

    /**
     * Get readonly
     *
     * @return boolean 
     */
    public function getReadonly()
    {
        return $this->readonly;
    }
}
