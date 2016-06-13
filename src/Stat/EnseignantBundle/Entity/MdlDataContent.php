<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlDataContent
 *
 * @ORM\Table(name="mdl_data_content", indexes={@ORM\Index(name="mdl_datacont_rec_ix", columns={"recordid"}), @ORM\Index(name="mdl_datacont_fie_ix", columns={"fieldid"})})
 * @ORM\Entity
 */
class MdlDataContent
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
     * @ORM\Column(name="fieldid", type="bigint", nullable=false)
     */
    private $fieldid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="recordid", type="bigint", nullable=false)
     */
    private $recordid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="content1", type="text", nullable=true)
     */
    private $content1;

    /**
     * @var string
     *
     * @ORM\Column(name="content2", type="text", nullable=true)
     */
    private $content2;

    /**
     * @var string
     *
     * @ORM\Column(name="content3", type="text", nullable=true)
     */
    private $content3;

    /**
     * @var string
     *
     * @ORM\Column(name="content4", type="text", nullable=true)
     */
    private $content4;



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
     * Set fieldid
     *
     * @param integer $fieldid
     * @return MdlDataContent
     */
    public function setFieldid($fieldid)
    {
        $this->fieldid = $fieldid;

        return $this;
    }

    /**
     * Get fieldid
     *
     * @return integer 
     */
    public function getFieldid()
    {
        return $this->fieldid;
    }

    /**
     * Set recordid
     *
     * @param integer $recordid
     * @return MdlDataContent
     */
    public function setRecordid($recordid)
    {
        $this->recordid = $recordid;

        return $this;
    }

    /**
     * Get recordid
     *
     * @return integer 
     */
    public function getRecordid()
    {
        return $this->recordid;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return MdlDataContent
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set content1
     *
     * @param string $content1
     * @return MdlDataContent
     */
    public function setContent1($content1)
    {
        $this->content1 = $content1;

        return $this;
    }

    /**
     * Get content1
     *
     * @return string 
     */
    public function getContent1()
    {
        return $this->content1;
    }

    /**
     * Set content2
     *
     * @param string $content2
     * @return MdlDataContent
     */
    public function setContent2($content2)
    {
        $this->content2 = $content2;

        return $this;
    }

    /**
     * Get content2
     *
     * @return string 
     */
    public function getContent2()
    {
        return $this->content2;
    }

    /**
     * Set content3
     *
     * @param string $content3
     * @return MdlDataContent
     */
    public function setContent3($content3)
    {
        $this->content3 = $content3;

        return $this;
    }

    /**
     * Get content3
     *
     * @return string 
     */
    public function getContent3()
    {
        return $this->content3;
    }

    /**
     * Set content4
     *
     * @param string $content4
     * @return MdlDataContent
     */
    public function setContent4($content4)
    {
        $this->content4 = $content4;

        return $this;
    }

    /**
     * Get content4
     *
     * @return string 
     */
    public function getContent4()
    {
        return $this->content4;
    }
}
