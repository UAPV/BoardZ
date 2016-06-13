<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlForumTrackPrefs
 *
 * @ORM\Table(name="mdl_forum_track_prefs", indexes={@ORM\Index(name="mdl_forutracpref_usefor_ix", columns={"userid", "forumid"})})
 * @ORM\Entity
 */
class MdlForumTrackPrefs
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
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="forumid", type="bigint", nullable=false)
     */
    private $forumid = '0';



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
     * @return MdlForumTrackPrefs
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
     * Set forumid
     *
     * @param integer $forumid
     * @return MdlForumTrackPrefs
     */
    public function setForumid($forumid)
    {
        $this->forumid = $forumid;

        return $this;
    }

    /**
     * Get forumid
     *
     * @return integer 
     */
    public function getForumid()
    {
        return $this->forumid;
    }
}
