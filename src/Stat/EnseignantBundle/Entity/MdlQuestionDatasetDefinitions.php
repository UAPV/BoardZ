<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestionDatasetDefinitions
 *
 * @ORM\Table(name="mdl_question_dataset_definitions", indexes={@ORM\Index(name="mdl_quesdatadefi_cat_ix", columns={"category"})})
 * @ORM\Entity
 */
class MdlQuestionDatasetDefinitions
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
     * @ORM\Column(name="category", type="bigint", nullable=false)
     */
    private $category = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="bigint", nullable=false)
     */
    private $type = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="options", type="string", length=255, nullable=false)
     */
    private $options = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="itemcount", type="bigint", nullable=false)
     */
    private $itemcount = '0';



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
     * Set category
     *
     * @param integer $category
     * @return MdlQuestionDatasetDefinitions
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return integer 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlQuestionDatasetDefinitions
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
     * Set type
     *
     * @param integer $type
     * @return MdlQuestionDatasetDefinitions
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set options
     *
     * @param string $options
     * @return MdlQuestionDatasetDefinitions
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get options
     *
     * @return string 
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set itemcount
     *
     * @param integer $itemcount
     * @return MdlQuestionDatasetDefinitions
     */
    public function setItemcount($itemcount)
    {
        $this->itemcount = $itemcount;

        return $this;
    }

    /**
     * Get itemcount
     *
     * @return integer 
     */
    public function getItemcount()
    {
        return $this->itemcount;
    }
}
