<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlForumDiscussions
 *
 * @ORM\Table(name="mdl_forum_discussions", indexes={@ORM\Index(name="mdl_forudisc_use_ix", columns={"userid"}), @ORM\Index(name="mdl_forudisc_for_ix", columns={"forum"})})
 * @ORM\Entity
 */
class MdlForumDiscussions
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
     * @ORM\Column(name="course", type="bigint", nullable=false)
     */
    private $course = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="forum", type="bigint", nullable=false)
     */
    private $forum = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="firstpost", type="bigint", nullable=false)
     */
    private $firstpost = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groupid", type="bigint", nullable=false)
     */
    private $groupid = '-1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="assessed", type="boolean", nullable=false)
     */
    private $assessed = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="usermodified", type="bigint", nullable=false)
     */
    private $usermodified = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timestart", type="bigint", nullable=false)
     */
    private $timestart = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timeend", type="bigint", nullable=false)
     */
    private $timeend = '0';



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
     * Set course
     *
     * @param integer $course
     * @return MdlForumDiscussions
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return integer 
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set forum
     *
     * @param integer $forum
     * @return MdlForumDiscussions
     */
    public function setForum($forum)
    {
        $this->forum = $forum;

        return $this;
    }

    /**
     * Get forum
     *
     * @return integer 
     */
    public function getForum()
    {
        return $this->forum;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlForumDiscussions
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstpost
     *
     * @param integer $firstpost
     * @return MdlForumDiscussions
     */
    public function setFirstpost($firstpost)
    {
        $this->firstpost = $firstpost;

        return $this;
    }

    /**
     * Get firstpost
     *
     * @return integer 
     */
    public function getFirstpost()
    {
        return $this->firstpost;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlForumDiscussions
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
     * Set groupid
     *
     * @param integer $groupid
     * @return MdlForumDiscussions
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
     * Set assessed
     *
     * @param boolean $assessed
     * @return MdlForumDiscussions
     */
    public function setAssessed($assessed)
    {
        $this->assessed = $assessed;

        return $this;
    }

    /**
     * Get assessed
     *
     * @return boolean 
     */
    public function getAssessed()
    {
        return $this->assessed;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlForumDiscussions
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
     * Set usermodified
     *
     * @param integer $usermodified
     * @return MdlForumDiscussions
     */
    public function setUsermodified($usermodified)
    {
        $this->usermodified = $usermodified;

        return $this;
    }

    /**
     * Get usermodified
     *
     * @return integer 
     */
    public function getUsermodified()
    {
        return $this->usermodified;
    }

    /**
     * Set timestart
     *
     * @param integer $timestart
     * @return MdlForumDiscussions
     */
    public function setTimestart($timestart)
    {
        $this->timestart = $timestart;

        return $this;
    }

    /**
     * Get timestart
     *
     * @return integer 
     */
    public function getTimestart()
    {
        return $this->timestart;
    }

    /**
     * Set timeend
     *
     * @param integer $timeend
     * @return MdlForumDiscussions
     */
    public function setTimeend($timeend)
    {
        $this->timeend = $timeend;

        return $this;
    }

    /**
     * Get timeend
     *
     * @return integer 
     */
    public function getTimeend()
    {
        return $this->timeend;
    }
}
