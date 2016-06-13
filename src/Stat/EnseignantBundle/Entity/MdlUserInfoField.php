<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUserInfoField
 *
 * @ORM\Table(name="mdl_user_info_field")
 * @ORM\Entity
 */
class MdlUserInfoField
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
     * @ORM\Column(name="shortname", type="string", length=255, nullable=false)
     */
    private $shortname = 'shortname';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="datatype", type="string", length=255, nullable=false)
     */
    private $datatype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="descriptionformat", type="boolean", nullable=false)
     */
    private $descriptionformat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="categoryid", type="bigint", nullable=false)
     */
    private $categoryid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="required", type="boolean", nullable=false)
     */
    private $required = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    private $locked = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="visible", type="smallint", nullable=false)
     */
    private $visible = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="forceunique", type="boolean", nullable=false)
     */
    private $forceunique = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="signup", type="boolean", nullable=false)
     */
    private $signup = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="defaultdata", type="text", nullable=true)
     */
    private $defaultdata;

    /**
     * @var boolean
     *
     * @ORM\Column(name="defaultdataformat", type="boolean", nullable=false)
     */
    private $defaultdataformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="param1", type="text", nullable=true)
     */
    private $param1;

    /**
     * @var string
     *
     * @ORM\Column(name="param2", type="text", nullable=true)
     */
    private $param2;

    /**
     * @var string
     *
     * @ORM\Column(name="param3", type="text", nullable=true)
     */
    private $param3;

    /**
     * @var string
     *
     * @ORM\Column(name="param4", type="text", nullable=true)
     */
    private $param4;

    /**
     * @var string
     *
     * @ORM\Column(name="param5", type="text", nullable=true)
     */
    private $param5;



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
     * Set shortname
     *
     * @param string $shortname
     * @return MdlUserInfoField
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
     * Set name
     *
     * @param string $name
     * @return MdlUserInfoField
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
     * Set datatype
     *
     * @param string $datatype
     * @return MdlUserInfoField
     */
    public function setDatatype($datatype)
    {
        $this->datatype = $datatype;

        return $this;
    }

    /**
     * Get datatype
     *
     * @return string 
     */
    public function getDatatype()
    {
        return $this->datatype;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return MdlUserInfoField
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set descriptionformat
     *
     * @param boolean $descriptionformat
     * @return MdlUserInfoField
     */
    public function setDescriptionformat($descriptionformat)
    {
        $this->descriptionformat = $descriptionformat;

        return $this;
    }

    /**
     * Get descriptionformat
     *
     * @return boolean 
     */
    public function getDescriptionformat()
    {
        return $this->descriptionformat;
    }

    /**
     * Set categoryid
     *
     * @param integer $categoryid
     * @return MdlUserInfoField
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
     * Set sortorder
     *
     * @param integer $sortorder
     * @return MdlUserInfoField
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
     * Set required
     *
     * @param boolean $required
     * @return MdlUserInfoField
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return boolean 
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set locked
     *
     * @param boolean $locked
     * @return MdlUserInfoField
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked
     *
     * @return boolean 
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set visible
     *
     * @param integer $visible
     * @return MdlUserInfoField
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return integer 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set forceunique
     *
     * @param boolean $forceunique
     * @return MdlUserInfoField
     */
    public function setForceunique($forceunique)
    {
        $this->forceunique = $forceunique;

        return $this;
    }

    /**
     * Get forceunique
     *
     * @return boolean 
     */
    public function getForceunique()
    {
        return $this->forceunique;
    }

    /**
     * Set signup
     *
     * @param boolean $signup
     * @return MdlUserInfoField
     */
    public function setSignup($signup)
    {
        $this->signup = $signup;

        return $this;
    }

    /**
     * Get signup
     *
     * @return boolean 
     */
    public function getSignup()
    {
        return $this->signup;
    }

    /**
     * Set defaultdata
     *
     * @param string $defaultdata
     * @return MdlUserInfoField
     */
    public function setDefaultdata($defaultdata)
    {
        $this->defaultdata = $defaultdata;

        return $this;
    }

    /**
     * Get defaultdata
     *
     * @return string 
     */
    public function getDefaultdata()
    {
        return $this->defaultdata;
    }

    /**
     * Set defaultdataformat
     *
     * @param boolean $defaultdataformat
     * @return MdlUserInfoField
     */
    public function setDefaultdataformat($defaultdataformat)
    {
        $this->defaultdataformat = $defaultdataformat;

        return $this;
    }

    /**
     * Get defaultdataformat
     *
     * @return boolean 
     */
    public function getDefaultdataformat()
    {
        return $this->defaultdataformat;
    }

    /**
     * Set param1
     *
     * @param string $param1
     * @return MdlUserInfoField
     */
    public function setParam1($param1)
    {
        $this->param1 = $param1;

        return $this;
    }

    /**
     * Get param1
     *
     * @return string 
     */
    public function getParam1()
    {
        return $this->param1;
    }

    /**
     * Set param2
     *
     * @param string $param2
     * @return MdlUserInfoField
     */
    public function setParam2($param2)
    {
        $this->param2 = $param2;

        return $this;
    }

    /**
     * Get param2
     *
     * @return string 
     */
    public function getParam2()
    {
        return $this->param2;
    }

    /**
     * Set param3
     *
     * @param string $param3
     * @return MdlUserInfoField
     */
    public function setParam3($param3)
    {
        $this->param3 = $param3;

        return $this;
    }

    /**
     * Get param3
     *
     * @return string 
     */
    public function getParam3()
    {
        return $this->param3;
    }

    /**
     * Set param4
     *
     * @param string $param4
     * @return MdlUserInfoField
     */
    public function setParam4($param4)
    {
        $this->param4 = $param4;

        return $this;
    }

    /**
     * Get param4
     *
     * @return string 
     */
    public function getParam4()
    {
        return $this->param4;
    }

    /**
     * Set param5
     *
     * @param string $param5
     * @return MdlUserInfoField
     */
    public function setParam5($param5)
    {
        $this->param5 = $param5;

        return $this;
    }

    /**
     * Get param5
     *
     * @return string 
     */
    public function getParam5()
    {
        return $this->param5;
    }
}
