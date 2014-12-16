<?php

class SalesOrderItem {
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
	 * @var float
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var boolean
	 */
	public $expandItemGroup;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnHand;
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
	 * @var string
	 */
	public $serialNumbers;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isTaxable;
	/**
	 * @access public
	 * @var SalesOrderItemCommitInventory
	 */
	public $commitInventory;
	/**
	 * @access public
	 * @var float
	 */
	public $orderPriority;
	/**
	 * @access public
	 * @var string
	 */
	public $licenseCode;
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
	 * @var SalesOrderItemCreatePo
	 */
	public $createPo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $createdPo;
	/**
	 * @access public
	 * @var float
	 */
	public $altSalesAmt;
	/**
	 * @access public
	 * @var boolean
	 */
	public $createWo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $poVendor;
	/**
	 * @access public
	 * @var string
	 */
	public $poCurrency;
	/**
	 * @access public
	 * @var float
	 */
	public $poRate;
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
	 * @var integer
	 */
	public $revRecTermInMonths;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $revRecEndDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $deferRevRec;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isClosed;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $catchUpPeriod;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $billingSchedule;
	/**
	 * @access public
	 * @var boolean
	 */
	public $fromJob;
	/**
	 * @access public
	 * @var float
	 */
	public $grossAmt;
	/**
	 * @access public
	 * @var boolean
	 */
	public $excludeFromRateRequest;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isEstimate;
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
	/**
	 * @access public
	 * @var float
	 */
	public $percentComplete;
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
	 * @var float
	 */
	public $quantityBackOrdered;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityBilled;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityCommitted;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityFulfilled;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityPacked;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityPicked;
	/**
	 * @access public
	 * @var float
	 */
	public $tax1Amt;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxCode;
	/**
	 * @access public
	 * @var float
	 */
	public $taxRate1;
	/**
	 * @access public
	 * @var float
	 */
	public $taxRate2;
	/**
	 * @access public
	 * @var string
	 */
	public $giftCertFrom;
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
	 * @var integer
	 */
	public $shipGroup;
	/**
	 * @access public
	 * @var boolean
	 */
	public $itemIsFulfilled;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shipAddress;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shipMethod;
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
	 * @var dateTime
	 */
	public $expectedShipDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $chargeType;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"job" => "RecordRef",
		"item" => "RecordRef",
		"quantityAvailable" => "float",
		"expandItemGroup" => "boolean",
		"quantityOnHand" => "float",
		"quantity" => "float",
		"units" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"description" => "string",
		"price" => "RecordRef",
		"rate" => "string",
		"serialNumbers" => "string",
		"amount" => "float",
		"isTaxable" => "boolean",
		"commitInventory" => "SalesOrderItemCommitInventory",
		"orderPriority" => "float",
		"licenseCode" => "string",
		"options" => "CustomFieldList",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"createPo" => "SalesOrderItemCreatePo",
		"createdPo" => "RecordRef",
		"altSalesAmt" => "float",
		"createWo" => "boolean",
		"poVendor" => "RecordRef",
		"poCurrency" => "string",
		"poRate" => "float",
		"revRecSchedule" => "RecordRef",
		"revRecStartDate" => "dateTime",
		"revRecTermInMonths" => "integer",
		"revRecEndDate" => "dateTime",
		"deferRevRec" => "boolean",
		"isClosed" => "boolean",
		"catchUpPeriod" => "RecordRef",
		"billingSchedule" => "RecordRef",
		"fromJob" => "boolean",
		"grossAmt" => "float",
		"excludeFromRateRequest" => "boolean",
		"isEstimate" => "boolean",
		"line" => "integer",
		"percentComplete" => "float",
		"costEstimateType" => "ItemCostEstimateType",
		"costEstimate" => "float",
		"quantityBackOrdered" => "float",
		"quantityBilled" => "float",
		"quantityCommitted" => "float",
		"quantityFulfilled" => "float",
		"quantityPacked" => "float",
		"quantityPicked" => "float",
		"tax1Amt" => "float",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"giftCertFrom" => "string",
		"giftCertRecipientName" => "string",
		"giftCertRecipientEmail" => "string",
		"giftCertMessage" => "string",
		"giftCertNumber" => "string",
		"shipGroup" => "integer",
		"itemIsFulfilled" => "boolean",
		"shipAddress" => "RecordRef",
		"shipMethod" => "RecordRef",
		"vsoeSopGroup" => "VsoeSopGroup",
		"vsoeIsEstimate" => "boolean",
		"vsoePrice" => "float",
		"vsoeAmount" => "float",
		"vsoeAllocation" => "float",
		"vsoeDeferral" => "VsoeDeferral",
		"vsoePermitDiscount" => "VsoePermitDiscount",
		"vsoeDelivered" => "boolean",
		"expectedShipDate" => "dateTime",
		"chargeType" => "RecordRef",
		"customFieldList" => "CustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
