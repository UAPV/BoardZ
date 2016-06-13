<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuizReports
 *
 * @ORM\Table(name="mdl_quiz_reports", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_quizrepo_nam_uix", columns={"name"})})
 * @ORM\Entity
 */
class MdlQuizReports
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="displayorder", type="bigint", nullable=false)
     */
    private $displayorder;

    /**
     * @var string
     *
     * @ORM\Column(name="capability", type="string", length=255, nullable=true)
     */
    private $capability;



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
     * @return MdlQuizReports
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
     * Set displayorder
     *
     * @param integer $displayorder
     * @return MdlQuizReports
     */
    public function setDisplayorder($displayorder)
    {
        $this->displayorder = $displayorder;

        return $this;
    }

    /**
     * Get displayorder
     *
     * @return integer 
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * Set capability
     *
     * @param string $capability
     * @return MdlQuizReports
     */
    public function setCapability($capability)
    {
        $this->capability = $capability;

        return $this;
    }

    /**
     * Get capability
     *
     * @return string 
     */
    public function getCapability()
    {
        return $this->capability;
    }
}
