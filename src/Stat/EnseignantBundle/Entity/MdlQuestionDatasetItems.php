<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestionDatasetItems
 *
 * @ORM\Table(name="mdl_question_dataset_items", indexes={@ORM\Index(name="mdl_quesdataitem_def_ix", columns={"definition"})})
 * @ORM\Entity
 */
class MdlQuestionDatasetItems
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
     * @ORM\Column(name="definition", type="bigint", nullable=false)
     */
    private $definition = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="itemnumber", type="bigint", nullable=false)
     */
    private $itemnumber = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value = '';



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
     * Set definition
     *
     * @param integer $definition
     * @return MdlQuestionDatasetItems
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;

        return $this;
    }

    /**
     * Get definition
     *
     * @return integer 
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Set itemnumber
     *
     * @param integer $itemnumber
     * @return MdlQuestionDatasetItems
     */
    public function setItemnumber($itemnumber)
    {
        $this->itemnumber = $itemnumber;

        return $this;
    }

    /**
     * Get itemnumber
     *
     * @return integer 
     */
    public function getItemnumber()
    {
        return $this->itemnumber;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return MdlQuestionDatasetItems
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
}
