<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlWorkshopevalBestSettings
 *
 * @ORM\Table(name="mdl_workshopeval_best_settings", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_workbestsett_wor_uix", columns={"workshopid"})})
 * @ORM\Entity
 */
class MdlWorkshopevalBestSettings
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
     * @ORM\Column(name="workshopid", type="bigint", nullable=false)
     */
    private $workshopid;

    /**
     * @var integer
     *
     * @ORM\Column(name="comparison", type="smallint", nullable=true)
     */
    private $comparison = '5';



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
     * Set workshopid
     *
     * @param integer $workshopid
     * @return MdlWorkshopevalBestSettings
     */
    public function setWorkshopid($workshopid)
    {
        $this->workshopid = $workshopid;

        return $this;
    }

    /**
     * Get workshopid
     *
     * @return integer 
     */
    public function getWorkshopid()
    {
        return $this->workshopid;
    }

    /**
     * Set comparison
     *
     * @param integer $comparison
     * @return MdlWorkshopevalBestSettings
     */
    public function setComparison($comparison)
    {
        $this->comparison = $comparison;

        return $this;
    }

    /**
     * Get comparison
     *
     * @return integer 
     */
    public function getComparison()
    {
        return $this->comparison;
    }
}
