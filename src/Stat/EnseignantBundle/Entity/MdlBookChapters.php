<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBookChapters
 *
 * @ORM\Table(name="mdl_book_chapters")
 * @ORM\Entity
 */
class MdlBookChapters
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
     * @ORM\Column(name="bookid", type="bigint", nullable=false)
     */
    private $bookid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pagenum", type="bigint", nullable=false)
     */
    private $pagenum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="subchapter", type="bigint", nullable=false)
     */
    private $subchapter = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="contentformat", type="smallint", nullable=false)
     */
    private $contentformat = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=false)
     */
    private $hidden = '0';

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
     * @var string
     *
     * @ORM\Column(name="importsrc", type="string", length=255, nullable=false)
     */
    private $importsrc = '';



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
     * Set bookid
     *
     * @param integer $bookid
     * @return MdlBookChapters
     */
    public function setBookid($bookid)
    {
        $this->bookid = $bookid;

        return $this;
    }

    /**
     * Get bookid
     *
     * @return integer 
     */
    public function getBookid()
    {
        return $this->bookid;
    }

    /**
     * Set pagenum
     *
     * @param integer $pagenum
     * @return MdlBookChapters
     */
    public function setPagenum($pagenum)
    {
        $this->pagenum = $pagenum;

        return $this;
    }

    /**
     * Get pagenum
     *
     * @return integer 
     */
    public function getPagenum()
    {
        return $this->pagenum;
    }

    /**
     * Set subchapter
     *
     * @param integer $subchapter
     * @return MdlBookChapters
     */
    public function setSubchapter($subchapter)
    {
        $this->subchapter = $subchapter;

        return $this;
    }

    /**
     * Get subchapter
     *
     * @return integer 
     */
    public function getSubchapter()
    {
        return $this->subchapter;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return MdlBookChapters
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
     * Set content
     *
     * @param string $content
     * @return MdlBookChapters
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
     * Set contentformat
     *
     * @param integer $contentformat
     * @return MdlBookChapters
     */
    public function setContentformat($contentformat)
    {
        $this->contentformat = $contentformat;

        return $this;
    }

    /**
     * Get contentformat
     *
     * @return integer 
     */
    public function getContentformat()
    {
        return $this->contentformat;
    }

    /**
     * Set hidden
     *
     * @param boolean $hidden
     * @return MdlBookChapters
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * Get hidden
     *
     * @return boolean 
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlBookChapters
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
     * @return MdlBookChapters
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
     * Set importsrc
     *
     * @param string $importsrc
     * @return MdlBookChapters
     */
    public function setImportsrc($importsrc)
    {
        $this->importsrc = $importsrc;

        return $this;
    }

    /**
     * Get importsrc
     *
     * @return string 
     */
    public function getImportsrc()
    {
        return $this->importsrc;
    }
}
