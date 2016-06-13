<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlExternalServicesUsers
 *
 * @ORM\Table(name="mdl_external_services_users", indexes={@ORM\Index(name="mdl_exteservuser_ext_ix", columns={"externalserviceid"}), @ORM\Index(name="mdl_exteservuser_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlExternalServicesUsers
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
     * @ORM\Column(name="externalserviceid", type="bigint", nullable=false)
     */
    private $externalserviceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

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
     * @ORM\Column(name="timecreated", type="bigint", nullable=true)
     */
    private $timecreated;



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
     * Set externalserviceid
     *
     * @param integer $externalserviceid
     * @return MdlExternalServicesUsers
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
     * Set userid
     *
     * @param integer $userid
     * @return MdlExternalServicesUsers
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
     * Set iprestriction
     *
     * @param string $iprestriction
     * @return MdlExternalServicesUsers
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
     * @return MdlExternalServicesUsers
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
     * @return MdlExternalServicesUsers
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
}
