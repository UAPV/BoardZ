<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlMnetserviceEnrolEnrolments
 *
 * @ORM\Table(name="mdl_mnetservice_enrol_enrolments", indexes={@ORM\Index(name="mdl_mnetenroenro_use_ix", columns={"userid"}), @ORM\Index(name="mdl_mnetenroenro_hos_ix", columns={"hostid"})})
 * @ORM\Entity
 */
class MdlMnetserviceEnrolEnrolments
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
    private $hostid;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="remotecourseid", type="bigint", nullable=false)
     */
    private $remotecourseid;

    /**
     * @var string
     *
     * @ORM\Column(name="rolename", type="string", length=255, nullable=false)
     */
    private $rolename = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="enroltime", type="bigint", nullable=false)
     */
    private $enroltime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="enroltype", type="string", length=20, nullable=false)
     */
    private $enroltype = '';



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
     * @return MdlMnetserviceEnrolEnrolments
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
     * Set userid
     *
     * @param integer $userid
     * @return MdlMnetserviceEnrolEnrolments
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
     * Set remotecourseid
     *
     * @param integer $remotecourseid
     * @return MdlMnetserviceEnrolEnrolments
     */
    public function setRemotecourseid($remotecourseid)
    {
        $this->remotecourseid = $remotecourseid;

        return $this;
    }

    /**
     * Get remotecourseid
     *
     * @return integer 
     */
    public function getRemotecourseid()
    {
        return $this->remotecourseid;
    }

    /**
     * Set rolename
     *
     * @param string $rolename
     * @return MdlMnetserviceEnrolEnrolments
     */
    public function setRolename($rolename)
    {
        $this->rolename = $rolename;

        return $this;
    }

    /**
     * Get rolename
     *
     * @return string 
     */
    public function getRolename()
    {
        return $this->rolename;
    }

    /**
     * Set enroltime
     *
     * @param integer $enroltime
     * @return MdlMnetserviceEnrolEnrolments
     */
    public function setEnroltime($enroltime)
    {
        $this->enroltime = $enroltime;

        return $this;
    }

    /**
     * Get enroltime
     *
     * @return integer 
     */
    public function getEnroltime()
    {
        return $this->enroltime;
    }

    /**
     * Set enroltype
     *
     * @param string $enroltype
     * @return MdlMnetserviceEnrolEnrolments
     */
    public function setEnroltype($enroltype)
    {
        $this->enroltype = $enroltype;

        return $this;
    }

    /**
     * Get enroltype
     *
     * @return string 
     */
    public function getEnroltype()
    {
        return $this->enroltype;
    }
}
