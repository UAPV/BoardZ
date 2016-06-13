<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlFiles
 *
 * @ORM\Table(name="mdl_files", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_file_pat_uix", columns={"pathnamehash"})}, indexes={@ORM\Index(name="mdl_file_comfilconite_ix", columns={"component", "filearea", "contextid", "itemid"}), @ORM\Index(name="mdl_file_con_ix", columns={"contenthash"}), @ORM\Index(name="mdl_file_con2_ix", columns={"contextid"}), @ORM\Index(name="mdl_file_use_ix", columns={"userid"}), @ORM\Index(name="mdl_file_ref_ix", columns={"referencefileid"})})
 * @ORM\Entity
 */
class MdlFiles
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
     * @ORM\Column(name="contenthash", type="string", length=40, nullable=false)
     */
    private $contenthash = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pathnamehash", type="string", length=40, nullable=false)
     */
    private $pathnamehash = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid;

    /**
     * @var string
     *
     * @ORM\Column(name="component", type="string", length=100, nullable=false)
     */
    private $component = '';

    /**
     * @var string
     *
     * @ORM\Column(name="filearea", type="string", length=50, nullable=false)
     */
    private $filearea = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="itemid", type="bigint", nullable=false)
     */
    private $itemid;

    /**
     * @var string
     *
     * @ORM\Column(name="filepath", type="string", length=255, nullable=false)
     */
    private $filepath = '';

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=true)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="filesize", type="bigint", nullable=false)
     */
    private $filesize;

    /**
     * @var string
     *
     * @ORM\Column(name="mimetype", type="string", length=100, nullable=true)
     */
    private $mimetype;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="bigint", nullable=false)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="text", nullable=true)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255, nullable=true)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="license", type="string", length=255, nullable=true)
     */
    private $license;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;

    /**
     * @var integer
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="referencefileid", type="bigint", nullable=true)
     */
    private $referencefileid;



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
     * Set contenthash
     *
     * @param string $contenthash
     * @return MdlFiles
     */
    public function setContenthash($contenthash)
    {
        $this->contenthash = $contenthash;

        return $this;
    }

    /**
     * Get contenthash
     *
     * @return string 
     */
    public function getContenthash()
    {
        return $this->contenthash;
    }

    /**
     * Set pathnamehash
     *
     * @param string $pathnamehash
     * @return MdlFiles
     */
    public function setPathnamehash($pathnamehash)
    {
        $this->pathnamehash = $pathnamehash;

        return $this;
    }

    /**
     * Get pathnamehash
     *
     * @return string 
     */
    public function getPathnamehash()
    {
        return $this->pathnamehash;
    }

    /**
     * Set contextid
     *
     * @param integer $contextid
     * @return MdlFiles
     */
    public function setContextid($contextid)
    {
        $this->contextid = $contextid;

        return $this;
    }

    /**
     * Get contextid
     *
     * @return integer 
     */
    public function getContextid()
    {
        return $this->contextid;
    }

    /**
     * Set component
     *
     * @param string $component
     * @return MdlFiles
     */
    public function setComponent($component)
    {
        $this->component = $component;

        return $this;
    }

    /**
     * Get component
     *
     * @return string 
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Set filearea
     *
     * @param string $filearea
     * @return MdlFiles
     */
    public function setFilearea($filearea)
    {
        $this->filearea = $filearea;

        return $this;
    }

    /**
     * Get filearea
     *
     * @return string 
     */
    public function getFilearea()
    {
        return $this->filearea;
    }

    /**
     * Set itemid
     *
     * @param integer $itemid
     * @return MdlFiles
     */
    public function setItemid($itemid)
    {
        $this->itemid = $itemid;

        return $this;
    }

    /**
     * Get itemid
     *
     * @return integer 
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set filepath
     *
     * @param string $filepath
     * @return MdlFiles
     */
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;

        return $this;
    }

    /**
     * Get filepath
     *
     * @return string 
     */
    public function getFilepath()
    {
        return $this->filepath;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return MdlFiles
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlFiles
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
     * Set filesize
     *
     * @param integer $filesize
     * @return MdlFiles
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;

        return $this;
    }

    /**
     * Get filesize
     *
     * @return integer 
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * Set mimetype
     *
     * @param string $mimetype
     * @return MdlFiles
     */
    public function setMimetype($mimetype)
    {
        $this->mimetype = $mimetype;

        return $this;
    }

    /**
     * Get mimetype
     *
     * @return string 
     */
    public function getMimetype()
    {
        return $this->mimetype;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return MdlFiles
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return MdlFiles
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return MdlFiles
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set license
     *
     * @param string $license
     * @return MdlFiles
     */
    public function setLicense($license)
    {
        $this->license = $license;

        return $this;
    }

    /**
     * Get license
     *
     * @return string 
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return MdlFiles
     */
    public function setTimecreated($timecreated)
    {
        $this->timecreated = $timecreated;

        return $this;
    }

    /**
     * Get timecreated
     *
     * @return integer 
     */
    public function getTimecreated()
    {
        return $this->timecreated;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlFiles
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

    /**
     * Set sortorder
     *
     * @param integer $sortorder
     * @return MdlFiles
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
     * Set referencefileid
     *
     * @param integer $referencefileid
     * @return MdlFiles
     */
    public function setReferencefileid($referencefileid)
    {
        $this->referencefileid = $referencefileid;

        return $this;
    }

    /**
     * Get referencefileid
     *
     * @return integer 
     */
    public function getReferencefileid()
    {
        return $this->referencefileid;
    }
}
