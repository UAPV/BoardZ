<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWikiLocks
 *
 * @ORM\Table(name="mdl_wiki_locks")
 * @ORM\Entity
 */
class MdlWikiLocks
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
     * @ORM\Column(name="sectionname", type="string", length=255, nullable=true)
     */
    private $sectionname;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lockedat", type="bigint", nullable=false)
     */
    private $lockedat = '0';



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
     * @return MdlWikiLocks
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
     * Set sectionname
     *
     * @param string $sectionname
     * @return MdlWikiLocks
     */
    public function setSectionname($sectionname)
    {
        $this->sectionname = $sectionname;

        return $this;
    }

    /**
     * Get sectionname
     *
     * @return string 
     */
    public function getSectionname()
    {
        return $this->sectionname;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlWikiLocks
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
     * Set lockedat
     *
     * @param integer $lockedat
     * @return MdlWikiLocks
     */
    public function setLockedat($lockedat)
    {
        $this->lockedat = $lockedat;

        return $this;
    }

    /**
     * Get lockedat
     *
     * @return integer 
     */
    public function getLockedat()
    {
        return $this->lockedat;
    }
}
