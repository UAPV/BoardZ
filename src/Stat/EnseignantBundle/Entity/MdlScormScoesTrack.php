<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlScormScoesTrack
 *
 * @ORM\Table(name="mdl_scorm_scoes_track", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_scorscoetrac_usescosco_uix", columns={"userid", "scormid", "scoid", "attempt", "element"})}, indexes={@ORM\Index(name="mdl_scorscoetrac_use_ix", columns={"userid"}), @ORM\Index(name="mdl_scorscoetrac_ele_ix", columns={"element"}), @ORM\Index(name="mdl_scorscoetrac_sco_ix", columns={"scormid"}), @ORM\Index(name="mdl_scorscoetrac_sco2_ix", columns={"scoid"})})
 * @ORM\Entity
 */
class MdlScormScoesTrack
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
     * @ORM\Column(name="scormid", type="bigint", nullable=false)
     */
    private $scormid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="scoid", type="bigint", nullable=false)
     */
    private $scoid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="attempt", type="bigint", nullable=false)
     */
    private $attempt = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="element", type="string", length=255, nullable=false)
     */
    private $element = '';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=false)
     */
    private $value;

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
     * Set userid
     *
     * @param integer $userid
     * @return MdlScormScoesTrack
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
     * Set scormid
     *
     * @param integer $scormid
     * @return MdlScormScoesTrack
     */
    public function setScormid($scormid)
    {
        $this->scormid = $scormid;

        return $this;
    }

    /**
     * Get scormid
     *
     * @return integer 
     */
    public function getScormid()
    {
        return $this->scormid;
    }

    /**
     * Set scoid
     *
     * @param integer $scoid
     * @return MdlScormScoesTrack
     */
    public function setScoid($scoid)
    {
        $this->scoid = $scoid;

        return $this;
    }

    /**
     * Get scoid
     *
     * @return integer 
     */
    public function getScoid()
    {
        return $this->scoid;
    }

    /**
     * Set attempt
     *
     * @param integer $attempt
     * @return MdlScormScoesTrack
     */
    public function setAttempt($attempt)
    {
        $this->attempt = $attempt;

        return $this;
    }

    /**
     * Get attempt
     *
     * @return integer 
     */
    public function getAttempt()
    {
        return $this->attempt;
    }

    /**
     * Set element
     *
     * @param string $element
     * @return MdlScormScoesTrack
     */
    public function setElement($element)
    {
        $this->element = $element;

        return $this;
    }

    /**
     * Get element
     *
     * @return string 
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return MdlScormScoesTrack
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set timemodified
     *
     * @param integer $timemodified
     * @return MdlScormScoesTrack
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
