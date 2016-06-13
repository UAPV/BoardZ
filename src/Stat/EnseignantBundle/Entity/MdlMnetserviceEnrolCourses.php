<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlMnetserviceEnrolCourses
 *
 * @ORM\Table(name="mdl_mnetservice_enrol_courses", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_mnetenrocour_hosrem_uix", columns={"hostid", "remoteid"})})
 * @ORM\Entity
 */
class MdlMnetserviceEnrolCourses
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
     * @ORM\Column(name="remoteid", type="bigint", nullable=false)
     */
    private $remoteid;

    /**
     * @var integer
     *
     * @ORM\Column(name="categoryid", type="bigint", nullable=false)
     */
    private $categoryid;

    /**
     * @var string
     *
     * @ORM\Column(name="categoryname", type="string", length=255, nullable=false)
     */
    private $categoryname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", length=254, nullable=false)
     */
    private $fullname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="shortname", type="string", length=100, nullable=false)
     */
    private $shortname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="idnumber", type="string", length=100, nullable=false)
     */
    private $idnumber = '';

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", nullable=false)
     */
    private $summary;

    /**
     * @var integer
     *
     * @ORM\Column(name="summaryformat", type="smallint", nullable=true)
     */
    private $summaryformat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="startdate", type="bigint", nullable=false)
     */
    private $startdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="roleid", type="bigint", nullable=false)
     */
    private $roleid;

    /**
     * @var string
     *
     * @ORM\Column(name="rolename", type="string", length=255, nullable=false)
     */
    private $rolename = '';



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
     * @return MdlMnetserviceEnrolCourses
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
     * Set remoteid
     *
     * @param integer $remoteid
     * @return MdlMnetserviceEnrolCourses
     */
    public function setRemoteid($remoteid)
    {
        $this->remoteid = $remoteid;

        return $this;
    }

    /**
     * Get remoteid
     *
     * @return integer 
     */
    public function getRemoteid()
    {
        return $this->remoteid;
    }

    /**
     * Set categoryid
     *
     * @param integer $categoryid
     * @return MdlMnetserviceEnrolCourses
     */
    public function setCategoryid($categoryid)
    {
        $this->categoryid = $categoryid;

        return $this;
    }

    /**
     * Get categoryid
     *
     * @return integer 
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }

    /**
     * Set categoryname
     *
     * @param string $categoryname
     * @return MdlMnetserviceEnrolCourses
     */
    public function setCategoryname($categoryname)
    {
        $this->categoryname = $categoryname;

        return $this;
    }

    /**
     * Get categoryname
     *
     * @return string 
     */
    public function getCategoryname()
    {
        return $this->categoryname;
    }

    /**
     * Set sortorder
     *
     * @param integer $sortorder
     * @return MdlMnetserviceEnrolCourses
     */
    public function setSortorder($sortorder)
    {
        $this->sortorder = $sortorder;

        return $this;
    }

    /**
     * Get sortorder
     *
     * @return integer 
     */
    public function getSortorder()
    {
        return $this->sortorder;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     * @return MdlMnetserviceEnrolCourses
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set shortname
     *
     * @param string $shortname
     * @return MdlMnetserviceEnrolCourses
     */
    public function setShortname($shortname)
    {
        $this->shortname = $shortname;

        return $this;
    }

    /**
     * Get shortname
     *
     * @return string 
     */
    public function getShortname()
    {
        return $this->shortname;
    }

    /**
     * Set idnumber
     *
     * @param string $idnumber
     * @return MdlMnetserviceEnrolCourses
     */
    public function setIdnumber($idnumber)
    {
        $this->idnumber = $idnumber;

        return $this;
    }

    /**
     * Get idnumber
     *
     * @return string 
     */
    public function getIdnumber()
    {
        return $this->idnumber;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return MdlMnetserviceEnrolCourses
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set summaryformat
     *
     * @param integer $summaryformat
     * @return MdlMnetserviceEnrolCourses
     */
    public function setSummaryformat($summaryformat)
    {
        $this->summaryformat = $summaryformat;

        return $this;
    }

    /**
     * Get summaryformat
     *
     * @return integer 
     */
    public function getSummaryformat()
    {
        return $this->summaryformat;
    }

    /**
     * Set startdate
     *
     * @param integer $startdate
     * @return MdlMnetserviceEnrolCourses
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return integer 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set roleid
     *
     * @param integer $roleid
     * @return MdlMnetserviceEnrolCourses
     */
    public function setRoleid($roleid)
    {
        $this->roleid = $roleid;

        return $this;
    }

    /**
     * Get roleid
     *
     * @return integer 
     */
    public function getRoleid()
    {
        return $this->roleid;
    }

    /**
     * Set rolename
     *
     * @param string $rolename
     * @return MdlMnetserviceEnrolCourses
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
}
