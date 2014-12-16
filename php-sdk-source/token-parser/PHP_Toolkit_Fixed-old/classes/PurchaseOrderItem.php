<?php

class PurchaseOrderItem {
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
	 * @var string
	 */
	public $vendorName;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityReceived;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityBilled;
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
	public $quantity;
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
	public $purchaseContract;
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
	public $landedCostCategory;
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
	 * @var TransactionBillVarianceStatus
	 */
	public $billVarianceStatus;
	/**
	 * @access public
	 * @var boolean
	 */
	public $matchBillToReceipt;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expectedReceiptDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isClosed;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $createdFrom;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $linkedOrderList;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"item" => "RecordRef",
		"line" => "integer",
		"vendorName" => "string",
		"quantityReceived" => "float",
		"quantityBilled" => "float",
		"quantityAvailable" => "float",
		"quantityOnHand" => "float",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"quantity" => "float",
		"tax1Amt" => "float",
		"grossAmt" => "float",
		"units" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"serialNumbers" => "string",
		"description" => "string",
		"purchaseContract" => "RecordRef",
		"rate" => "string",
		"amount" => "float",
		"options" => "CustomFieldList",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"landedCostCategory" => "RecordRef",
		"customer" => "RecordRef",
		"isBillable" => "boolean",
		"billVarianceStatus" => "TransactionBillVarianceStatus",
		"matchBillToReceipt" => "boolean",
		"expectedReceiptDate" => "dateTime",
		"isClosed" => "boolean",
		"createdFrom" => "RecordRef",
		"linkedOrderList" => "RecordRefList",
		"customFieldList" => "CustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
