<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlMnetRpc
 *
 * @ORM\Table(name="mdl_mnet_rpc", indexes={@ORM\Index(name="mdl_mnetrpc_enaxml_ix", columns={"enabled", "xmlrpcpath"})})
 * @ORM\Entity
 */
class MdlMnetRpc
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
     * @var string
     *
     * @ORM\Column(name="functionname", type="string", length=40, nullable=false)
     */
    private $functionname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="xmlrpcpath", type="string", length=80, nullable=false)
     */
    private $xmlrpcpath = '';

    /**
     * @var string
     *
     * @ORM\Column(name="plugintype", type="string", length=20, nullable=false)
     */
    private $plugintype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pluginname", type="string", length=20, nullable=false)
     */
    private $pluginname = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="help", type="text", nullable=false)
     */
    private $help;

    /**
     * @var string
     *
     * @ORM\Column(name="profile", type="text", nullable=false)
     */
    private $profile;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=100, nullable=false)
     */
    private $filename = '';

    /**
     * @var string
     *
     * @ORM\Column(name="classname", type="string", length=150, nullable=true)
     */
    private $classname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="static", type="boolean", nullable=true)
     */
    private $static;



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
     * Set functionname
     *
     * @param string $functionname
     * @return MdlMnetRpc
     */
    public function setFunctionname($functionname)
    {
        $this->functionname = $functionname;

        return $this;
    }

    /**
     * Get functionname
     *
     * @return string 
     */
    public function getFunctionname()
    {
        return $this->functionname;
    }

    /**
     * Set xmlrpcpath
     *
     * @param string $xmlrpcpath
     * @return MdlMnetRpc
     */
    public function setXmlrpcpath($xmlrpcpath)
    {
        $this->xmlrpcpath = $xmlrpcpath;

        return $this;
    }

    /**
     * Get xmlrpcpath
     *
     * @return string 
     */
    public function getXmlrpcpath()
    {
        return $this->xmlrpcpath;
    }

    /**
     * Set plugintype
     *
     * @param string $plugintype
     * @return MdlMnetRpc
     */
    public function setPlugintype($plugintype)
    {
        $this->plugintype = $plugintype;

        return $this;
    }

    /**
     * Get plugintype
     *
     * @return string 
     */
    public function getPlugintype()
    {
        return $this->plugintype;
    }

    /**
     * Set pluginname
     *
     * @param string $pluginname
     * @return MdlMnetRpc
     */
    public function setPluginname($pluginname)
    {
        $this->pluginname = $pluginname;

        return $this;
    }

    /**
     * Get pluginname
     *
     * @return string 
     */
    public function getPluginname()
    {
        return $this->pluginname;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return MdlMnetRpc
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set help
     *
     * @param string $help
     * @return MdlMnetRpc
     */
    public function setHelp($help)
    {
        $this->help = $help;

        return $this;
    }

    /**
     * Get help
     *
     * @return string 
     */
    public function getHelp()
    {
        return $this->help;
    }

    /**
     * Set profile
     *
     * @param string $profile
     * @return MdlMnetRpc
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return string 
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return MdlMnetRpc
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set classname
     *
     * @param string $classname
     * @return MdlMnetRpc
     */
    public function setClassname($classname)
    {
        $this->classname = $classname;

        return $this;
    }

    /**
     * Get classname
     *
     * @return string 
     */
    public function getClassname()
    {
        return $this->classname;
    }

    /**
     * Set static
     *
     * @param boolean $static
     * @return MdlMnetRpc
     */
    public function setStatic($static)
    {
        $this->static = $static;

        return $this;
    }

    /**
     * Get static
     *
     * @return boolean 
     */
    public function getStatic()
    {
        return $this->static;
    }
}
