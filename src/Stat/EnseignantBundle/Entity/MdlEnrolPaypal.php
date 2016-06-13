<?php

namespace Stat\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlEnrolPaypal
 *
 * @ORM\Table(name="mdl_enrol_paypal")
 * @ORM\Entity
 */
class MdlEnrolPaypal
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
     * @var string
     *
     * @ORM\Column(name="business", type="string", length=255, nullable=false)
     */
    private $business = '';

    /**
     * @var string
     *
     * @ORM\Column(name="receiver_email", type="string", length=255, nullable=false)
     */
    private $receiverEmail = '';

    /**
     * @var string
     *
     * @ORM\Column(name="receiver_id", type="string", length=255, nullable=false)
     */
    private $receiverId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="item_name", type="string", length=255, nullable=false)
     */
    private $itemName = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="courseid", type="bigint", nullable=false)
     */
    private $courseid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="instanceid", type="bigint", nullable=false)
     */
    private $instanceid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="memo", type="string", length=255, nullable=false)
     */
    private $memo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tax", type="string", length=255, nullable=false)
     */
    private $tax = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option_name1", type="string", length=255, nullable=false)
     */
    private $optionName1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option_selection1_x", type="string", length=255, nullable=false)
     */
    private $optionSelection1X = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option_name2", type="string", length=255, nullable=false)
     */
    private $optionName2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option_selection2_x", type="string", length=255, nullable=false)
     */
    private $optionSelection2X = '';

    /**
     * @var string
     *
     * @ORM\Column(name="payment_status", type="string", length=255, nullable=false)
     */
    private $paymentStatus = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pending_reason", type="string", length=255, nullable=false)
     */
    private $pendingReason = '';

    /**
     * @var string
     *
     * @ORM\Column(name="reason_code", type="string", length=30, nullable=false)
     */
    private $reasonCode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="txn_id", type="string", length=255, nullable=false)
     */
    private $txnId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="parent_txn_id", type="string", length=255, nullable=false)
     */
    private $parentTxnId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="payment_type", type="string", length=30, nullable=false)
     */
    private $paymentType = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="timeupdated", type="bigint", nullable=false)
     */
    private $timeupdated = '0';



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
     * Set business
     *
     * @param string $business
     * @return MdlEnrolPaypal
     */
    public function setBusiness($business)
    {
        $this->business = $business;

        return $this;
    }

    /**
     * Get business
     *
     * @return string 
     */
    public function getBusiness()
    {
        return $this->business;
    }

    /**
     * Set receiverEmail
     *
     * @param string $receiverEmail
     * @return MdlEnrolPaypal
     */
    public function setReceiverEmail($receiverEmail)
    {
        $this->receiverEmail = $receiverEmail;

        return $this;
    }

    /**
     * Get receiverEmail
     *
     * @return string 
     */
    public function getReceiverEmail()
    {
        return $this->receiverEmail;
    }

    /**
     * Set receiverId
     *
     * @param string $receiverId
     * @return MdlEnrolPaypal
     */
    public function setReceiverId($receiverId)
    {
        $this->receiverId = $receiverId;

        return $this;
    }

    /**
     * Get receiverId
     *
     * @return string 
     */
    public function getReceiverId()
    {
        return $this->receiverId;
    }

    /**
     * Set itemName
     *
     * @param string $itemName
     * @return MdlEnrolPaypal
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;

        return $this;
    }

    /**
     * Get itemName
     *
     * @return string 
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * Set courseid
     *
     * @param integer $courseid
     * @return MdlEnrolPaypal
     */
    public function setCourseid($courseid)
    {
        $this->courseid = $courseid;

        return $this;
    }

    /**
     * Get courseid
     *
     * @return integer 
     */
    public function getCourseid()
    {
        return $this->courseid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return MdlEnrolPaypal
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
     * Set instanceid
     *
     * @param integer $instanceid
     * @return MdlEnrolPaypal
     */
    public function setInstanceid($instanceid)
    {
        $this->instanceid = $instanceid;

        return $this;
    }

    /**
     * Get instanceid
     *
     * @return integer 
     */
    public function getInstanceid()
    {
        return $this->instanceid;
    }

    /**
     * Set memo
     *
     * @param string $memo
     * @return MdlEnrolPaypal
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * Get memo
     *
     * @return string 
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Set tax
     *
     * @param string $tax
     * @return MdlEnrolPaypal
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Get tax
     *
     * @return string 
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Set optionName1
     *
     * @param string $optionName1
     * @return MdlEnrolPaypal
     */
    public function setOptionName1($optionName1)
    {
        $this->optionName1 = $optionName1;

        return $this;
    }

    /**
     * Get optionName1
     *
     * @return string 
     */
    public function getOptionName1()
    {
        return $this->optionName1;
    }

    /**
     * Set optionSelection1X
     *
     * @param string $optionSelection1X
     * @return MdlEnrolPaypal
     */
    public function setOptionSelection1X($optionSelection1X)
    {
        $this->optionSelection1X = $optionSelection1X;

        return $this;
    }

    /**
     * Get optionSelection1X
     *
     * @return string 
     */
    public function getOptionSelection1X()
    {
        return $this->optionSelection1X;
    }

    /**
     * Set optionName2
     *
     * @param string $optionName2
     * @return MdlEnrolPaypal
     */
    public function setOptionName2($optionName2)
    {
        $this->optionName2 = $optionName2;

        return $this;
    }

    /**
     * Get optionName2
     *
     * @return string 
     */
    public function getOptionName2()
    {
        return $this->optionName2;
    }

    /**
     * Set optionSelection2X
     *
     * @param string $optionSelection2X
     * @return MdlEnrolPaypal
     */
    public function setOptionSelection2X($optionSelection2X)
    {
        $this->optionSelection2X = $optionSelection2X;

        return $this;
    }

    /**
     * Get optionSelection2X
     *
     * @return string 
     */
    public function getOptionSelection2X()
    {
        return $this->optionSelection2X;
    }

    /**
     * Set paymentStatus
     *
     * @param string $paymentStatus
     * @return MdlEnrolPaypal
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * Get paymentStatus
     *
     * @return string 
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * Set pendingReason
     *
     * @param string $pendingReason
     * @return MdlEnrolPaypal
     */
    public function setPendingReason($pendingReason)
    {
        $this->pendingReason = $pendingReason;

        return $this;
    }

    /**
     * Get pendingReason
     *
     * @return string 
     */
    public function getPendingReason()
    {
        return $this->pendingReason;
    }

    /**
     * Set reasonCode
     *
     * @param string $reasonCode
     * @return MdlEnrolPaypal
     */
    public function setReasonCode($reasonCode)
    {
        $this->reasonCode = $reasonCode;

        return $this;
    }

    /**
     * Get reasonCode
     *
     * @return string 
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Set txnId
     *
     * @param string $txnId
     * @return MdlEnrolPaypal
     */
    public function setTxnId($txnId)
    {
        $this->txnId = $txnId;

        return $this;
    }

    /**
     * Get txnId
     *
     * @return string 
     */
    public function getTxnId()
    {
        return $this->txnId;
    }

    /**
     * Set parentTxnId
     *
     * @param string $parentTxnId
     * @return MdlEnrolPaypal
     */
    public function setParentTxnId($parentTxnId)
    {
        $this->parentTxnId = $parentTxnId;

        return $this;
    }

    /**
     * Get parentTxnId
     *
     * @return string 
     */
    public function getParentTxnId()
    {
        return $this->parentTxnId;
    }

    /**
     * Set paymentType
     *
     * @param string $paymentType
     * @return MdlEnrolPaypal
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return string 
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set timeupdated
     *
     * @param integer $timeupdated
     * @return MdlEnrolPaypal
     */
    public function setTimeupdated($timeupdated)
    {
        $this->timeupdated = $timeupdated;

        return $this;
    }

    /**
     * Get timeupdated
     *
     * @return integer 
     */
    public function getTimeupdated()
    {
        return $this->timeupdated;
    }
}
