<?php

class Vendor extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var string
	 */
	public $entityId;
	/**
	 * @access public
	 * @var string
	 */
	public $altName;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isPerson;
	/**
	 * @access public
	 * @var string
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var string
	 */
	public $salutation;
	/**
	 * @access public
	 * @var string
	 */
	public $firstName;
	/**
	 * @access public
	 * @var string
	 */
	public $middleName;
	/**
	 * @access public
	 * @var string
	 */
	public $lastName;
	/**
	 * @access public
	 * @var string
	 */
	public $companyName;
	/**
	 * @access public
	 * @var string
	 */
	public $phone;
	/**
	 * @access public
	 * @var string
	 */
	public $fax;
	/**
	 * @access public
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var string
	 */
	public $url;
	/**
	 * @access public
	 * @var string
	 */
	public $defaultAddress;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $category;
	/**
	 * @access public
	 * @var string
	 */
	public $title;
	/**
	 * @access public
	 * @var string
	 */
	public $printOnCheckAs;
	/**
	 * @access public
	 * @var string
	 */
	public $altPhone;
	/**
	 * @access public
	 * @var string
	 */
	public $homePhone;
	/**
	 * @access public
	 * @var string
	 */
	public $mobilePhone;
	/**
	 * @access public
	 * @var string
	 */
	public $altEmail;
	/**
	 * @access public
	 * @var string
	 */
	public $comments;
	/**
	 * @access public
	 * @var GlobalSubscriptionStatus
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $image;
	/**
	 * @access public
	 * @var EmailPreference
	 */
	public $emailPreference;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $representingSubsidiary;
	/**
	 * @access public
	 * @var string
	 */
	public $accountNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $legalName;
	/**
	 * @access public
	 * @var string
	 */
	public $vatRegNumber;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $expenseAccount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $payablesAccount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $terms;
	/**
	 * @access public
	 * @var float
	 */
	public $creditLimit;
	/**
	 * @access public
	 * @var float
	 */
	public $balancePrimary;
	/**
	 * @access public
	 * @var float
	 */
	public $openingBalance;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $openingBalanceDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $openingBalanceAccount;
	/**
	 * @access public
	 * @var float
	 */
	public $balance;
	/**
	 * @access public
	 * @var float
	 */
	public $unbilledOrdersPrimary;
	/**
	 * @access public
	 * @var string
	 */
	public $bcn;
	/**
	 * @access public
	 * @var float
	 */
	public $unbilledOrders;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var boolean
	 */
	public $is1099Eligible;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isJobResourceVend;
	/**
	 * @access public
	 * @var float
	 */
	public $laborCost;
	/**
	 * @access public
	 * @var float
	 */
	public $purchaseOrderQuantity;
	/**
	 * @access public
	 * @var float
	 */
	public $purchaseOrderAmount;
	/**
	 * @access public
	 * @var float
	 */
	public $purchaseOrderQuantityDiff;
	/**
	 * @access public
	 * @var float
	 */
	public $receiptQuantity;
	/**
	 * @access public
	 * @var float
	 */
	public $receiptAmount;
	/**
	 * @access public
	 * @var float
	 */
	public $receiptQuantityDiff;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $workCalendar;
	/**
	 * @access public
	 * @var string
	 */
	public $taxIdNum;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxItem;
	/**
	 * @access public
	 * @var boolean
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var boolean
	 */
	public $sendEmail;
	/**
	 * @access public
	 * @var boolean
	 */
	public $billPay;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isAccountant;
	/**
	 * @access public
	 * @var string
	 */
	public $password;
	/**
	 * @access public
	 * @var string
	 */
	public $password2;
	/**
	 * @access public
	 * @var boolean
	 */
	public $requirePwdChange;
	/**
	 * @access public
	 * @var boolean
	 */
	public $eligibleForCommission;
	/**
	 * @access public
	 * @var boolean
	 */
	public $emailTransactions;
	/**
	 * @access public
	 * @var boolean
	 */
	public $printTransactions;
	/**
	 * @access public
	 * @var boolean
	 */
	public $faxTransactions;
	/**
	 * @access public
	 * @var VendorPricingScheduleList
	 */
	public $pricingScheduleList;
	/**
	 * @access public
	 * @var SubscriptionsList
	 */
	public $subscriptionsList;
	/**
	 * @access public
	 * @var VendorAddressbookList
	 */
	public $addressbookList;
	/**
	 * @access public
	 * @var VendorCurrencyList
	 */
	public $currencyList;
	/**
	 * @access public
	 * @var VendorRolesList
	 */
	public $rolesList;
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
		"customForm" => "RecordRef",
		"entityId" => "string",
		"altName" => "string",
		"isPerson" => "boolean",
		"phoneticName" => "string",
		"salutation" => "string",
		"firstName" => "string",
		"middleName" => "string",
		"lastName" => "string",
		"companyName" => "string",
		"phone" => "string",
		"fax" => "string",
		"email" => "string",
		"url" => "string",
		"defaultAddress" => "string",
		"isInactive" => "boolean",
		"lastModifiedDate" => "dateTime",
		"dateCreated" => "dateTime",
		"category" => "RecordRef",
		"title" => "string",
		"printOnCheckAs" => "string",
		"altPhone" => "string",
		"homePhone" => "string",
		"mobilePhone" => "string",
		"altEmail" => "string",
		"comments" => "string",
		"globalSubscriptionStatus" => "GlobalSubscriptionStatus",
		"image" => "RecordRef",
		"emailPreference" => "EmailPreference",
		"subsidiary" => "RecordRef",
		"representingSubsidiary" => "RecordRef",
		"accountNumber" => "string",
		"legalName" => "string",
		"vatRegNumber" => "string",
		"expenseAccount" => "RecordRef",
		"payablesAccount" => "RecordRef",
		"terms" => "RecordRef",
		"creditLimit" => "float",
		"balancePrimary" => "float",
		"openingBalance" => "float",
		"openingBalanceDate" => "dateTime",
		"openingBalanceAccount" => "RecordRef",
		"balance" => "float",
		"unbilledOrdersPrimary" => "float",
		"bcn" => "string",
		"unbilledOrders" => "float",
		"currency" => "RecordRef",
		"is1099Eligible" => "boolean",
		"isJobResourceVend" => "boolean",
		"laborCost" => "float",
		"purchaseOrderQuantity" => "float",
		"purchaseOrderAmount" => "float",
		"purchaseOrderQuantityDiff" => "float",
		"receiptQuantity" => "float",
		"receiptAmount" => "float",
		"receiptQuantityDiff" => "float",
		"workCalendar" => "RecordRef",
		"taxIdNum" => "string",
		"taxItem" => "RecordRef",
		"giveAccess" => "boolean",
		"sendEmail" => "boolean",
		"billPay" => "boolean",
		"isAccountant" => "boolean",
		"password" => "string",
		"password2" => "string",
		"requirePwdChange" => "boolean",
		"eligibleForCommission" => "boolean",
		"emailTransactions" => "boolean",
		"printTransactions" => "boolean",
		"faxTransactions" => "boolean",
		"pricingScheduleList" => "VendorPricingScheduleList",
		"subscriptionsList" => "SubscriptionsList",
		"addressbookList" => "VendorAddressbookList",
		"currencyList" => "VendorCurrencyList",
		"rolesList" => "VendorRolesList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
