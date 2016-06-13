<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBackupCourses
 *
 * @ORM\Table(name="mdl_backup_courses", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_backcour_cou_uix", columns={"courseid"})})
 * @ORM\Entity
 */
class MdlBackupCourses
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
     * @ORM\Column(name="courseid", type="bigint", nullable=false)
     */
    private $courseid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="laststarttime", type="bigint", nullable=false)
     */
    private $laststarttime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastendtime", type="bigint", nullable=false)
     */
    private $lastendtime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="laststatus", type="string", length=1, nullable=false)
     */
    private $laststatus = '5';

    /**
     * @var integer
     *
     * @ORM\Column(name="nextstarttime", type="bigint", nullable=false)
     */
    private $nextstarttime = '0';



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
     * Set courseid
     *
     * @param integer $courseid
     * @return MdlBackupCourses
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
     * Set laststarttime
     *
     * @param integer $laststarttime
     * @return MdlBackupCourses
     */
    public function setLaststarttime($laststarttime)
    {
        $this->laststarttime = $laststarttime;

        return $this;
    }

    /**
     * Get laststarttime
     *
     * @return integer 
     */
    public function getLaststarttime()
    {
        return $this->laststarttime;
    }

    /**
     * Set lastendtime
     *
     * @param integer $lastendtime
     * @return MdlBackupCourses
     */
    public function setLastendtime($lastendtime)
    {
        $this->lastendtime = $lastendtime;

        return $this;
    }

    /**
     * Get lastendtime
     *
     * @return integer 
     */
    public function getLastendtime()
    {
        return $this->lastendtime;
    }

    /**
     * Set laststatus
     *
     * @param string $laststatus
     * @return MdlBackupCourses
     */
    public function setLaststatus($laststatus)
    {
        $this->laststatus = $laststatus;

        return $this;
    }

    /**
     * Get laststatus
     *
     * @return string 
     */
    public function getLaststatus()
    {
        return $this->laststatus;
    }

    /**
     * Set nextstarttime
     *
     * @param integer $nextstarttime
     * @return MdlBackupCourses
     */
    public function setNextstarttime($nextstarttime)
    {
        $this->nextstarttime = $nextstarttime;

        return $this;
    }

    /**
     * Get nextstarttime
     *
     * @return integer 
     */
    public function getNextstarttime()
    {
        return $this->nextstarttime;
    }
}
