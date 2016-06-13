<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlTagCorrelation
 *
 * @ORM\Table(name="mdl_tag_correlation", indexes={@ORM\Index(name="mdl_tagcorr_tag_ix", columns={"tagid"})})
 * @ORM\Entity
 */
class MdlTagCorrelation
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
     * @ORM\Column(name="tagid", type="bigint", nullable=false)
     */
    private $tagid;

    /**
     * @var string
     *
     * @ORM\Column(name="correlatedtags", type="text", nullable=false)
     */
    private $correlatedtags;



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
     * Set tagid
     *
     * @param integer $tagid
     * @return MdlTagCorrelation
     */
    public function setTagid($tagid)
    {
        $this->tagid = $tagid;

        return $this;
    }

    /**
     * Get tagid
     *
     * @return integer 
     */
    public function getTagid()
    {
        return $this->tagid;
    }

    /**
     * Set correlatedtags
     *
     * @param string $correlatedtags
     * @return MdlTagCorrelation
     */
    public function setCorrelatedtags($correlatedtags)
    {
        $this->correlatedtags = $correlatedtags;

        return $this;
    }

    /**
     * Get correlatedtags
     *
     * @return string 
     */
    public function getCorrelatedtags()
    {
        return $this->correlatedtags;
    }
}
