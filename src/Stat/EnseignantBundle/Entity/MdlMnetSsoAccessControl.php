<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlMnetSsoAccessControl
 *
 * @ORM\Table(name="mdl_mnet_sso_access_control", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_mnetssoaccecont_mneuse_uix", columns={"mnet_host_id", "username"})})
 * @ORM\Entity
 */
class MdlMnetSsoAccessControl
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
     * @ORM\Column(name="username", type="string", length=100, nullable=false)
     */
    private $username = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="mnet_host_id", type="bigint", nullable=false)
     */
    private $mnetHostId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="accessctrl", type="string", length=20, nullable=false)
     */
    private $accessctrl = 'allow';



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
     * Set username
     *
     * @param string $username
     * @return MdlMnetSsoAccessControl
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set mnetHostId
     *
     * @param integer $mnetHostId
     * @return MdlMnetSsoAccessControl
     */
    public function setMnetHostId($mnetHostId)
    {
        $this->mnetHostId = $mnetHostId;

        return $this;
    }

    /**
     * Get mnetHostId
     *
     * @return integer 
     */
    public function getMnetHostId()
    {
        return $this->mnetHostId;
    }

    /**
     * Set accessctrl
     *
     * @param string $accessctrl
     * @return MdlMnetSsoAccessControl
     */
    public function setAccessctrl($accessctrl)
    {
        $this->accessctrl = $accessctrl;

        return $this;
    }

    /**
     * Get accessctrl
     *
     * @return string 
     */
    public function getAccessctrl()
    {
        return $this->accessctrl;
    }
}
