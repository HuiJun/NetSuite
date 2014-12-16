<?php

class Check extends Record {
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
	 * @var string
	 */
	public $status;
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
	 * @var float
	 */
	public $balance;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var string
	 */
	public $address;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
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
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $voidJournal;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $toBePrinted;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var float
	 */
	public $taxTotal;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var float
	 */
	public $tax2Total;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var float
	 */
	public $userTotal;
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
	 * @var CheckExpenseList
	 */
	public $expenseList;
	/**
	 * @access public
	 * @var CheckItemList
	 */
	public $itemList;
	/**
	 * @access public
	 * @var CheckLandedCostList
	 */
	public $landedCostsList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $billPay;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
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
		"status" => "string",
		"customForm" => "RecordRef",
		"account" => "RecordRef",
		"balance" => "float",
		"entity" => "RecordRef",
		"address" => "string",
		"subsidiary" => "RecordRef",
		"postingPeriod" => "RecordRef",
		"tranDate" => "dateTime",
		"currency" => "RecordRef",
		"voidJournal" => "RecordRef",
		"exchangeRate" => "float",
		"toBePrinted" => "boolean",
		"tranId" => "string",
		"memo" => "string",
		"department" => "RecordRef",
		"taxTotal" => "float",
		"class" => "RecordRef",
		"tax2Total" => "float",
		"location" => "RecordRef",
		"userTotal" => "float",
		"landedCostMethod" => "LandedCostMethod",
		"landedCostPerLine" => "boolean",
		"transactionNumber" => "string",
		"expenseList" => "CheckExpenseList",
		"itemList" => "CheckItemList",
		"landedCostsList" => "CheckLandedCostList",
		"billPay" => "boolean",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
