<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlForumPosts
 *
 * @ORM\Table(name="mdl_forum_posts", indexes={@ORM\Index(name="mdl_forupost_use_ix", columns={"userid"}), @ORM\Index(name="mdl_forupost_cre_ix", columns={"created"}), @ORM\Index(name="mdl_forupost_mai_ix", columns={"mailed"}), @ORM\Index(name="mdl_forupost_dis_ix", columns={"discussion"}), @ORM\Index(name="mdl_forupost_par_ix", columns={"parent"})})
 * @ORM\Entity
 */
class MdlForumPosts
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
     * @ORM\Column(name="discussion", type="bigint", nullable=false)
     */
    private $discussion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="parent", type="bigint", nullable=false)
     */
    private $parent = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="created", type="bigint", nullable=false)
     */
    private $created = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="modified", type="bigint", nullable=false)
     */
    private $modified = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="mailed", type="boolean", nullable=false)
     */
    private $mailed = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=false)
     */
    private $subject = '';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var boolean
     *
     * @ORM\Column(name="messageformat", type="boolean", nullable=false)
     */
    private $messageformat = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="messagetrust", type="boolean", nullable=false)
     */
    private $messagetrust = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="attachment", type="string", length=100, nullable=false)
     */
    private $attachment = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="totalscore", type="smallint", nullable=false)
     */
    private $totalscore = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mailnow", type="bigint", nullable=false)
     */
    private $mailnow = '0';



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
     * Set discussion
     *
     * @param integer $discussion
     * @return MdlForumPosts
     */
    public function setDiscussion($discussion)
    {
        $this->discussion = $discussion;

        return $this;
    }

    /**
     * Get discussion
     *
     * @return integer 
     */
    public function getDiscussion()
    {
        return $this->discussion;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     * @return MdlForumPosts
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return integer 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlForumPosts
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
     * Set created
     *
     * @param integer $created
     * @return MdlForumPosts
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return integer 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param integer $modified
     * @return MdlForumPosts
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return integer 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set mailed
     *
     * @param boolean $mailed
     * @return MdlForumPosts
     */
    public function setMailed($mailed)
    {
        $this->mailed = $mailed;

        return $this;
    }

    /**
     * Get mailed
     *
     * @return boolean 
     */
    public function getMailed()
    {
        return $this->mailed;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return MdlForumPosts
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return MdlForumPosts
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set messageformat
     *
     * @param boolean $messageformat
     * @return MdlForumPosts
     */
    public function setMessageformat($messageformat)
    {
        $this->messageformat = $messageformat;

        return $this;
    }

    /**
     * Get messageformat
     *
     * @return boolean 
     */
    public function getMessageformat()
    {
        return $this->messageformat;
    }

    /**
     * Set messagetrust
     *
     * @param boolean $messagetrust
     * @return MdlForumPosts
     */
    public function setMessagetrust($messagetrust)
    {
        $this->messagetrust = $messagetrust;

        return $this;
    }

    /**
     * Get messagetrust
     *
     * @return boolean 
     */
    public function getMessagetrust()
    {
        return $this->messagetrust;
    }

    /**
     * Set attachment
     *
     * @param string $attachment
     * @return MdlForumPosts
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return string 
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set totalscore
     *
     * @param integer $totalscore
     * @return MdlForumPosts
     */
    public function setTotalscore($totalscore)
    {
        $this->totalscore = $totalscore;

        return $this;
    }

    /**
     * Get totalscore
     *
     * @return integer 
     */
    public function getTotalscore()
    {
        return $this->totalscore;
    }

    /**
     * Set mailnow
     *
     * @param integer $mailnow
     * @return MdlForumPosts
     */
    public function setMailnow($mailnow)
    {
        $this->mailnow = $mailnow;

        return $this;
    }

    /**
     * Get mailnow
     *
     * @return integer 
     */
    public function getMailnow()
    {
        return $this->mailnow;
    }
}
