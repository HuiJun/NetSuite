<?php

class VendorReturnAuthorizationItem {
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
	 * @var RecordRefList
	 */
	public $serialNumbersList;
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
	public $customer;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isBillable;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isClosed;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $amortizationSched;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isDropShipment;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $amortizStartDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $amortizationEndDate;
	/**
	 * @access public
	 * @var string
	 */
	public $amortizationResidual;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"item" => "RecordRef",
		"vendorName" => "string",
		"line" => "integer",
		"orderLine" => "integer",
		"quantity" => "float",
		"units" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"serialNumbersList" => "RecordRefList",
		"description" => "string",
		"binNumbers" => "string",
		"rate" => "string",
		"amount" => "float",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"grossAmt" => "float",
		"tax1Amt" => "float",
		"options" => "CustomFieldList",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"customer" => "RecordRef",
		"isBillable" => "boolean",
		"isClosed" => "boolean",
		"amortizationSched" => "RecordRef",
		"isDropShipment" => "boolean",
		"amortizStartDate" => "dateTime",
		"amortizationEndDate" => "dateTime",
		"amortizationResidual" => "string",
		"customFieldList" => "CustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
