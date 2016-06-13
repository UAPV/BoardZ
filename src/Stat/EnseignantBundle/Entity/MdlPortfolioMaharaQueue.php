<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlPortfolioMaharaQueue
 *
 * @ORM\Table(name="mdl_portfolio_mahara_queue", indexes={@ORM\Index(name="mdl_portmahaqueu_tok_ix", columns={"token"}), @ORM\Index(name="mdl_portmahaqueu_tra_ix", columns={"transferid"})})
 * @ORM\Entity
 */
class MdlPortfolioMaharaQueue
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
     * @ORM\Column(name="transferid", type="bigint", nullable=false)
     */
    private $transferid;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=50, nullable=false)
     */
    private $token = '';



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
     * Set transferid
     *
     * @param integer $transferid
     * @return MdlPortfolioMaharaQueue
     */
    public function setTransferid($transferid)
    {
        $this->transferid = $transferid;

        return $this;
    }

    /**
     * Get transferid
     *
     * @return integer 
     */
    public function getTransferid()
    {
        return $this->transferid;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return MdlPortfolioMaharaQueue
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }
}
