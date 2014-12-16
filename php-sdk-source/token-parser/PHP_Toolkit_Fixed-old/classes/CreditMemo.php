<?php

class CreditMemo extends Record {
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
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $job;
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
	 * @var boolean
	 */
	public $excludeCommission;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $leadSource;
	/**
	 * @access public
	 * @var float
	 */
	public $balance;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var string
	 */
	public $onCreditHold;
	/**
	 * @access public
	 * @var float
	 */
	public $amountPaid;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $salesEffectiveDate;
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
	 * @var float
	 */
	public $amountRemaining;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $discountItem;
	/**
	 * @access public
	 * @var string
	 */
	public $source;
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
	 * @var float
	 */
	public $unapplied;
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
	 * @var float
	 */
	public $shippingCost;
	/**
	 * @access public
	 * @var float
	 */
	public $shippingTax1Rate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shippingTaxCode;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $handlingTaxCode;
	/**
	 * @access public
	 * @var string
	 */
	public $shippingTax2Rate;
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
	 * @var string
	 */
	public $status;
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
	public $vsoeAutoCalc;
	/**
	 * @access public
	 * @var boolean
	 */
	public $syncPartnerTeams;
	/**
	 * @access public
	 * @var CreditMemoSalesTeamList
	 */
	public $salesTeamList;
	/**
	 * @access public
	 * @var CreditMemoItemList
	 */
	public $itemList;
	/**
	 * @access public
	 * @var CreditMemoPartnersList
	 */
	public $partnersList;
	/**
	 * @access public
	 * @var CreditMemoApplyList
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
		"currency" => "RecordRef",
		"entity" => "RecordRef",
		"vatRegNum" => "string",
		"tranDate" => "dateTime",
		"tranId" => "string",
		"createdFrom" => "RecordRef",
		"postingPeriod" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"job" => "RecordRef",
		"salesRep" => "RecordRef",
		"partner" => "RecordRef",
		"contribPct" => "string",
		"otherRefNum" => "string",
		"memo" => "string",
		"excludeCommission" => "boolean",
		"leadSource" => "RecordRef",
		"balance" => "float",
		"account" => "RecordRef",
		"exchangeRate" => "float",
		"onCreditHold" => "string",
		"amountPaid" => "float",
		"salesEffectiveDate" => "dateTime",
		"totalCostEstimate" => "float",
		"estGrossProfit" => "float",
		"estGrossProfitPercent" => "float",
		"currencyName" => "string",
		"promoCode" => "RecordRef",
		"amountRemaining" => "float",
		"discountItem" => "RecordRef",
		"source" => "string",
		"discountRate" => "string",
		"isTaxable" => "boolean",
		"taxItem" => "RecordRef",
		"taxRate" => "float",
		"unapplied" => "float",
		"autoApply" => "boolean",
		"applied" => "float",
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
		"shippingCost" => "float",
		"shippingTax1Rate" => "float",
		"shippingTaxCode" => "RecordRef",
		"handlingTaxCode" => "RecordRef",
		"shippingTax2Rate" => "string",
		"handlingTax1Rate" => "float",
		"handlingTax2Rate" => "string",
		"handlingCost" => "float",
		"subTotal" => "float",
		"discountTotal" => "float",
		"revenueStatus" => "RevenueStatus",
		"recognizedRevenue" => "float",
		"deferredRevenue" => "float",
		"revRecOnRevCommitment" => "boolean",
		"taxTotal" => "float",
		"tax2Total" => "float",
		"altShippingCost" => "float",
		"altHandlingCost" => "float",
		"total" => "float",
		"salesGroup" => "RecordRef",
		"syncSalesTeams" => "boolean",
		"status" => "string",
		"giftCert" => "RecordRef",
		"giftCertTotal" => "float",
		"giftCertApplied" => "float",
		"giftCertAvailable" => "float",
		"tranIsVsoeBundle" => "boolean",
		"vsoeAutoCalc" => "boolean",
		"syncPartnerTeams" => "boolean",
		"salesTeamList" => "CreditMemoSalesTeamList",
		"itemList" => "CreditMemoItemList",
		"partnersList" => "CreditMemoPartnersList",
		"applyList" => "CreditMemoApplyList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
