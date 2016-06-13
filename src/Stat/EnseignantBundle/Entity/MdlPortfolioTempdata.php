<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlPortfolioTempdata
 *
 * @ORM\Table(name="mdl_portfolio_tempdata", indexes={@ORM\Index(name="mdl_porttemp_use_ix", columns={"userid"}), @ORM\Index(name="mdl_porttemp_ins_ix", columns={"instance"})})
 * @ORM\Entity
 */
class MdlPortfolioTempdata
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
     * @ORM\Column(name="data", type="text", nullable=true)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="expirytime", type="bigint", nullable=false)
     */
    private $expirytime;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="instance", type="bigint", nullable=true)
     */
    private $instance = '0';



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
     * Set data
     *
     * @param string $data
     * @return MdlPortfolioTempdata
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set expirytime
     *
     * @param integer $expirytime
     * @return MdlPortfolioTempdata
     */
    public function setExpirytime($expirytime)
    {
        $this->expirytime = $expirytime;

        return $this;
    }

    /**
     * Get expirytime
     *
     * @return integer 
     */
    public function getExpirytime()
    {
        return $this->expirytime;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlPortfolioTempdata
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set instance
     *
     * @param integer $instance
     * @return MdlPortfolioTempdata
     */
    public function setInstance($instance)
    {
        $this->instance = $instance;

        return $this;
    }

    /**
     * Get instance
     *
     * @return integer 
     */
    public function getInstance()
    {
        return $this->instance;
    }
}
