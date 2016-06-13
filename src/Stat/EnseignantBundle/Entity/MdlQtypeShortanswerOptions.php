<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQtypeShortanswerOptions
 *
 * @ORM\Table(name="mdl_qtype_shortanswer_options", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_qtypshoropti_que_uix", columns={"questionid"})})
 * @ORM\Entity
 */
class MdlQtypeShortanswerOptions
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
    private $questionid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="usecase", type="boolean", nullable=false)
     */
    private $usecase = '0';



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
     * @return MdlQtypeShortanswerOptions
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
     * Set usecase
     *
     * @param boolean $usecase
     * @return MdlQtypeShortanswerOptions
     */
    public function setUsecase($usecase)
    {
        $this->usecase = $usecase;

        return $this;
    }

    /**
     * Get usecase
     *
     * @return boolean 
     */
    public function getUsecase()
    {
        return $this->usecase;
    }
}
