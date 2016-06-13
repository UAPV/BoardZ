<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlogAssociation
 *
 * @ORM\Table(name="mdl_blog_association", indexes={@ORM\Index(name="mdl_blogasso_con_ix", columns={"contextid"}), @ORM\Index(name="mdl_blogasso_blo_ix", columns={"blogid"})})
 * @ORM\Entity
 */
class MdlBlogAssociation
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
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid;

    /**
     * @var integer
     *
     * @ORM\Column(name="blogid", type="bigint", nullable=false)
     */
    private $blogid;



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
     * Set contextid
     *
     * @param integer $contextid
     * @return MdlBlogAssociation
     */
    public function setContextid($contextid)
    {
        $this->contextid = $contextid;

        return $this;
    }

    /**
     * Get contextid
     *
     * @return integer 
     */
    public function getContextid()
    {
        return $this->contextid;
    }

    /**
     * Set blogid
     *
     * @param integer $blogid
     * @return MdlBlogAssociation
     */
    public function setBlogid($blogid)
    {
        $this->blogid = $blogid;

        return $this;
    }

    /**
     * Get blogid
     *
     * @return integer 
     */
    public function getBlogid()
    {
        return $this->blogid;
    }
}
