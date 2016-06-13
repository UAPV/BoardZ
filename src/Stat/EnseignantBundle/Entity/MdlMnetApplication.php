<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlMnetApplication
 *
 * @ORM\Table(name="mdl_mnet_application")
 * @ORM\Entity
 */
class MdlMnetApplication
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
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="display_name", type="string", length=50, nullable=false)
     */
    private $displayName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="xmlrpc_server_url", type="string", length=255, nullable=false)
     */
    private $xmlrpcServerUrl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sso_land_url", type="string", length=255, nullable=false)
     */
    private $ssoLandUrl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sso_jump_url", type="string", length=255, nullable=false)
     */
    private $ssoJumpUrl = '';



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
     * Set name
     *
     * @param string $name
     * @return MdlMnetApplication
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
     * Set displayName
     *
     * @param string $displayName
     * @return MdlMnetApplication
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * Get displayName
     *
     * @return string 
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Set xmlrpcServerUrl
     *
     * @param string $xmlrpcServerUrl
     * @return MdlMnetApplication
     */
    public function setXmlrpcServerUrl($xmlrpcServerUrl)
    {
        $this->xmlrpcServerUrl = $xmlrpcServerUrl;

        return $this;
    }

    /**
     * Get xmlrpcServerUrl
     *
     * @return string 
     */
    public function getXmlrpcServerUrl()
    {
        return $this->xmlrpcServerUrl;
    }

    /**
     * Set ssoLandUrl
     *
     * @param string $ssoLandUrl
     * @return MdlMnetApplication
     */
    public function setSsoLandUrl($ssoLandUrl)
    {
        $this->ssoLandUrl = $ssoLandUrl;

        return $this;
    }

    /**
     * Get ssoLandUrl
     *
     * @return string 
     */
    public function getSsoLandUrl()
    {
        return $this->ssoLandUrl;
    }

    /**
     * Set ssoJumpUrl
     *
     * @param string $ssoJumpUrl
     * @return MdlMnetApplication
     */
    public function setSsoJumpUrl($ssoJumpUrl)
    {
        $this->ssoJumpUrl = $ssoJumpUrl;

        return $this;
    }

    /**
     * Get ssoJumpUrl
     *
     * @return string 
     */
    public function getSsoJumpUrl()
    {
        return $this->ssoJumpUrl;
    }
}
