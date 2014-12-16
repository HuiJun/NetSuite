<?php

class OpportunityItem {
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
	 * @var float
	 */
	public $altSalesAmt;
	/**
	 * @access public
	 * @var integer
	 */
	public $revRecTermInMonths;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $options;
	/**
	 * @access public
	 * @var boolean
	 */
	public $fromJob;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isEstimate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
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
	public $grossAmt;
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
	 * @var dateTime
	 */
	public $expectedShipDate;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"job" => "RecordRef",
		"item" => "RecordRef",
		"line" => "integer",
		"quantityAvailable" => "float",
		"quantityOnHand" => "float",
		"quantity" => "float",
		"units" => "RecordRef",
		"description" => "string",
		"price" => "RecordRef",
		"rate" => "string",
		"amount" => "float",
		"altSalesAmt" => "float",
		"revRecTermInMonths" => "integer",
		"options" => "CustomFieldList",
		"fromJob" => "boolean",
		"department" => "RecordRef",
		"isEstimate" => "boolean",
		"location" => "RecordRef",
		"class" => "RecordRef",
		"costEstimateType" => "ItemCostEstimateType",
		"costEstimate" => "float",
		"grossAmt" => "float",
		"tax1Amt" => "float",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"expectedShipDate" => "dateTime",
		"customFieldList" => "CustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
