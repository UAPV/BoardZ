<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlTag
 *
 * @ORM\Table(name="mdl_tag", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_tag_nam_uix", columns={"name"}), @ORM\UniqueConstraint(name="mdl_tag_idnam_uix", columns={"id", "name"})}, indexes={@ORM\Index(name="mdl_tag_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlTag
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
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="rawname", type="string", length=255, nullable=false)
     */
    private $rawname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tagtype", type="string", length=255, nullable=true)
     */
    private $tagtype;

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
     * @ORM\Column(name="flag", type="smallint", nullable=true)
     */
    private $flag = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=true)
     */
    private $timemodified;



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
     * @return MdlTag
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
     * Set name
     *
     * @param string $name
     * @return MdlTag
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
     * Set rawname
     *
     * @param string $rawname
     * @return MdlTag
     */
    public function setRawname($rawname)
    {
        $this->rawname = $rawname;

        return $this;
    }

    /**
     * Get rawname
     *
     * @return string 
     */
    public function getRawname()
    {
        return $this->rawname;
    }

    /**
     * Set tagtype
     *
     * @param string $tagtype
     * @return MdlTag
     */
    public function setTagtype($tagtype)
    {
        $this->tagtype = $tagtype;

        return $this;
    }

    /**
     * Get tagtype
     *
     * @return string 
     */
    public function getTagtype()
    {
        return $this->tagtype;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return MdlTag
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
     * @return MdlTag
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
     * Set flag
     *
     * @param integer $flag
     * @return MdlTag
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get flag
     *
     * @return integer 
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlTag
     */
    public function setTimemodified($timemodified)
    {
        $this->timemodified = $timemodified;

        return $this;
    }

    /**
     * Get timemodified
     *
     * @return integer 
     */
    public function getTimemodified()
    {
        return $this->timemodified;
    }
}
