<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseRequest
 *
 * @ORM\Table(name="mdl_course_request", indexes={@ORM\Index(name="mdl_courrequ_sho_ix", columns={"shortname"})})
 * @ORM\Entity
 */
class MdlCourseRequest
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
     * @ORM\Column(name="fullname", type="string", length=254, nullable=false)
     */
    private $fullname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="shortname", type="string", length=100, nullable=false)
     */
    private $shortname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", nullable=false)
     */
    private $summary;

    /**
     * @var boolean
     *
     * @ORM\Column(name="summaryformat", type="boolean", nullable=false)
     */
    private $summaryformat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="category", type="bigint", nullable=false)
     */
    private $category = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="text", nullable=false)
     */
    private $reason;

    /**
     * @var integer
     *
     * @ORM\Column(name="requester", type="bigint", nullable=false)
     */
    private $requester = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password = '';



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
     * Set fullname
     *
     * @param string $fullname
     * @return MdlCourseRequest
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set shortname
     *
     * @param string $shortname
     * @return MdlCourseRequest
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
     * Set summary
     *
     * @param string $summary
     * @return MdlCourseRequest
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set summaryformat
     *
     * @param boolean $summaryformat
     * @return MdlCourseRequest
     */
    public function setSummaryformat($summaryformat)
    {
        $this->summaryformat = $summaryformat;

        return $this;
    }

    /**
     * Get summaryformat
     *
     * @return boolean 
     */
    public function getSummaryformat()
    {
        return $this->summaryformat;
    }

    /**
     * Set category
     *
     * @param integer $category
     * @return MdlCourseRequest
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return integer 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set reason
     *
     * @param string $reason
     * @return MdlCourseRequest
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string 
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set requester
     *
     * @param integer $requester
     * @return MdlCourseRequest
     */
    public function setRequester($requester)
    {
        $this->requester = $requester;

        return $this;
    }

    /**
     * Get requester
     *
     * @return integer 
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return MdlCourseRequest
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
}
