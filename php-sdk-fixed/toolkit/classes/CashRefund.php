<?php

class CashRefund extends Record {
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
	public $createdFrom;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
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
	public $leadSource;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesRep;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $partner;
	/**
	 * @access public
	 * @var string
	 */
	public $contribPct;
	/**
	 * @access public
	 * @var string
	 */
	public $otherRefNum;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $salesEffectiveDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $refundCheck;
	/**
	 * @access public
	 * @var boolean
	 */
	public $toPrint2;
	/**
	 * @access public
	 * @var boolean
	 */
	public $excludeCommission;
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
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
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
	public $promoCode;
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
	 * @var boolean
	 */
	public $isTaxable;
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
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var boolean
	 */
	public $toBeFaxed;
	/**
	 * @access public
	 * @var string
	 */
	public $fax;
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
	public $shipMethod;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shippingTaxCode;
	/**
	 * @access public
	 * @var float
	 */
	public $shippingTax1Rate;
	/**
	 * @access public
	 * @var string
	 */
	public $shippingTax2Rate;
	/**
	 * @access public
	 * @var float
	 */
	public $shippingCost;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $handlingTaxCode;
	/**
	 * @access public
	 * @var float
	 */
	public $handlingTax1Rate;
	/**
	 * @access public
	 * @var string
	 */
	public $handlingTax2Rate;
	/**
	 * @access public
	 * @var float
	 */
	public $handlingCost;
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
	 * @var RecordRef
	 */
	public $paymentMethod;
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
	 * @var string
	 */
	public $pnRefNum;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $validFrom;
	/**
	 * @access public
	 * @var string
	 */
	public $payPalTranId;
	/**
	 * @access public
	 * @var float
	 */
	public $subTotal;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ccIsPurchaseCardBin;
	/**
	 * @access public
	 * @var float
	 */
	public $discountTotal;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ccProcessAsPurchaseCard;
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
	 * @var float
	 */
	public $altShippingCost;
	/**
	 * @access public
	 * @var string
	 */
	public $payPalStatus;
	/**
	 * @access public
	 * @var float
	 */
	public $altHandlingCost;
	/**
	 * @access public
	 * @var float
	 */
	public $total;
	/**
	 * @access public
	 * @var string
	 */
	public $payPalAuthId;
	/**
	 * @access public
	 * @var string
	 */
	public $status;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $job;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $giftCert;
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
	public $payPalProcess;
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
	 * @var CashRefundItemList
	 */
	public $itemList;
	/**
	 * @access public
	 * @var CashRefundSalesTeamList
	 */
	public $salesTeamList;
	/**
	 * @access public
	 * @var CashRefundPartnersList
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
		"entity" => "RecordRef",
		"vatRegNum" => "string",
		"tranDate" => "dateTime",
		"tranId" => "string",
		"source" => "string",
		"createdFrom" => "RecordRef",
		"postingPeriod" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"leadSource" => "RecordRef",
		"subsidiary" => "RecordRef",
		"salesRep" => "RecordRef",
		"partner" => "RecordRef",
		"contribPct" => "string",
		"otherRefNum" => "string",
		"memo" => "string",
		"salesEffectiveDate" => "dateTime",
		"refundCheck" => "boolean",
		"toPrint2" => "boolean",
		"excludeCommission" => "boolean",
		"totalCostEstimate" => "float",
		"estGrossProfit" => "float",
		"estGrossProfitPercent" => "float",
		"account" => "RecordRef",
		"currency" => "RecordRef",
		"exchangeRate" => "float",
		"currencyName" => "string",
		"promoCode" => "RecordRef",
		"discountItem" => "RecordRef",
		"discountRate" => "string",
		"isTaxable" => "boolean",
		"taxItem" => "RecordRef",
		"taxRate" => "float",
		"toBePrinted" => "boolean",
		"toBeEmailed" => "boolean",
		"email" => "string",
		"toBeFaxed" => "boolean",
		"fax" => "string",
		"messageSel" => "RecordRef",
		"message" => "string",
		"billingAddress" => "Address",
		"billAddressList" => "RecordRef",
		"shipMethod" => "RecordRef",
		"shippingTaxCode" => "RecordRef",
		"shippingTax1Rate" => "float",
		"shippingTax2Rate" => "string",
		"shippingCost" => "float",
		"handlingTaxCode" => "RecordRef",
		"handlingTax1Rate" => "float",
		"handlingTax2Rate" => "string",
		"handlingCost" => "float",
		"salesGroup" => "RecordRef",
		"syncSalesTeams" => "boolean",
		"paymentMethod" => "RecordRef",
		"revenueStatus" => "RevenueStatus",
		"recognizedRevenue" => "float",
		"deferredRevenue" => "float",
		"revRecOnRevCommitment" => "boolean",
		"creditCard" => "RecordRef",
		"chargeIt" => "boolean",
		"ccNumber" => "string",
		"ccExpireDate" => "dateTime",
		"ccName" => "string",
		"ccStreet" => "string",
		"ccZipCode" => "string",
		"ccApproved" => "boolean",
		"creditCardProcessor" => "RecordRef",
		"debitCardIssueNo" => "string",
		"pnRefNum" => "string",
		"validFrom" => "dateTime",
		"payPalTranId" => "string",
		"subTotal" => "float",
		"ccIsPurchaseCardBin" => "boolean",
		"discountTotal" => "float",
		"ccProcessAsPurchaseCard" => "boolean",
		"taxTotal" => "float",
		"tax2Total" => "float",
		"altShippingCost" => "float",
		"payPalStatus" => "string",
		"altHandlingCost" => "float",
		"total" => "float",
		"payPalAuthId" => "string",
		"status" => "string",
		"job" => "RecordRef",
		"giftCert" => "RecordRef",
		"giftCertTotal" => "float",
		"giftCertApplied" => "float",
		"giftCertAvailable" => "float",
		"tranIsVsoeBundle" => "boolean",
		"payPalProcess" => "boolean",
		"vsoeAutoCalc" => "boolean",
		"syncPartnerTeams" => "boolean",
		"itemList" => "CashRefundItemList",
		"salesTeamList" => "CashRefundSalesTeamList",
		"partnersList" => "CashRefundPartnersList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
