<?php

class CustomerPayment extends Record {
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
	public $arAcct;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customer;
	/**
	 * @access public
	 * @var float
	 */
	public $balance;
	/**
	 * @access public
	 * @var float
	 */
	public $pending;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var float
	 */
	public $payment;
	/**
	 * @access public
	 * @var boolean
	 */
	public $autoApply;
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
	public $checkNum;
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
	public $creditCard;
	/**
	 * @access public
	 * @var boolean
	 */
	public $chargeIt;
	/**
	 * @access public
	 * @var string
	 */
	public $ccNumber;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $ccExpireDate;
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
	public $ccApproved;
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
	 * @var string
	 */
	public $ccSecurityCode;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ignoreAvs;
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
	 * @var string
	 */
	public $pnRefNum;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $creditCardProcessor;
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
	 * @var boolean
	 */
	public $undepFunds;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var float
	 */
	public $total;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var float
	 */
	public $applied;
	/**
	 * @access public
	 * @var float
	 */
	public $unapplied;
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
	 * @var CustomerPaymentApplyList
	 */
	public $applyList;
	/**
	 * @access public
	 * @var CustomerPaymentCreditList
	 */
	public $creditList;
	/**
	 * @access public
	 * @var CustomerPaymentDepositList
	 */
	public $depositList;
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
		"arAcct" => "RecordRef",
		"customer" => "RecordRef",
		"balance" => "float",
		"pending" => "float",
		"currency" => "RecordRef",
		"payment" => "float",
		"autoApply" => "boolean",
		"tranDate" => "dateTime",
		"postingPeriod" => "RecordRef",
		"paymentMethod" => "RecordRef",
		"ccIsPurchaseCardBin" => "boolean",
		"memo" => "string",
		"ccProcessAsPurchaseCard" => "boolean",
		"checkNum" => "string",
		"currencyName" => "string",
		"exchangeRate" => "float",
		"creditCard" => "RecordRef",
		"chargeIt" => "boolean",
		"ccNumber" => "string",
		"ccExpireDate" => "dateTime",
		"ccName" => "string",
		"ccStreet" => "string",
		"ccZipCode" => "string",
		"ccApproved" => "boolean",
		"authCode" => "string",
		"ccAvsStreetMatch" => "AvsMatchCode",
		"ccAvsZipMatch" => "AvsMatchCode",
		"isRecurringPayment" => "boolean",
		"ccSecurityCode" => "string",
		"ignoreAvs" => "boolean",
		"ccSecurityCodeMatch" => "AvsMatchCode",
		"threeDStatusCode" => "string",
		"pnRefNum" => "string",
		"creditCardProcessor" => "RecordRef",
		"debitCardIssueNo" => "string",
		"validFrom" => "dateTime",
		"undepFunds" => "boolean",
		"account" => "RecordRef",
		"total" => "float",
		"subsidiary" => "RecordRef",
		"applied" => "float",
		"unapplied" => "float",
		"class" => "RecordRef",
		"department" => "RecordRef",
		"location" => "RecordRef",
		"status" => "string",
		"applyList" => "CustomerPaymentApplyList",
		"creditList" => "CustomerPaymentCreditList",
		"depositList" => "CustomerPaymentDepositList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
