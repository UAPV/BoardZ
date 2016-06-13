<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlMnetRemoteRpc
 *
 * @ORM\Table(name="mdl_mnet_remote_rpc")
 * @ORM\Entity
 */
class MdlMnetRemoteRpc
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
    private $enabled;



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
     * @return MdlMnetRemoteRpc
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
     * @return MdlMnetRemoteRpc
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
     * @return MdlMnetRemoteRpc
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
     * @return MdlMnetRemoteRpc
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
     * @return MdlMnetRemoteRpc
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
}
