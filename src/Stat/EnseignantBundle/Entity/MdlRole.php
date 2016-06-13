<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlRole
 *
 * @ORM\Table(name="mdl_role", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_role_sor_uix", columns={"sortorder"}), @ORM\UniqueConstraint(name="mdl_role_sho_uix", columns={"shortname"})})
 * @ORM\Entity
 */
class MdlRole
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="shortname", type="string", length=100, nullable=false)
     */
    private $shortname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="archetype", type="string", length=30, nullable=false)
     */
    private $archetype = '';



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
     * @return MdlRole
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
     * Set shortname
     *
     * @param string $shortname
     * @return MdlRole
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
     * Set description
     *
     * @param string $description
     * @return MdlRole
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
     * Set sortorder
     *
     * @param integer $sortorder
     * @return MdlRole
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
     * Set archetype
     *
     * @param string $archetype
     * @return MdlRole
     */
    public function setArchetype($archetype)
    {
        $this->archetype = $archetype;

        return $this;
    }

    /**
     * Get archetype
     *
     * @return string 
     */
    public function getArchetype()
    {
        return $this->archetype;
    }
}
