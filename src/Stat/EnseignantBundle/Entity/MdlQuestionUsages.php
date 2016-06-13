<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestionUsages
 *
 * @ORM\Table(name="mdl_question_usages", indexes={@ORM\Index(name="mdl_quesusag_con_ix", columns={"contextid"})})
 * @ORM\Entity
 */
class MdlQuestionUsages
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
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid;

    /**
     * @var string
     *
     * @ORM\Column(name="component", type="string", length=255, nullable=false)
     */
    private $component = '';

    /**
     * @var string
     *
     * @ORM\Column(name="preferredbehaviour", type="string", length=32, nullable=false)
     */
    private $preferredbehaviour = '';



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
     * Set contextid
     *
     * @param integer $contextid
     * @return MdlQuestionUsages
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
     * @return MdlQuestionUsages
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
     * Set preferredbehaviour
     *
     * @param string $preferredbehaviour
     * @return MdlQuestionUsages
     */
    public function setPreferredbehaviour($preferredbehaviour)
    {
        $this->preferredbehaviour = $preferredbehaviour;

        return $this;
    }

    /**
     * Get preferredbehaviour
     *
     * @return string 
     */
    public function getPreferredbehaviour()
    {
        return $this->preferredbehaviour;
    }
}
