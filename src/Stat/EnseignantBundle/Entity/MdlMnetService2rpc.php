<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlMnetService2rpc
 *
 * @ORM\Table(name="mdl_mnet_service2rpc", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_mnetserv_rpcser_uix", columns={"rpcid", "serviceid"})})
 * @ORM\Entity
 */
class MdlMnetService2rpc
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
     * @ORM\Column(name="serviceid", type="bigint", nullable=false)
     */
    private $serviceid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rpcid", type="bigint", nullable=false)
     */
    private $rpcid = '0';



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
     * Set serviceid
     *
     * @param integer $serviceid
     * @return MdlMnetService2rpc
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
     * Set rpcid
     *
     * @param integer $rpcid
     * @return MdlMnetService2rpc
     */
    public function setRpcid($rpcid)
    {
        $this->rpcid = $rpcid;

        return $this;
    }

    /**
     * Get rpcid
     *
     * @return integer 
     */
    public function getRpcid()
    {
        return $this->rpcid;
    }
}
