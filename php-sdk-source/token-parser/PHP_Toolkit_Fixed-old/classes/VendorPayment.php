<?php

class VendorPayment extends Record {
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
	public $balance;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $apAcct;
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
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $voidJournal;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
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
	 * @var boolean
	 */
	public $toAch;
	/**
	 * @access public
	 * @var boolean
	 */
	public $toBePrinted;
	/**
	 * @access public
	 * @var boolean
	 */
	public $printVoucher;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var float
	 */
	public $total;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
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
	 * @var string
	 */
	public $status;
	/**
	 * @access public
	 * @var string
	 */
	public $transactionNumber;
	/**
	 * @access public
	 * @var VendorPaymentApplyList
	 */
	public $applyList;
	/**
	 * @access public
	 * @var VendorPaymentCreditList
	 */
	public $creditList;
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
		"customForm" => "RecordRef",
		"account" => "RecordRef",
		"balance" => "float",
		"apAcct" => "RecordRef",
		"entity" => "RecordRef",
		"address" => "string",
		"tranDate" => "dateTime",
		"voidJournal" => "RecordRef",
		"postingPeriod" => "RecordRef",
		"currencyName" => "string",
		"exchangeRate" => "float",
		"toAch" => "boolean",
		"toBePrinted" => "boolean",
		"printVoucher" => "boolean",
		"tranId" => "string",
		"total" => "float",
		"currency" => "RecordRef",
		"department" => "RecordRef",
		"memo" => "string",
		"subsidiary" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"status" => "string",
		"transactionNumber" => "string",
		"applyList" => "VendorPaymentApplyList",
		"creditList" => "VendorPaymentCreditList",
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
