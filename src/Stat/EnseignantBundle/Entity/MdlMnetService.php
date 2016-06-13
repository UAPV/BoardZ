<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlMnetService
 *
 * @ORM\Table(name="mdl_mnet_service")
 * @ORM\Entity
 */
class MdlMnetService
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
     * @ORM\Column(name="name", type="string", length=40, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=40, nullable=false)
     */
    private $description = '';

    /**
     * @var string
     *
     * @ORM\Column(name="apiversion", type="string", length=10, nullable=false)
     */
    private $apiversion = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="offer", type="boolean", nullable=false)
     */
    private $offer = '0';



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
     * Set name
     *
     * @param string $name
     * @return MdlMnetService
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
     * @return MdlMnetService
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
     * Set apiversion
     *
     * @param string $apiversion
     * @return MdlMnetService
     */
    public function setApiversion($apiversion)
    {
        $this->apiversion = $apiversion;

        return $this;
    }

    /**
     * Get apiversion
     *
     * @return string 
     */
    public function getApiversion()
    {
        return $this->apiversion;
    }

    /**
     * Set offer
     *
     * @param boolean $offer
     * @return MdlMnetService
     */
    public function setOffer($offer)
    {
        $this->offer = $offer;

        return $this;
    }

    /**
     * Get offer
     *
     * @return boolean 
     */
    public function getOffer()
    {
        return $this->offer;
    }
}
