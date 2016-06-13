<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUserLastaccess
 *
 * @ORM\Table(name="mdl_user_lastaccess", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_userlast_usecou_uix", columns={"userid", "courseid"})}, indexes={@ORM\Index(name="mdl_userlast_use_ix", columns={"userid"}), @ORM\Index(name="mdl_userlast_cou_ix", columns={"courseid"})})
 * @ORM\Entity
 */
class MdlUserLastaccess
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
     * @ORM\Column(name="timeaccess", type="bigint", nullable=false)
     */
    private $timeaccess = '0';



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
     * @return MdlUserLastaccess
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
     * @return MdlUserLastaccess
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
     * Set timeaccess
     *
     * @param integer $timeaccess
     * @return MdlUserLastaccess
     */
    public function setTimeaccess($timeaccess)
    {
        $this->timeaccess = $timeaccess;

        return $this;
    }

    /**
     * Get timeaccess
     *
     * @return integer 
     */
    public function getTimeaccess()
    {
        return $this->timeaccess;
    }
}
