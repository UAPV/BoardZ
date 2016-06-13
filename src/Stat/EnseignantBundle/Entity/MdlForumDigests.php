<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlForumDigests
 *
 * @ORM\Table(name="mdl_forum_digests", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_forudige_forusemai_uix", columns={"forum", "userid", "maildigest"})}, indexes={@ORM\Index(name="mdl_forudige_use_ix", columns={"userid"}), @ORM\Index(name="mdl_forudige_for_ix", columns={"forum"})})
 * @ORM\Entity
 */
class MdlForumDigests
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
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="forum", type="bigint", nullable=false)
     */
    private $forum;

    /**
     * @var boolean
     *
     * @ORM\Column(name="maildigest", type="boolean", nullable=false)
     */
    private $maildigest = '-1';



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
     * @return MdlForumDigests
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
     * Set forum
     *
     * @param integer $forum
     * @return MdlForumDigests
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
     * Set maildigest
     *
     * @param boolean $maildigest
     * @return MdlForumDigests
     */
    public function setMaildigest($maildigest)
    {
        $this->maildigest = $maildigest;

        return $this;
    }

    /**
     * Get maildigest
     *
     * @return boolean 
     */
    public function getMaildigest()
    {
        return $this->maildigest;
    }
}
