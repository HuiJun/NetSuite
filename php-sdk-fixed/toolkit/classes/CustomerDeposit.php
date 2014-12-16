<?php

class CustomerDeposit extends Record {
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
	public $customer;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesOrder;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var float
	 */
	public $payment;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $paymentMethod;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ccIsPurchaseCardBin;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ccProcessAsPurchaseCard;
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
	 * @var string
	 */
	public $checkNum;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $creditCardProcessor;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $creditCard;
	/**
	 * @access public
	 * @var string
	 */
	public $ccSecurityCode;
	/**
	 * @access public
	 * @var string
	 */
	public $ccNumber;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
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
	 * @var dateTime
	 */
	public $ccExpireDate;
	/**
	 * @access public
	 * @var string
	 */
	public $debitCardIssueNo;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $validFrom;
	/**
	 * @access public
	 * @var string
	 */
	public $ccName;
	/**
	 * @access public
	 * @var string
	 */
	public $ccStreet;
	/**
	 * @access public
	 * @var string
	 */
	public $ccZipCode;
	/**
	 * @access public
	 * @var boolean
	 */
	public $chargeIt;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ccApproved;
	/**
	 * @access public
	 * @var string
	 */
	public $pnRefNum;
	/**
	 * @access public
	 * @var string
	 */
	public $authCode;
	/**
	 * @access public
	 * @var AvsMatchCode
	 */
	public $ccAvsStreetMatch;
	/**
	 * @access public
	 * @var string
	 */
	public $softDescriptor;
	/**
	 * @access public
	 * @var AvsMatchCode
	 */
	public $ccAvsZipMatch;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isRecurringPayment;
	/**
	 * @access public
	 * @var AvsMatchCode
	 */
	public $ccSecurityCodeMatch;
	/**
	 * @access public
	 * @var string
	 */
	public $threeDStatusCode;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ignoreAvs;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var boolean
	 */
	public $undepFunds;
	/**
	 * @access public
	 * @var CustomerDepositApplyList
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
		"status" => "string",
		"customer" => "RecordRef",
		"salesOrder" => "RecordRef",
		"customForm" => "RecordRef",
		"payment" => "float",
		"currency" => "RecordRef",
		"tranDate" => "dateTime",
		"postingPeriod" => "RecordRef",
		"paymentMethod" => "RecordRef",
		"ccIsPurchaseCardBin" => "boolean",
		"memo" => "string",
		"ccProcessAsPurchaseCard" => "boolean",
		"currencyName" => "string",
		"exchangeRate" => "float",
		"checkNum" => "string",
		"creditCardProcessor" => "RecordRef",
		"creditCard" => "RecordRef",
		"ccSecurityCode" => "string",
		"ccNumber" => "string",
		"subsidiary" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"ccExpireDate" => "dateTime",
		"debitCardIssueNo" => "string",
		"validFrom" => "dateTime",
		"ccName" => "string",
		"ccStreet" => "string",
		"ccZipCode" => "string",
		"chargeIt" => "boolean",
		"ccApproved" => "boolean",
		"pnRefNum" => "string",
		"authCode" => "string",
		"ccAvsStreetMatch" => "AvsMatchCode",
		"softDescriptor" => "string",
		"ccAvsZipMatch" => "AvsMatchCode",
		"isRecurringPayment" => "boolean",
		"ccSecurityCodeMatch" => "AvsMatchCode",
		"threeDStatusCode" => "string",
		"ignoreAvs" => "boolean",
		"account" => "RecordRef",
		"undepFunds" => "boolean",
		"applyList" => "CustomerDepositApplyList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
