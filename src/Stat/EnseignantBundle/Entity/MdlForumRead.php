<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlForumRead
 *
 * @ORM\Table(name="mdl_forum_read", indexes={@ORM\Index(name="mdl_foruread_usefor_ix", columns={"userid", "forumid"}), @ORM\Index(name="mdl_foruread_usedis_ix", columns={"userid", "discussionid"}), @ORM\Index(name="mdl_foruread_usepos_ix", columns={"userid", "postid"})})
 * @ORM\Entity
 */
class MdlForumRead
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
     * @var integer
     *
     * @ORM\Column(name="discussionid", type="bigint", nullable=false)
     */
    private $discussionid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="postid", type="bigint", nullable=false)
     */
    private $postid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="firstread", type="bigint", nullable=false)
     */
    private $firstread = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastread", type="bigint", nullable=false)
     */
    private $lastread = '0';



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
     * @return MdlForumRead
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
     * @return MdlForumRead
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

    /**
     * Set discussionid
     *
     * @param integer $discussionid
     * @return MdlForumRead
     */
    public function setDiscussionid($discussionid)
    {
        $this->discussionid = $discussionid;

        return $this;
    }

    /**
     * Get discussionid
     *
     * @return integer 
     */
    public function getDiscussionid()
    {
        return $this->discussionid;
    }

    /**
     * Set postid
     *
     * @param integer $postid
     * @return MdlForumRead
     */
    public function setPostid($postid)
    {
        $this->postid = $postid;

        return $this;
    }

    /**
     * Get postid
     *
     * @return integer 
     */
    public function getPostid()
    {
        return $this->postid;
    }

    /**
     * Set firstread
     *
     * @param integer $firstread
     * @return MdlForumRead
     */
    public function setFirstread($firstread)
    {
        $this->firstread = $firstread;

        return $this;
    }

    /**
     * Get firstread
     *
     * @return integer 
     */
    public function getFirstread()
    {
        return $this->firstread;
    }

    /**
     * Set lastread
     *
     * @param integer $lastread
     * @return MdlForumRead
     */
    public function setLastread($lastread)
    {
        $this->lastread = $lastread;

        return $this;
    }

    /**
     * Get lastread
     *
     * @return integer 
     */
    public function getLastread()
    {
        return $this->lastread;
    }
}
