<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeCriteria
 *
 * @ORM\Table(name="mdl_badge_criteria", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_badgcrit_badcri_uix", columns={"badgeid", "criteriatype"})}, indexes={@ORM\Index(name="mdl_badgcrit_cri_ix", columns={"criteriatype"}), @ORM\Index(name="mdl_badgcrit_bad_ix", columns={"badgeid"})})
 * @ORM\Entity
 */
class MdlBadgeCriteria
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
     * @ORM\Column(name="badgeid", type="bigint", nullable=false)
     */
    private $badgeid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="criteriatype", type="bigint", nullable=true)
     */
    private $criteriatype;

    /**
     * @var boolean
     *
     * @ORM\Column(name="method", type="boolean", nullable=false)
     */
    private $method = '1';



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
     * Set badgeid
     *
     * @param integer $badgeid
     * @return MdlBadgeCriteria
     */
    public function setBadgeid($badgeid)
    {
        $this->badgeid = $badgeid;

        return $this;
    }

    /**
     * Get badgeid
     *
     * @return integer 
     */
    public function getBadgeid()
    {
        return $this->badgeid;
    }

    /**
     * Set criteriatype
     *
     * @param integer $criteriatype
     * @return MdlBadgeCriteria
     */
    public function setCriteriatype($criteriatype)
    {
        $this->criteriatype = $criteriatype;

        return $this;
    }

    /**
     * Get criteriatype
     *
     * @return integer 
     */
    public function getCriteriatype()
    {
        return $this->criteriatype;
    }

    /**
     * Set method
     *
     * @param boolean $method
     * @return MdlBadgeCriteria
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method
     *
     * @return boolean 
     */
    public function getMethod()
    {
        return $this->method;
    }
}
