<?php

class CheckItem {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var string
	 */
	public $vendorName;
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
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
	 * @var dateTime
	 */
	public $expirationDate;
	/**
	 * @access public
	 * @var string
	 */
	public $rate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxCode;
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
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var float
	 */
	public $grossAmt;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var float
	 */
	public $tax1Amt;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customer;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isBillable;
	/**
	 * @access public
	 * @var LandedCost
	 */
	public $landedCost;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"item" => "RecordRef",
		"vendorName" => "string",
		"line" => "integer",
		"quantity" => "float",
		"units" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"description" => "string",
		"binNumbers" => "string",
		"serialNumbers" => "string",
		"expirationDate" => "dateTime",
		"rate" => "string",
		"taxCode" => "RecordRef",
		"amount" => "float",
		"options" => "CustomFieldList",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"department" => "RecordRef",
		"grossAmt" => "float",
		"class" => "RecordRef",
		"tax1Amt" => "float",
		"location" => "RecordRef",
		"customer" => "RecordRef",
		"isBillable" => "boolean",
		"landedCost" => "LandedCost",
		"customFieldList" => "CustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
