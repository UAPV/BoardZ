<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlContext
 *
 * @ORM\Table(name="mdl_context", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_cont_conins_uix", columns={"contextlevel", "instanceid"})}, indexes={@ORM\Index(name="mdl_cont_ins_ix", columns={"instanceid"}), @ORM\Index(name="mdl_cont_pat_ix", columns={"path"})})
 * @ORM\Entity
 */
class MdlContext
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
     * @ORM\Column(name="contextlevel", type="bigint", nullable=false)
     */
    private $contextlevel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="instanceid", type="bigint", nullable=false)
     */
    private $instanceid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var boolean
     *
     * @ORM\Column(name="depth", type="boolean", nullable=false)
     */
    private $depth = '0';



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
     * Set contextlevel
     *
     * @param integer $contextlevel
     * @return MdlContext
     */
    public function setContextlevel($contextlevel)
    {
        $this->contextlevel = $contextlevel;

        return $this;
    }

    /**
     * Get contextlevel
     *
     * @return integer 
     */
    public function getContextlevel()
    {
        return $this->contextlevel;
    }

    /**
     * Set instanceid
     *
     * @param integer $instanceid
     * @return MdlContext
     */
    public function setInstanceid($instanceid)
    {
        $this->instanceid = $instanceid;

        return $this;
    }

    /**
     * Get instanceid
     *
     * @return integer 
     */
    public function getInstanceid()
    {
        return $this->instanceid;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return MdlContext
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set depth
     *
     * @param boolean $depth
     * @return MdlContext
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Get depth
     *
     * @return boolean 
     */
    public function getDepth()
    {
        return $this->depth;
    }
}
