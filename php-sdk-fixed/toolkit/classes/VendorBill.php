<?php

class VendorBill extends Record {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $nextApprover;
	/**
	 * @access public
	 * @var string
	 */
	public $vatRegNum;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var string
	 */
	public $currencyName;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $terms;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $dueDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $discountDate;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var float
	 */
	public $userTotal;
	/**
	 * @access public
	 * @var float
	 */
	public $discountAmount;
	/**
	 * @access public
	 * @var float
	 */
	public $taxTotal;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var float
	 */
	public $tax2Total;
	/**
	 * @access public
	 * @var float
	 */
	public $creditLimit;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var string
	 */
	public $status;
	/**
	 * @access public
	 * @var LandedCostMethod
	 */
	public $landedCostMethod;
	/**
	 * @access public
	 * @var boolean
	 */
	public $landedCostPerLine;
	/**
	 * @access public
	 * @var string
	 */
	public $transactionNumber;
	/**
	 * @access public
	 * @var VendorBillExpenseList
	 */
	public $expenseList;
	/**
	 * @access public
	 * @var VendorBillItemList
	 */
	public $itemList;
	/**
	 * @access public
	 * @var PurchLandedCostList
	 */
	public $landedCostsList;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $purchaseOrderList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"account" => "RecordRef",
		"entity" => "RecordRef",
		"subsidiary" => "RecordRef",
		"approvalStatus" => "RecordRef",
		"nextApprover" => "RecordRef",
		"vatRegNum" => "string",
		"postingPeriod" => "RecordRef",
		"tranDate" => "dateTime",
		"currencyName" => "string",
		"exchangeRate" => "float",
		"terms" => "RecordRef",
		"dueDate" => "dateTime",
		"discountDate" => "dateTime",
		"tranId" => "string",
		"userTotal" => "float",
		"discountAmount" => "float",
		"taxTotal" => "float",
		"memo" => "string",
		"tax2Total" => "float",
		"creditLimit" => "float",
		"currency" => "RecordRef",
		"class" => "RecordRef",
		"department" => "RecordRef",
		"location" => "RecordRef",
		"status" => "string",
		"landedCostMethod" => "LandedCostMethod",
		"landedCostPerLine" => "boolean",
		"transactionNumber" => "string",
		"expenseList" => "VendorBillExpenseList",
		"itemList" => "VendorBillItemList",
		"landedCostsList" => "PurchLandedCostList",
		"customFieldList" => "CustomFieldList",
		"purchaseOrderList" => "RecordRefList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
