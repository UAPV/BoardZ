<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlExternalTokens
 *
 * @ORM\Table(name="mdl_external_tokens", indexes={@ORM\Index(name="mdl_extetoke_use_ix", columns={"userid"}), @ORM\Index(name="mdl_extetoke_ext_ix", columns={"externalserviceid"}), @ORM\Index(name="mdl_extetoke_con_ix", columns={"contextid"}), @ORM\Index(name="mdl_extetoke_cre_ix", columns={"creatorid"})})
 * @ORM\Entity
 */
class MdlExternalTokens
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
     * @ORM\Column(name="token", type="string", length=128, nullable=false)
     */
    private $token = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="tokentype", type="smallint", nullable=false)
     */
    private $tokentype;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="externalserviceid", type="bigint", nullable=false)
     */
    private $externalserviceid;

    /**
     * @var string
     *
     * @ORM\Column(name="sid", type="string", length=128, nullable=true)
     */
    private $sid;

    /**
     * @var integer
     *
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid;

    /**
     * @var integer
     *
     * @ORM\Column(name="creatorid", type="bigint", nullable=false)
     */
    private $creatorid = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="iprestriction", type="string", length=255, nullable=true)
     */
    private $iprestriction;

    /**
     * @var integer
     *
     * @ORM\Column(name="validuntil", type="bigint", nullable=true)
     */
    private $validuntil;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastaccess", type="bigint", nullable=true)
     */
    private $lastaccess;



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
     * Set token
     *
     * @param string $token
     * @return MdlExternalTokens
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

    /**
     * Set tokentype
     *
     * @param integer $tokentype
     * @return MdlExternalTokens
     */
    public function setTokentype($tokentype)
    {
        $this->tokentype = $tokentype;

        return $this;
    }

    /**
     * Get tokentype
     *
     * @return integer 
     */
    public function getTokentype()
    {
        return $this->tokentype;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlExternalTokens
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
     * Set externalserviceid
     *
     * @param integer $externalserviceid
     * @return MdlExternalTokens
     */
    public function setExternalserviceid($externalserviceid)
    {
        $this->externalserviceid = $externalserviceid;

        return $this;
    }

    /**
     * Get externalserviceid
     *
     * @return integer 
     */
    public function getExternalserviceid()
    {
        return $this->externalserviceid;
    }

    /**
     * Set sid
     *
     * @param string $sid
     * @return MdlExternalTokens
     */
    public function setSid($sid)
    {
        $this->sid = $sid;

        return $this;
    }

    /**
     * Get sid
     *
     * @return string 
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set contextid
     *
     * @param integer $contextid
     * @return MdlExternalTokens
     */
    public function setContextid($contextid)
    {
        $this->contextid = $contextid;

        return $this;
    }

    /**
     * Get contextid
     *
     * @return integer 
     */
    public function getContextid()
    {
        return $this->contextid;
    }

    /**
     * Set creatorid
     *
     * @param integer $creatorid
     * @return MdlExternalTokens
     */
    public function setCreatorid($creatorid)
    {
        $this->creatorid = $creatorid;

        return $this;
    }

    /**
     * Get creatorid
     *
     * @return integer 
     */
    public function getCreatorid()
    {
        return $this->creatorid;
    }

    /**
     * Set iprestriction
     *
     * @param string $iprestriction
     * @return MdlExternalTokens
     */
    public function setIprestriction($iprestriction)
    {
        $this->iprestriction = $iprestriction;

        return $this;
    }

    /**
     * Get iprestriction
     *
     * @return string 
     */
    public function getIprestriction()
    {
        return $this->iprestriction;
    }

    /**
     * Set validuntil
     *
     * @param integer $validuntil
     * @return MdlExternalTokens
     */
    public function setValiduntil($validuntil)
    {
        $this->validuntil = $validuntil;

        return $this;
    }

    /**
     * Get validuntil
     *
     * @return integer 
     */
    public function getValiduntil()
    {
        return $this->validuntil;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlExternalTokens
     */
    public function setTimecreated($timecreated)
    {
        $this->timecreated = $timecreated;

        return $this;
    }

    /**
     * Get timecreated
     *
     * @return integer 
     */
    public function getTimecreated()
    {
        return $this->timecreated;
    }

    /**
     * Set lastaccess
     *
     * @param integer $lastaccess
     * @return MdlExternalTokens
     */
    public function setLastaccess($lastaccess)
    {
        $this->lastaccess = $lastaccess;

        return $this;
    }

    /**
     * Get lastaccess
     *
     * @return integer 
     */
    public function getLastaccess()
    {
        return $this->lastaccess;
    }
}
