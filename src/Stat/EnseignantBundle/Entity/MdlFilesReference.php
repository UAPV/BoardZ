<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlFilesReference
 *
 * @ORM\Table(name="mdl_files_reference", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_filerefe_repref_uix", columns={"repositoryid", "referencehash"})}, indexes={@ORM\Index(name="mdl_filerefe_rep_ix", columns={"repositoryid"})})
 * @ORM\Entity
 */
class MdlFilesReference
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
     * @ORM\Column(name="repositoryid", type="bigint", nullable=false)
     */
    private $repositoryid;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastsync", type="bigint", nullable=true)
     */
    private $lastsync;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="text", nullable=true)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="referencehash", type="string", length=40, nullable=false)
     */
    private $referencehash = '';



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
     * Set repositoryid
     *
     * @param integer $repositoryid
     * @return MdlFilesReference
     */
    public function setRepositoryid($repositoryid)
    {
        $this->repositoryid = $repositoryid;

        return $this;
    }

    /**
     * Get repositoryid
     *
     * @return integer 
     */
    public function getRepositoryid()
    {
        return $this->repositoryid;
    }

    /**
     * Set lastsync
     *
     * @param integer $lastsync
     * @return MdlFilesReference
     */
    public function setLastsync($lastsync)
    {
        $this->lastsync = $lastsync;

        return $this;
    }

    /**
     * Get lastsync
     *
     * @return integer 
     */
    public function getLastsync()
    {
        return $this->lastsync;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return MdlFilesReference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set referencehash
     *
     * @param string $referencehash
     * @return MdlFilesReference
     */
    public function setReferencehash($referencehash)
    {
        $this->referencehash = $referencehash;

        return $this;
    }

    /**
     * Get referencehash
     *
     * @return string 
     */
    public function getReferencehash()
    {
        return $this->referencehash;
    }
}
