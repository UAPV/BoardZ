<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlExternalServicesFunctions
 *
 * @ORM\Table(name="mdl_external_services_functions", indexes={@ORM\Index(name="mdl_exteservfunc_ext_ix", columns={"externalserviceid"})})
 * @ORM\Entity
 */
class MdlExternalServicesFunctions
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
     * @var string
     *
     * @ORM\Column(name="functionname", type="string", length=200, nullable=false)
     */
    private $functionname = '';



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
     * @return MdlExternalServicesFunctions
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
     * Set functionname
     *
     * @param string $functionname
     * @return MdlExternalServicesFunctions
     */
    public function setFunctionname($functionname)
    {
        $this->functionname = $functionname;

        return $this;
    }

    /**
     * Get functionname
     *
     * @return string 
     */
    public function getFunctionname()
    {
        return $this->functionname;
    }
}
