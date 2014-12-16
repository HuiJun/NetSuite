<?php

class VendorCredit extends Record {
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
	 * @var float
	 */
	public $unApplied;
	/**
	 * @access public
	 * @var boolean
	 */
	public $autoApply;
	/**
	 * @access public
	 * @var float
	 */
	public $applied;
	/**
	 * @access public
	 * @var string
	 */
	public $transactionNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $createdFrom;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var float
	 */
	public $total;
	/**
	 * @access public
	 * @var float
	 */
	public $userTotal;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var string
	 */
	public $currencyName;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
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
	public $subsidiary;
	/**
	 * @access public
	 * @var VendorCreditExpenseList
	 */
	public $expenseList;
	/**
	 * @access public
	 * @var VendorCreditItemList
	 */
	public $itemList;
	/**
	 * @access public
	 * @var VendorCreditApplyList
	 */
	public $applyList;
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
		"customForm" => "RecordRef",
		"account" => "RecordRef",
		"unApplied" => "float",
		"autoApply" => "boolean",
		"applied" => "float",
		"transactionNumber" => "string",
		"tranId" => "string",
		"createdFrom" => "RecordRef",
		"entity" => "RecordRef",
		"total" => "float",
		"userTotal" => "float",
		"currency" => "RecordRef",
		"currencyName" => "string",
		"tranDate" => "dateTime",
		"exchangeRate" => "float",
		"postingPeriod" => "RecordRef",
		"memo" => "string",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"expenseList" => "VendorCreditExpenseList",
		"itemList" => "VendorCreditItemList",
		"applyList" => "VendorCreditApplyList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
