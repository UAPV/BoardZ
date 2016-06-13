<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlChat
 *
 * @ORM\Table(name="mdl_chat", indexes={@ORM\Index(name="mdl_chat_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlChat
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
     * @ORM\Column(name="course", type="bigint", nullable=false)
     */
    private $course = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="intro", type="text", nullable=false)
     */
    private $intro;

    /**
     * @var integer
     *
     * @ORM\Column(name="introformat", type="smallint", nullable=false)
     */
    private $introformat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keepdays", type="bigint", nullable=false)
     */
    private $keepdays = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="studentlogs", type="smallint", nullable=false)
     */
    private $studentlogs = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="chattime", type="bigint", nullable=false)
     */
    private $chattime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="schedule", type="smallint", nullable=false)
     */
    private $schedule = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';



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
     * Set course
     *
     * @param integer $course
     * @return MdlChat
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return integer 
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlChat
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
     * Set intro
     *
     * @param string $intro
     * @return MdlChat
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Get intro
     *
     * @return string 
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * Set introformat
     *
     * @param integer $introformat
     * @return MdlChat
     */
    public function setIntroformat($introformat)
    {
        $this->introformat = $introformat;

        return $this;
    }

    /**
     * Get introformat
     *
     * @return integer 
     */
    public function getIntroformat()
    {
        return $this->introformat;
    }

    /**
     * Set keepdays
     *
     * @param integer $keepdays
     * @return MdlChat
     */
    public function setKeepdays($keepdays)
    {
        $this->keepdays = $keepdays;

        return $this;
    }

    /**
     * Get keepdays
     *
     * @return integer 
     */
    public function getKeepdays()
    {
        return $this->keepdays;
    }

    /**
     * Set studentlogs
     *
     * @param integer $studentlogs
     * @return MdlChat
     */
    public function setStudentlogs($studentlogs)
    {
        $this->studentlogs = $studentlogs;

        return $this;
    }

    /**
     * Get studentlogs
     *
     * @return integer 
     */
    public function getStudentlogs()
    {
        return $this->studentlogs;
    }

    /**
     * Set chattime
     *
     * @param integer $chattime
     * @return MdlChat
     */
    public function setChattime($chattime)
    {
        $this->chattime = $chattime;

        return $this;
    }

    /**
     * Get chattime
     *
     * @return integer 
     */
    public function getChattime()
    {
        return $this->chattime;
    }

    /**
     * Set schedule
     *
     * @param integer $schedule
     * @return MdlChat
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Get schedule
     *
     * @return integer 
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlChat
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
