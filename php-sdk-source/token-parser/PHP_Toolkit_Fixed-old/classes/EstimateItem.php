<?php

class EstimateItem {
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
	 * @var boolean
	 */
	public $expandItemGroup;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityAvailable;
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
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var string
	 */
	public $serialNumbers;
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
	 * @var CustomFieldList
	 */
	public $options;
	/**
	 * @access public
	 * @var integer
	 */
	public $revRecTermInMonths;
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
	 * @var boolean
	 */
	public $isTaxable;
	/**
	 * @access public
	 * @var float
	 */
	public $altSalesAmt;
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
	public $isEstimate;
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
	 * @var boolean
	 */
	public $excludeFromRateRequest;
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
		"line" => "integer",
		"expandItemGroup" => "boolean",
		"quantityAvailable" => "float",
		"quantityOnHand" => "float",
		"quantity" => "float",
		"units" => "RecordRef",
		"description" => "string",
		"serialNumbers" => "string",
		"price" => "RecordRef",
		"rate" => "string",
		"amount" => "float",
		"options" => "CustomFieldList",
		"revRecTermInMonths" => "integer",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"isTaxable" => "boolean",
		"altSalesAmt" => "float",
		"fromJob" => "boolean",
		"grossAmt" => "float",
		"isEstimate" => "boolean",
		"tax1Amt" => "float",
		"taxCode" => "RecordRef",
		"costEstimateType" => "ItemCostEstimateType",
		"costEstimate" => "float",
		"excludeFromRateRequest" => "boolean",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"shipGroup" => "integer",
		"itemIsFulfilled" => "boolean",
		"shipAddress" => "RecordRef",
		"shipMethod" => "RecordRef",
		"expectedShipDate" => "dateTime",
		"chargeType" => "RecordRef",
		"customFieldList" => "CustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
