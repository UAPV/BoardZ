<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlPost
 *
 * @ORM\Table(name="mdl_post", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_post_iduse_uix", columns={"id", "userid"})}, indexes={@ORM\Index(name="mdl_post_las_ix", columns={"lastmodified"}), @ORM\Index(name="mdl_post_mod_ix", columns={"module"}), @ORM\Index(name="mdl_post_sub_ix", columns={"subject"}), @ORM\Index(name="mdl_post_use_ix", columns={"usermodified"})})
 * @ORM\Entity
 */
class MdlPost
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
     * @ORM\Column(name="module", type="string", length=20, nullable=false)
     */
    private $module = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="courseid", type="bigint", nullable=false)
     */
    private $courseid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groupid", type="bigint", nullable=false)
     */
    private $groupid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="moduleid", type="bigint", nullable=false)
     */
    private $moduleid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="coursemoduleid", type="bigint", nullable=false)
     */
    private $coursemoduleid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=128, nullable=false)
     */
    private $subject = '';

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", nullable=true)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="uniquehash", type="string", length=255, nullable=false)
     */
    private $uniquehash = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="bigint", nullable=false)
     */
    private $rating = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="format", type="bigint", nullable=false)
     */
    private $format = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="summaryformat", type="boolean", nullable=false)
     */
    private $summaryformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="attachment", type="string", length=100, nullable=true)
     */
    private $attachment;

    /**
     * @var string
     *
     * @ORM\Column(name="publishstate", type="string", length=20, nullable=false)
     */
    private $publishstate = 'draft';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastmodified", type="bigint", nullable=false)
     */
    private $lastmodified = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="created", type="bigint", nullable=false)
     */
    private $created = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="usermodified", type="bigint", nullable=true)
     */
    private $usermodified;



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
     * Set module
     *
     * @param string $module
     * @return MdlPost
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlPost
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
     * Set courseid
     *
     * @param integer $courseid
     * @return MdlPost
     */
    public function setCourseid($courseid)
    {
        $this->courseid = $courseid;

        return $this;
    }

    /**
     * Get courseid
     *
     * @return integer 
     */
    public function getCourseid()
    {
        return $this->courseid;
    }

    /**
     * Set groupid
     *
     * @param integer $groupid
     * @return MdlPost
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Get groupid
     *
     * @return integer 
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set moduleid
     *
     * @param integer $moduleid
     * @return MdlPost
     */
    public function setModuleid($moduleid)
    {
        $this->moduleid = $moduleid;

        return $this;
    }

    /**
     * Get moduleid
     *
     * @return integer 
     */
    public function getModuleid()
    {
        return $this->moduleid;
    }

    /**
     * Set coursemoduleid
     *
     * @param integer $coursemoduleid
     * @return MdlPost
     */
    public function setCoursemoduleid($coursemoduleid)
    {
        $this->coursemoduleid = $coursemoduleid;

        return $this;
    }

    /**
     * Get coursemoduleid
     *
     * @return integer 
     */
    public function getCoursemoduleid()
    {
        return $this->coursemoduleid;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return MdlPost
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return MdlPost
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
     * Set content
     *
     * @param string $content
     * @return MdlPost
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set uniquehash
     *
     * @param string $uniquehash
     * @return MdlPost
     */
    public function setUniquehash($uniquehash)
    {
        $this->uniquehash = $uniquehash;

        return $this;
    }

    /**
     * Get uniquehash
     *
     * @return string 
     */
    public function getUniquehash()
    {
        return $this->uniquehash;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     * @return MdlPost
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set format
     *
     * @param integer $format
     * @return MdlPost
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return integer 
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set summaryformat
     *
     * @param boolean $summaryformat
     * @return MdlPost
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
     * Set attachment
     *
     * @param string $attachment
     * @return MdlPost
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return string 
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set publishstate
     *
     * @param string $publishstate
     * @return MdlPost
     */
    public function setPublishstate($publishstate)
    {
        $this->publishstate = $publishstate;

        return $this;
    }

    /**
     * Get publishstate
     *
     * @return string 
     */
    public function getPublishstate()
    {
        return $this->publishstate;
    }

    /**
     * Set lastmodified
     *
     * @param integer $lastmodified
     * @return MdlPost
     */
    public function setLastmodified($lastmodified)
    {
        $this->lastmodified = $lastmodified;

        return $this;
    }

    /**
     * Get lastmodified
     *
     * @return integer 
     */
    public function getLastmodified()
    {
        return $this->lastmodified;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return MdlPost
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return integer 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set usermodified
     *
     * @param integer $usermodified
     * @return MdlPost
     */
    public function setUsermodified($usermodified)
    {
        $this->usermodified = $usermodified;

        return $this;
    }

    /**
     * Get usermodified
     *
     * @return integer 
     */
    public function getUsermodified()
    {
        return $this->usermodified;
    }
}
