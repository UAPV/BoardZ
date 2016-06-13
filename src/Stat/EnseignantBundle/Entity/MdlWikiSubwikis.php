<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWikiSubwikis
 *
 * @ORM\Table(name="mdl_wiki_subwikis", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_wikisubw_wikgrouse_uix", columns={"wikiid", "groupid", "userid"})}, indexes={@ORM\Index(name="mdl_wikisubw_wik_ix", columns={"wikiid"})})
 * @ORM\Entity
 */
class MdlWikiSubwikis
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
     * @ORM\Column(name="wikiid", type="bigint", nullable=false)
     */
    private $wikiid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groupid", type="bigint", nullable=false)
     */
    private $groupid = '0';

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
     * Set wikiid
     *
     * @param integer $wikiid
     * @return MdlWikiSubwikis
     */
    public function setWikiid($wikiid)
    {
        $this->wikiid = $wikiid;

        return $this;
    }

    /**
     * Get wikiid
     *
     * @return integer 
     */
    public function getWikiid()
    {
        return $this->wikiid;
    }

    /**
     * Set groupid
     *
     * @param integer $groupid
     * @return MdlWikiSubwikis
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
     * Set userid
     *
     * @param integer $userid
     * @return MdlWikiSubwikis
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
