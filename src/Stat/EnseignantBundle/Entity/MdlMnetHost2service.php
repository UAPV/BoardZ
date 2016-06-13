<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlMnetHost2service
 *
 * @ORM\Table(name="mdl_mnet_host2service", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_mnethost_hosser_uix", columns={"hostid", "serviceid"})})
 * @ORM\Entity
 */
class MdlMnetHost2service
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
     * @ORM\Column(name="hostid", type="bigint", nullable=false)
     */
    private $hostid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="serviceid", type="bigint", nullable=false)
     */
    private $serviceid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="publish", type="boolean", nullable=false)
     */
    private $publish = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="subscribe", type="boolean", nullable=false)
     */
    private $subscribe = '0';



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
     * Set hostid
     *
     * @param integer $hostid
     * @return MdlMnetHost2service
     */
    public function setHostid($hostid)
    {
        $this->hostid = $hostid;

        return $this;
    }

    /**
     * Get hostid
     *
     * @return integer 
     */
    public function getHostid()
    {
        return $this->hostid;
    }

    /**
     * Set serviceid
     *
     * @param integer $serviceid
     * @return MdlMnetHost2service
     */
    public function setServiceid($serviceid)
    {
        $this->serviceid = $serviceid;

        return $this;
    }

    /**
     * Get serviceid
     *
     * @return integer 
     */
    public function getServiceid()
    {
        return $this->serviceid;
    }

    /**
     * Set publish
     *
     * @param boolean $publish
     * @return MdlMnetHost2service
     */
    public function setPublish($publish)
    {
        $this->publish = $publish;

        return $this;
    }

    /**
     * Get publish
     *
     * @return boolean 
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * Set subscribe
     *
     * @param boolean $subscribe
     * @return MdlMnetHost2service
     */
    public function setSubscribe($subscribe)
    {
        $this->subscribe = $subscribe;

        return $this;
    }

    /**
     * Get subscribe
     *
     * @return boolean 
     */
    public function getSubscribe()
    {
        return $this->subscribe;
    }
}
