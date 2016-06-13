<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlDataFields
 *
 * @ORM\Table(name="mdl_data_fields", indexes={@ORM\Index(name="mdl_datafiel_typdat_ix", columns={"type", "dataid"}), @ORM\Index(name="mdl_datafiel_dat_ix", columns={"dataid"})})
 * @ORM\Entity
 */
class MdlDataFields
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
     * @ORM\Column(name="dataid", type="bigint", nullable=false)
     */
    private $dataid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

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
     * @var string
     *
     * @ORM\Column(name="param6", type="text", nullable=true)
     */
    private $param6;

    /**
     * @var string
     *
     * @ORM\Column(name="param7", type="text", nullable=true)
     */
    private $param7;

    /**
     * @var string
     *
     * @ORM\Column(name="param8", type="text", nullable=true)
     */
    private $param8;

    /**
     * @var string
     *
     * @ORM\Column(name="param9", type="text", nullable=true)
     */
    private $param9;

    /**
     * @var string
     *
     * @ORM\Column(name="param10", type="text", nullable=true)
     */
    private $param10;



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
     * Set dataid
     *
     * @param integer $dataid
     * @return MdlDataFields
     */
    public function setDataid($dataid)
    {
        $this->dataid = $dataid;

        return $this;
    }

    /**
     * Get dataid
     *
     * @return integer 
     */
    public function getDataid()
    {
        return $this->dataid;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return MdlDataFields
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlDataFields
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
     * Set description
     *
     * @param string $description
     * @return MdlDataFields
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
     * Set param1
     *
     * @param string $param1
     * @return MdlDataFields
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
     * @return MdlDataFields
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
     * @return MdlDataFields
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
     * @return MdlDataFields
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
     * @return MdlDataFields
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

    /**
     * Set param6
     *
     * @param string $param6
     * @return MdlDataFields
     */
    public function setParam6($param6)
    {
        $this->param6 = $param6;

        return $this;
    }

    /**
     * Get param6
     *
     * @return string 
     */
    public function getParam6()
    {
        return $this->param6;
    }

    /**
     * Set param7
     *
     * @param string $param7
     * @return MdlDataFields
     */
    public function setParam7($param7)
    {
        $this->param7 = $param7;

        return $this;
    }

    /**
     * Get param7
     *
     * @return string 
     */
    public function getParam7()
    {
        return $this->param7;
    }

    /**
     * Set param8
     *
     * @param string $param8
     * @return MdlDataFields
     */
    public function setParam8($param8)
    {
        $this->param8 = $param8;

        return $this;
    }

    /**
     * Get param8
     *
     * @return string 
     */
    public function getParam8()
    {
        return $this->param8;
    }

    /**
     * Set param9
     *
     * @param string $param9
     * @return MdlDataFields
     */
    public function setParam9($param9)
    {
        $this->param9 = $param9;

        return $this;
    }

    /**
     * Get param9
     *
     * @return string 
     */
    public function getParam9()
    {
        return $this->param9;
    }

    /**
     * Set param10
     *
     * @param string $param10
     * @return MdlDataFields
     */
    public function setParam10($param10)
    {
        $this->param10 = $param10;

        return $this;
    }

    /**
     * Get param10
     *
     * @return string 
     */
    public function getParam10()
    {
        return $this->param10;
    }
}
