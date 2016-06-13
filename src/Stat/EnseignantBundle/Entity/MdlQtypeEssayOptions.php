<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQtypeEssayOptions
 *
 * @ORM\Table(name="mdl_qtype_essay_options", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_qtypessaopti_que_uix", columns={"questionid"})})
 * @ORM\Entity
 */
class MdlQtypeEssayOptions
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
     * @ORM\Column(name="questionid", type="bigint", nullable=false)
     */
    private $questionid;

    /**
     * @var string
     *
     * @ORM\Column(name="responseformat", type="string", length=16, nullable=false)
     */
    private $responseformat = 'editor';

    /**
     * @var integer
     *
     * @ORM\Column(name="responsefieldlines", type="smallint", nullable=false)
     */
    private $responsefieldlines = '15';

    /**
     * @var integer
     *
     * @ORM\Column(name="attachments", type="smallint", nullable=false)
     */
    private $attachments = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="graderinfo", type="text", nullable=true)
     */
    private $graderinfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="graderinfoformat", type="smallint", nullable=false)
     */
    private $graderinfoformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="responsetemplate", type="text", nullable=true)
     */
    private $responsetemplate;

    /**
     * @var integer
     *
     * @ORM\Column(name="responsetemplateformat", type="smallint", nullable=false)
     */
    private $responsetemplateformat = '0';



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
     * Set questionid
     *
     * @param integer $questionid
     * @return MdlQtypeEssayOptions
     */
    public function setQuestionid($questionid)
    {
        $this->questionid = $questionid;

        return $this;
    }

    /**
     * Get questionid
     *
     * @return integer 
     */
    public function getQuestionid()
    {
        return $this->questionid;
    }

    /**
     * Set responseformat
     *
     * @param string $responseformat
     * @return MdlQtypeEssayOptions
     */
    public function setResponseformat($responseformat)
    {
        $this->responseformat = $responseformat;

        return $this;
    }

    /**
     * Get responseformat
     *
     * @return string 
     */
    public function getResponseformat()
    {
        return $this->responseformat;
    }

    /**
     * Set responsefieldlines
     *
     * @param integer $responsefieldlines
     * @return MdlQtypeEssayOptions
     */
    public function setResponsefieldlines($responsefieldlines)
    {
        $this->responsefieldlines = $responsefieldlines;

        return $this;
    }

    /**
     * Get responsefieldlines
     *
     * @return integer 
     */
    public function getResponsefieldlines()
    {
        return $this->responsefieldlines;
    }

    /**
     * Set attachments
     *
     * @param integer $attachments
     * @return MdlQtypeEssayOptions
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * Get attachments
     *
     * @return integer 
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Set graderinfo
     *
     * @param string $graderinfo
     * @return MdlQtypeEssayOptions
     */
    public function setGraderinfo($graderinfo)
    {
        $this->graderinfo = $graderinfo;

        return $this;
    }

    /**
     * Get graderinfo
     *
     * @return string 
     */
    public function getGraderinfo()
    {
        return $this->graderinfo;
    }

    /**
     * Set graderinfoformat
     *
     * @param integer $graderinfoformat
     * @return MdlQtypeEssayOptions
     */
    public function setGraderinfoformat($graderinfoformat)
    {
        $this->graderinfoformat = $graderinfoformat;

        return $this;
    }

    /**
     * Get graderinfoformat
     *
     * @return integer 
     */
    public function getGraderinfoformat()
    {
        return $this->graderinfoformat;
    }

    /**
     * Set responsetemplate
     *
     * @param string $responsetemplate
     * @return MdlQtypeEssayOptions
     */
    public function setResponsetemplate($responsetemplate)
    {
        $this->responsetemplate = $responsetemplate;

        return $this;
    }

    /**
     * Get responsetemplate
     *
     * @return string 
     */
    public function getResponsetemplate()
    {
        return $this->responsetemplate;
    }

    /**
     * Set responsetemplateformat
     *
     * @param integer $responsetemplateformat
     * @return MdlQtypeEssayOptions
     */
    public function setResponsetemplateformat($responsetemplateformat)
    {
        $this->responsetemplateformat = $responsetemplateformat;

        return $this;
    }

    /**
     * Get responsetemplateformat
     *
     * @return integer 
     */
    public function getResponsetemplateformat()
    {
        return $this->responsetemplateformat;
    }
}
