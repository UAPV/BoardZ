<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWikiVersions
 *
 * @ORM\Table(name="mdl_wiki_versions", indexes={@ORM\Index(name="mdl_wikivers_pag_ix", columns={"pageid"})})
 * @ORM\Entity
 */
class MdlWikiVersions
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
     * @ORM\Column(name="pageid", type="bigint", nullable=false)
     */
    private $pageid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="contentformat", type="string", length=20, nullable=false)
     */
    private $contentformat = 'creole';

    /**
     * @var integer
     *
     * @ORM\Column(name="version", type="integer", nullable=false)
     */
    private $version = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';



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
     * Set pageid
     *
     * @param integer $pageid
     * @return MdlWikiVersions
     */
    public function setPageid($pageid)
    {
        $this->pageid = $pageid;

        return $this;
    }

    /**
     * Get pageid
     *
     * @return integer 
     */
    public function getPageid()
    {
        return $this->pageid;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return MdlWikiVersions
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
     * @param string $contentformat
     * @return MdlWikiVersions
     */
    public function setContentformat($contentformat)
    {
        $this->contentformat = $contentformat;

        return $this;
    }

    /**
     * Get contentformat
     *
     * @return string 
     */
    public function getContentformat()
    {
        return $this->contentformat;
    }

    /**
     * Set version
     *
     * @param integer $version
     * @return MdlWikiVersions
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return integer 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlWikiVersions
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
     * Set userid
     *
     * @param integer $userid
     * @return MdlWikiVersions
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
}
