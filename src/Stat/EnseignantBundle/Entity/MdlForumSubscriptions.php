<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlForumSubscriptions
 *
 * @ORM\Table(name="mdl_forum_subscriptions", indexes={@ORM\Index(name="mdl_forusubs_use_ix", columns={"userid"}), @ORM\Index(name="mdl_forusubs_for_ix", columns={"forum"})})
 * @ORM\Entity
 */
class MdlForumSubscriptions
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
     * @ORM\Column(name="forum", type="bigint", nullable=false)
     */
    private $forum = '0';



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
     * @return MdlForumSubscriptions
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
     * @return MdlForumSubscriptions
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
}
