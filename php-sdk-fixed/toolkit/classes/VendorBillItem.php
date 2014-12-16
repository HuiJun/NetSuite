<?php

class VendorBillItem {
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
	public $orderDoc;
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
	public $description;
	/**
	 * @access public
	 * @var string
	 */
	public $serialNumbers;
	/**
	 * @access public
	 * @var string
	 */
	public $binNumbers;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expirationDate;
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
	 * @var RecordRef
	 */
	public $landedCostCategory;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isBillable;
	/**
	 * @access public
	 * @var TransactionBillVarianceStatus
	 */
	public $billVarianceStatus;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $billreceiptsList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $amortizationSched;
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
		"orderDoc" => "integer",
		"orderLine" => "integer",
		"quantity" => "float",
		"units" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"description" => "string",
		"serialNumbers" => "string",
		"binNumbers" => "string",
		"expirationDate" => "dateTime",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"grossAmt" => "float",
		"tax1Amt" => "float",
		"rate" => "string",
		"amount" => "float",
		"options" => "CustomFieldList",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"customer" => "RecordRef",
		"landedCostCategory" => "RecordRef",
		"isBillable" => "boolean",
		"billVarianceStatus" => "TransactionBillVarianceStatus",
		"billreceiptsList" => "RecordRefList",
		"amortizationSched" => "RecordRef",
		"amortizStartDate" => "dateTime",
		"amortizationEndDate" => "dateTime",
		"amortizationResidual" => "string",
		"landedCost" => "LandedCost",
		"customFieldList" => "CustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
