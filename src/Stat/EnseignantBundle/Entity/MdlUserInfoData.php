<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUserInfoData
 *
 * @ORM\Table(name="mdl_user_info_data", indexes={@ORM\Index(name="mdl_userinfodata_usefie_ix", columns={"userid", "fieldid"})})
 * @ORM\Entity
 */
class MdlUserInfoData
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
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="fieldid", type="bigint", nullable=false)
     */
    private $fieldid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", nullable=false)
     */
    private $data;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dataformat", type="boolean", nullable=false)
     */
    private $dataformat = '0';



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
     * Set userid
     *
     * @param integer $userid
     * @return MdlUserInfoData
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
     * Set fieldid
     *
     * @param integer $fieldid
     * @return MdlUserInfoData
     */
    public function setFieldid($fieldid)
    {
        $this->fieldid = $fieldid;

        return $this;
    }

    /**
     * Get fieldid
     *
     * @return integer 
     */
    public function getFieldid()
    {
        return $this->fieldid;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return MdlUserInfoData
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
     * Set dataformat
     *
     * @param boolean $dataformat
     * @return MdlUserInfoData
     */
    public function setDataformat($dataformat)
    {
        $this->dataformat = $dataformat;

        return $this;
    }

    /**
     * Get dataformat
     *
     * @return boolean 
     */
    public function getDataformat()
    {
        return $this->dataformat;
    }
}
