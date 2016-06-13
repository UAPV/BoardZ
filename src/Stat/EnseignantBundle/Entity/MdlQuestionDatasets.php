<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlQuestionDatasets
 *
 * @ORM\Table(name="mdl_question_datasets", indexes={@ORM\Index(name="mdl_quesdata_quedat_ix", columns={"question", "datasetdefinition"}), @ORM\Index(name="mdl_quesdata_que_ix", columns={"question"}), @ORM\Index(name="mdl_quesdata_dat_ix", columns={"datasetdefinition"})})
 * @ORM\Entity
 */
class MdlQuestionDatasets
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
     * @ORM\Column(name="question", type="bigint", nullable=false)
     */
    private $question = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="datasetdefinition", type="bigint", nullable=false)
     */
    private $datasetdefinition = '0';



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
     * Set question
     *
     * @param integer $question
     * @return MdlQuestionDatasets
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return integer 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set datasetdefinition
     *
     * @param integer $datasetdefinition
     * @return MdlQuestionDatasets
     */
    public function setDatasetdefinition($datasetdefinition)
    {
        $this->datasetdefinition = $datasetdefinition;

        return $this;
    }

    /**
     * Get datasetdefinition
     *
     * @return integer 
     */
    public function getDatasetdefinition()
    {
        return $this->datasetdefinition;
    }
}
