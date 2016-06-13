<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlForumQueue
 *
 * @ORM\Table(name="mdl_forum_queue", indexes={@ORM\Index(name="mdl_foruqueu_use_ix", columns={"userid"}), @ORM\Index(name="mdl_foruqueu_dis_ix", columns={"discussionid"}), @ORM\Index(name="mdl_foruqueu_pos_ix", columns={"postid"})})
 * @ORM\Entity
 */
class MdlForumQueue
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
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';



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
     * @return MdlForumQueue
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
     * Set discussionid
     *
     * @param integer $discussionid
     * @return MdlForumQueue
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
     * @return MdlForumQueue
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
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlForumQueue
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
