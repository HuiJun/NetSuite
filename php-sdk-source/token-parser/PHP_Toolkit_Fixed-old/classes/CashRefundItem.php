<?php

class CashRefundItem {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $job;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
	/**
	 * @access public
	 * @var integer
	 */
	public $orderLine;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $units;
	/**
	 * @access public
	 * @var InventoryDetail
	 */
	public $inventoryDetail;
	/**
	 * @access public
	 * @var string
	 */
	public $binNumbers;
	/**
	 * @access public
	 * @var string
	 */
	public $serialNumbers;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $price;
	/**
	 * @access public
	 * @var string
	 */
	public $rate;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxCode;
	/**
	 * @access public
	 * @var string
	 */
	public $taxRate1;
	/**
	 * @access public
	 * @var string
	 */
	public $taxRate2;
	/**
	 * @access public
	 * @var float
	 */
	public $tax1Amt;
	/**
	 * @access public
	 * @var float
	 */
	public $grossAmt;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isTaxable;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $options;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $revRecSchedule;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $revRecStartDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $revRecEndDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $catchUpPeriod;
	/**
	 * @access public
	 * @var boolean
	 */
	public $deferRevRec;
	/**
	 * @access public
	 * @var string
	 */
	public $giftCertFrom;
	/**
	 * @access public
	 * @var ItemCostEstimateType
	 */
	public $costEstimateType;
	/**
	 * @access public
	 * @var float
	 */
	public $costEstimate;
	/**
	 * @access public
	 * @var string
	 */
	public $giftCertRecipientName;
	/**
	 * @access public
	 * @var string
	 */
	public $giftCertRecipientEmail;
	/**
	 * @access public
	 * @var string
	 */
	public $giftCertMessage;
	/**
	 * @access public
	 * @var string
	 */
	public $giftCertNumber;
	/**
	 * @access public
	 * @var VsoeSopGroup
	 */
	public $vsoeSopGroup;
	/**
	 * @access public
	 * @var boolean
	 */
	public $vsoeIsEstimate;
	/**
	 * @access public
	 * @var float
	 */
	public $vsoePrice;
	/**
	 * @access public
	 * @var float
	 */
	public $vsoeAmount;
	/**
	 * @access public
	 * @var float
	 */
	public $vsoeAllocation;
	/**
	 * @access public
	 * @var VsoeDeferral
	 */
	public $vsoeDeferral;
	/**
	 * @access public
	 * @var VsoePermitDiscount
	 */
	public $vsoePermitDiscount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $vsoeDelivered;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $chargeType;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $chargesList;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"job" => "RecordRef",
		"item" => "RecordRef",
		"line" => "integer",
		"orderLine" => "integer",
		"quantity" => "float",
		"units" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"binNumbers" => "string",
		"serialNumbers" => "string",
		"description" => "string",
		"price" => "RecordRef",
		"rate" => "string",
		"amount" => "float",
		"taxCode" => "RecordRef",
		"taxRate1" => "string",
		"taxRate2" => "string",
		"tax1Amt" => "float",
		"grossAmt" => "float",
		"isTaxable" => "boolean",
		"options" => "CustomFieldList",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"revRecSchedule" => "RecordRef",
		"revRecStartDate" => "dateTime",
		"revRecEndDate" => "dateTime",
		"catchUpPeriod" => "RecordRef",
		"deferRevRec" => "boolean",
		"giftCertFrom" => "string",
		"costEstimateType" => "ItemCostEstimateType",
		"costEstimate" => "float",
		"giftCertRecipientName" => "string",
		"giftCertRecipientEmail" => "string",
		"giftCertMessage" => "string",
		"giftCertNumber" => "string",
		"vsoeSopGroup" => "VsoeSopGroup",
		"vsoeIsEstimate" => "boolean",
		"vsoePrice" => "float",
		"vsoeAmount" => "float",
		"vsoeAllocation" => "float",
		"vsoeDeferral" => "VsoeDeferral",
		"vsoePermitDiscount" => "VsoePermitDiscount",
		"vsoeDelivered" => "boolean",
		"chargeType" => "RecordRef",
		"chargesList" => "RecordRefList",
		"customFieldList" => "CustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
