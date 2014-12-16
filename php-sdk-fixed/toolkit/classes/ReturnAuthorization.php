<?php

class ReturnAuthorization extends Record {
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
	public $currency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var string
	 */
	public $vatRegNum;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var string
	 */
	public $source;
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
	 * @var RecordRef
	 */
	public $intercoTransaction;
	/**
	 * @access public
	 * @var IntercoStatus
	 */
	public $intercoStatus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $job;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $partner;
	/**
	 * @access public
	 * @var string
	 */
	public $otherRefNum;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $leadSource;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $drAccount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fxAccount;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $salesEffectiveDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $createdFrom;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $revRecSchedule;
	/**
	 * @access public
	 * @var float
	 */
	public $totalCostEstimate;
	/**
	 * @access public
	 * @var float
	 */
	public $estGrossProfit;
	/**
	 * @access public
	 * @var float
	 */
	public $estGrossProfitPercent;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $revRecStartDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $revRecEndDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $excludeCommission;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var string
	 */
	public $currencyName;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $discountItem;
	/**
	 * @access public
	 * @var string
	 */
	public $discountRate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxItem;
	/**
	 * @access public
	 * @var float
	 */
	public $taxRate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $toBePrinted;
	/**
	 * @access public
	 * @var boolean
	 */
	public $toBeEmailed;
	/**
	 * @access public
	 * @var boolean
	 */
	public $toBeFaxed;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $messageSel;
	/**
	 * @access public
	 * @var string
	 */
	public $message;
	/**
	 * @access public
	 * @var Address
	 */
	public $billingAddress;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $billAddressList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shipAddressList;
	/**
	 * @access public
	 * @var string
	 */
	public $shipAddress;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesGroup;
	/**
	 * @access public
	 * @var boolean
	 */
	public $syncSalesTeams;
	/**
	 * @access public
	 * @var RevenueStatus
	 */
	public $revenueStatus;
	/**
	 * @access public
	 * @var float
	 */
	public $recognizedRevenue;
	/**
	 * @access public
	 * @var float
	 */
	public $deferredRevenue;
	/**
	 * @access public
	 * @var boolean
	 */
	public $revRecOnRevCommitment;
	/**
	 * @access public
	 * @var RevenueCommitStatus
	 */
	public $revCommitStatus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $paymentMethod;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $creditCard;
	/**
	 * @access public
	 * @var string
	 */
	public $ccNumber;
	/**
	 * @access public
	 * @var float
	 */
	public $altSalesTotal;
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
	public $pnRefNum;
	/**
	 * @access public
	 * @var float
	 */
	public $subTotal;
	/**
	 * @access public
	 * @var float
	 */
	public $discountTotal;
	/**
	 * @access public
	 * @var float
	 */
	public $total;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $creditCardProcessor;
	/**
	 * @access public
	 * @var string
	 */
	public $payPalAuthId;
	/**
	 * @access public
	 * @var boolean
	 */
	public $payPalProcess;
	/**
	 * @access public
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var string
	 */
	public $fax;
	/**
	 * @access public
	 * @var string
	 */
	public $debitCardIssueNo;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isTaxable;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $promoCode;
	/**
	 * @access public
	 * @var string
	 */
	public $status;
	/**
	 * @access public
	 * @var float
	 */
	public $taxTotal;
	/**
	 * @access public
	 * @var float
	 */
	public $tax2Total;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $validFrom;
	/**
	 * @access public
	 * @var ReturnAuthorizationOrderStatus
	 */
	public $orderStatus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesRep;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $giftCert;
	/**
	 * @access public
	 * @var string
	 */
	public $contribPct;
	/**
	 * @access public
	 * @var float
	 */
	public $giftCertTotal;
	/**
	 * @access public
	 * @var float
	 */
	public $giftCertApplied;
	/**
	 * @access public
	 * @var float
	 */
	public $giftCertAvailable;
	/**
	 * @access public
	 * @var boolean
	 */
	public $tranIsVsoeBundle;
	/**
	 * @access public
	 * @var boolean
	 */
	public $vsoeAutoCalc;
	/**
	 * @access public
	 * @var boolean
	 */
	public $syncPartnerTeams;
	/**
	 * @access public
	 * @var ReturnAuthorizationItemList
	 */
	public $itemList;
	/**
	 * @access public
	 * @var ReturnAuthorizationSalesTeamList
	 */
	public $salesTeamList;
	/**
	 * @access public
	 * @var ReturnAuthorizationPartnersList
	 */
	public $partnersList;
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
		"currency" => "RecordRef",
		"entity" => "RecordRef",
		"vatRegNum" => "string",
		"tranDate" => "dateTime",
		"tranId" => "string",
		"source" => "string",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"intercoTransaction" => "RecordRef",
		"intercoStatus" => "IntercoStatus",
		"job" => "RecordRef",
		"partner" => "RecordRef",
		"otherRefNum" => "string",
		"leadSource" => "RecordRef",
		"memo" => "string",
		"drAccount" => "RecordRef",
		"fxAccount" => "RecordRef",
		"salesEffectiveDate" => "dateTime",
		"createdFrom" => "RecordRef",
		"revRecSchedule" => "RecordRef",
		"totalCostEstimate" => "float",
		"estGrossProfit" => "float",
		"estGrossProfitPercent" => "float",
		"revRecStartDate" => "dateTime",
		"revRecEndDate" => "dateTime",
		"excludeCommission" => "boolean",
		"exchangeRate" => "float",
		"currencyName" => "string",
		"discountItem" => "RecordRef",
		"discountRate" => "string",
		"taxItem" => "RecordRef",
		"taxRate" => "float",
		"toBePrinted" => "boolean",
		"toBeEmailed" => "boolean",
		"toBeFaxed" => "boolean",
		"messageSel" => "RecordRef",
		"message" => "string",
		"billingAddress" => "Address",
		"billAddressList" => "RecordRef",
		"shipAddressList" => "RecordRef",
		"shipAddress" => "string",
		"salesGroup" => "RecordRef",
		"syncSalesTeams" => "boolean",
		"revenueStatus" => "RevenueStatus",
		"recognizedRevenue" => "float",
		"deferredRevenue" => "float",
		"revRecOnRevCommitment" => "boolean",
		"revCommitStatus" => "RevenueCommitStatus",
		"paymentMethod" => "RecordRef",
		"creditCard" => "RecordRef",
		"ccNumber" => "string",
		"altSalesTotal" => "float",
		"ccExpireDate" => "dateTime",
		"ccName" => "string",
		"ccStreet" => "string",
		"ccZipCode" => "string",
		"ccApproved" => "boolean",
		"pnRefNum" => "string",
		"subTotal" => "float",
		"discountTotal" => "float",
		"total" => "float",
		"creditCardProcessor" => "RecordRef",
		"payPalAuthId" => "string",
		"payPalProcess" => "boolean",
		"email" => "string",
		"fax" => "string",
		"debitCardIssueNo" => "string",
		"isTaxable" => "boolean",
		"promoCode" => "RecordRef",
		"status" => "string",
		"taxTotal" => "float",
		"tax2Total" => "float",
		"validFrom" => "dateTime",
		"orderStatus" => "ReturnAuthorizationOrderStatus",
		"salesRep" => "RecordRef",
		"giftCert" => "RecordRef",
		"contribPct" => "string",
		"giftCertTotal" => "float",
		"giftCertApplied" => "float",
		"giftCertAvailable" => "float",
		"tranIsVsoeBundle" => "boolean",
		"vsoeAutoCalc" => "boolean",
		"syncPartnerTeams" => "boolean",
		"itemList" => "ReturnAuthorizationItemList",
		"salesTeamList" => "ReturnAuthorizationSalesTeamList",
		"partnersList" => "ReturnAuthorizationPartnersList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
