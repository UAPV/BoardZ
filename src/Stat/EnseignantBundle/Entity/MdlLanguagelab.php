<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlLanguagelab
 *
 * @ORM\Table(name="mdl_languagelab")
 * @ORM\Entity
 */
class MdlLanguagelab
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
    private $course;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="contentformat", type="boolean", nullable=true)
     */
    private $contentformat;

    /**
     * @var integer
     *
     * @ORM\Column(name="timedue", type="bigint", nullable=false)
     */
    private $timedue;

    /**
     * @var integer
     *
     * @ORM\Column(name="timeavailable", type="bigint", nullable=false)
     */
    private $timeavailable;

    /**
     * @var integer
     *
     * @ORM\Column(name="grade", type="bigint", nullable=false)
     */
    private $grade;

    /**
     * @var integer
     *
     * @ORM\Column(name="recording_timelimit", type="bigint", nullable=false)
     */
    private $recordingTimelimit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="attempts", type="boolean", nullable=false)
     */
    private $attempts;

    /**
     * @var boolean
     *
     * @ORM\Column(name="video", type="boolean", nullable=true)
     */
    private $video = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_grade_book", type="boolean", nullable=true)
     */
    private $useGradeBook = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="group_type", type="boolean", nullable=true)
     */
    private $groupType = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="master_track", type="string", length=255, nullable=true)
     */
    private $masterTrack;

    /**
     * @var string
     *
     * @ORM\Column(name="master_track_recording", type="string", length=255, nullable=true)
     */
    private $masterTrackRecording;

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_mp3", type="boolean", nullable=true)
     */
    private $useMp3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="student_delete_recordings", type="boolean", nullable=false)
     */
    private $studentDeleteRecordings = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="prev_next_lab", type="boolean", nullable=false)
     */
    private $prevNextLab = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fullscreen_student", type="boolean", nullable=false)
     */
    private $fullscreenStudent = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="simplified_interface_student", type="boolean", nullable=false)
     */
    private $simplifiedInterfaceStudent = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
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
     * Set course
     *
     * @param integer $course
     * @return MdlLanguagelab
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
     * @return MdlLanguagelab
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
     * Set description
     *
     * @param string $description
     * @return MdlLanguagelab
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
     * Set contentformat
     *
     * @param boolean $contentformat
     * @return MdlLanguagelab
     */
    public function setContentformat($contentformat)
    {
        $this->contentformat = $contentformat;

        return $this;
    }

    /**
     * Get contentformat
     *
     * @return boolean 
     */
    public function getContentformat()
    {
        return $this->contentformat;
    }

    /**
     * Set timedue
     *
     * @param integer $timedue
     * @return MdlLanguagelab
     */
    public function setTimedue($timedue)
    {
        $this->timedue = $timedue;

        return $this;
    }

    /**
     * Get timedue
     *
     * @return integer 
     */
    public function getTimedue()
    {
        return $this->timedue;
    }

    /**
     * Set timeavailable
     *
     * @param integer $timeavailable
     * @return MdlLanguagelab
     */
    public function setTimeavailable($timeavailable)
    {
        $this->timeavailable = $timeavailable;

        return $this;
    }

    /**
     * Get timeavailable
     *
     * @return integer 
     */
    public function getTimeavailable()
    {
        return $this->timeavailable;
    }

    /**
     * Set grade
     *
     * @param integer $grade
     * @return MdlLanguagelab
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return integer 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set recordingTimelimit
     *
     * @param integer $recordingTimelimit
     * @return MdlLanguagelab
     */
    public function setRecordingTimelimit($recordingTimelimit)
    {
        $this->recordingTimelimit = $recordingTimelimit;

        return $this;
    }

    /**
     * Get recordingTimelimit
     *
     * @return integer 
     */
    public function getRecordingTimelimit()
    {
        return $this->recordingTimelimit;
    }

    /**
     * Set attempts
     *
     * @param boolean $attempts
     * @return MdlLanguagelab
     */
    public function setAttempts($attempts)
    {
        $this->attempts = $attempts;

        return $this;
    }

    /**
     * Get attempts
     *
     * @return boolean 
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * Set video
     *
     * @param boolean $video
     * @return MdlLanguagelab
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return boolean 
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set useGradeBook
     *
     * @param boolean $useGradeBook
     * @return MdlLanguagelab
     */
    public function setUseGradeBook($useGradeBook)
    {
        $this->useGradeBook = $useGradeBook;

        return $this;
    }

    /**
     * Get useGradeBook
     *
     * @return boolean 
     */
    public function getUseGradeBook()
    {
        return $this->useGradeBook;
    }

    /**
     * Set groupType
     *
     * @param boolean $groupType
     * @return MdlLanguagelab
     */
    public function setGroupType($groupType)
    {
        $this->groupType = $groupType;

        return $this;
    }

    /**
     * Get groupType
     *
     * @return boolean 
     */
    public function getGroupType()
    {
        return $this->groupType;
    }

    /**
     * Set masterTrack
     *
     * @param string $masterTrack
     * @return MdlLanguagelab
     */
    public function setMasterTrack($masterTrack)
    {
        $this->masterTrack = $masterTrack;

        return $this;
    }

    /**
     * Get masterTrack
     *
     * @return string 
     */
    public function getMasterTrack()
    {
        return $this->masterTrack;
    }

    /**
     * Set masterTrackRecording
     *
     * @param string $masterTrackRecording
     * @return MdlLanguagelab
     */
    public function setMasterTrackRecording($masterTrackRecording)
    {
        $this->masterTrackRecording = $masterTrackRecording;

        return $this;
    }

    /**
     * Get masterTrackRecording
     *
     * @return string 
     */
    public function getMasterTrackRecording()
    {
        return $this->masterTrackRecording;
    }

    /**
     * Set useMp3
     *
     * @param boolean $useMp3
     * @return MdlLanguagelab
     */
    public function setUseMp3($useMp3)
    {
        $this->useMp3 = $useMp3;

        return $this;
    }

    /**
     * Get useMp3
     *
     * @return boolean 
     */
    public function getUseMp3()
    {
        return $this->useMp3;
    }

    /**
     * Set studentDeleteRecordings
     *
     * @param boolean $studentDeleteRecordings
     * @return MdlLanguagelab
     */
    public function setStudentDeleteRecordings($studentDeleteRecordings)
    {
        $this->studentDeleteRecordings = $studentDeleteRecordings;

        return $this;
    }

    /**
     * Get studentDeleteRecordings
     *
     * @return boolean 
     */
    public function getStudentDeleteRecordings()
    {
        return $this->studentDeleteRecordings;
    }

    /**
     * Set prevNextLab
     *
     * @param boolean $prevNextLab
     * @return MdlLanguagelab
     */
    public function setPrevNextLab($prevNextLab)
    {
        $this->prevNextLab = $prevNextLab;

        return $this;
    }

    /**
     * Get prevNextLab
     *
     * @return boolean 
     */
    public function getPrevNextLab()
    {
        return $this->prevNextLab;
    }

    /**
     * Set fullscreenStudent
     *
     * @param boolean $fullscreenStudent
     * @return MdlLanguagelab
     */
    public function setFullscreenStudent($fullscreenStudent)
    {
        $this->fullscreenStudent = $fullscreenStudent;

        return $this;
    }

    /**
     * Get fullscreenStudent
     *
     * @return boolean 
     */
    public function getFullscreenStudent()
    {
        return $this->fullscreenStudent;
    }

    /**
     * Set simplifiedInterfaceStudent
     *
     * @param boolean $simplifiedInterfaceStudent
     * @return MdlLanguagelab
     */
    public function setSimplifiedInterfaceStudent($simplifiedInterfaceStudent)
    {
        $this->simplifiedInterfaceStudent = $simplifiedInterfaceStudent;

        return $this;
    }

    /**
     * Get simplifiedInterfaceStudent
     *
     * @return boolean 
     */
    public function getSimplifiedInterfaceStudent()
    {
        return $this->simplifiedInterfaceStudent;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlLanguagelab
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
