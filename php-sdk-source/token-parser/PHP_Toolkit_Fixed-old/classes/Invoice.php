<?php

class Invoice extends Record {
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
	public $nextApprover;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
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
	public $opportunity;
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
	public $terms;
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
	public $currency;
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
	 * @var float
	 */
	public $discountAmount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesRep;
	/**
	 * @access public
	 * @var string
	 */
	public $contribPct;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $partner;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $leadSource;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;
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
	public $revRecSchedule;
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
	 * @var float
	 */
	public $amountPaid;
	/**
	 * @access public
	 * @var float
	 */
	public $amountRemaining;
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
	 * @var string
	 */
	public $onCreditHold;
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
	 * @var Address
	 */
	public $shippingAddress;
	/**
	 * @access public
	 * @var boolean
	 */
	public $shipIsResidential;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shipAddressList;
	/**
	 * @access public
	 * @var string
	 */
	public $fob;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $shipDate;
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
	 * @var string
	 */
	public $shippingTax2Rate;
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
	 * @var float
	 */
	public $handlingTax1Rate;
	/**
	 * @access public
	 * @var float
	 */
	public $handlingCost;
	/**
	 * @access public
	 * @var string
	 */
	public $handlingTax2Rate;
	/**
	 * @access public
	 * @var string
	 */
	public $trackingNumbers;
	/**
	 * @access public
	 * @var string
	 */
	public $linkedTrackingNumbers;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesGroup;
	/**
	 * @access public
	 * @var float
	 */
	public $subTotal;
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
	 * @var boolean
	 */
	public $syncSalesTeams;
	/**
	 * @access public
	 * @var float
	 */
	public $discountTotal;
	/**
	 * @access public
	 * @var float
	 */
	public $taxTotal;
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
	public $billingSchedule;
	/**
	 * @access public
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var float
	 */
	public $tax2Total;
	/**
	 * @access public
	 * @var string
	 */
	public $vatRegNum;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $expCostDiscount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $itemCostDiscount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $timeDiscount;
	/**
	 * @access public
	 * @var string
	 */
	public $expCostDiscRate;
	/**
	 * @access public
	 * @var string
	 */
	public $itemCostDiscRate;
	/**
	 * @access public
	 * @var string
	 */
	public $timeDiscRate;
	/**
	 * @access public
	 * @var float
	 */
	public $expCostDiscAmount;
	/**
	 * @access public
	 * @var float
	 */
	public $expCostTaxRate1;
	/**
	 * @access public
	 * @var float
	 */
	public $expCostTaxRate2;
	/**
	 * @access public
	 * @var float
	 */
	public $itemCostDiscAmount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $expCostTaxCode;
	/**
	 * @access public
	 * @var float
	 */
	public $expCostDiscTax1Amt;
	/**
	 * @access public
	 * @var float
	 */
	public $itemCostTaxRate1;
	/**
	 * @access public
	 * @var float
	 */
	public $timeDiscAmount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $itemCostTaxCode;
	/**
	 * @access public
	 * @var boolean
	 */
	public $expCostDiscTaxable;
	/**
	 * @access public
	 * @var boolean
	 */
	public $itemCostDiscTaxable;
	/**
	 * @access public
	 * @var float
	 */
	public $itemCostTaxRate2;
	/**
	 * @access public
	 * @var float
	 */
	public $itemCostDiscTax1Amt;
	/**
	 * @access public
	 * @var boolean
	 */
	public $itemCostDiscPrint;
	/**
	 * @access public
	 * @var boolean
	 */
	public $timeDiscTaxable;
	/**
	 * @access public
	 * @var float
	 */
	public $timeTaxRate1;
	/**
	 * @access public
	 * @var boolean
	 */
	public $expCostDiscPrint;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $timeTaxCode;
	/**
	 * @access public
	 * @var boolean
	 */
	public $timeDiscPrint;
	/**
	 * @access public
	 * @var float
	 */
	public $giftCertApplied;
	/**
	 * @access public
	 * @var float
	 */
	public $timeDiscTax1Amt;
	/**
	 * @access public
	 * @var boolean
	 */
	public $tranIsVsoeBundle;
	/**
	 * @access public
	 * @var float
	 */
	public $timeTaxRate2;
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
	 * @var InvoiceSalesTeamList
	 */
	public $salesTeamList;
	/**
	 * @access public
	 * @var InvoicePartnersList
	 */
	public $partnersList;
	/**
	 * @access public
	 * @var InvoiceItemList
	 */
	public $itemList;
	/**
	 * @access public
	 * @var InvoiceItemCostList
	 */
	public $itemCostList;
	/**
	 * @access public
	 * @var GiftCertRedemptionList
	 */
	public $giftCertRedemptionList;
	/**
	 * @access public
	 * @var InvoiceExpCostList
	 */
	public $expCostList;
	/**
	 * @access public
	 * @var InvoiceTimeList
	 */
	public $timeList;
	/**
	 * @access public
	 * @var InvoiceShipGroupList
	 */
	public $shipGroupList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $approvalStatus;
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
		"nextApprover" => "RecordRef",
		"entity" => "RecordRef",
		"tranDate" => "dateTime",
		"tranId" => "string",
		"source" => "string",
		"createdFrom" => "RecordRef",
		"postingPeriod" => "RecordRef",
		"opportunity" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"terms" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"currency" => "RecordRef",
		"dueDate" => "dateTime",
		"discountDate" => "dateTime",
		"discountAmount" => "float",
		"salesRep" => "RecordRef",
		"contribPct" => "string",
		"partner" => "RecordRef",
		"leadSource" => "RecordRef",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"otherRefNum" => "string",
		"memo" => "string",
		"salesEffectiveDate" => "dateTime",
		"excludeCommission" => "boolean",
		"totalCostEstimate" => "float",
		"estGrossProfit" => "float",
		"estGrossProfitPercent" => "float",
		"revRecSchedule" => "RecordRef",
		"revRecStartDate" => "dateTime",
		"revRecEndDate" => "dateTime",
		"amountPaid" => "float",
		"amountRemaining" => "float",
		"balance" => "float",
		"account" => "RecordRef",
		"onCreditHold" => "string",
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
		"toBeFaxed" => "boolean",
		"fax" => "string",
		"messageSel" => "RecordRef",
		"message" => "string",
		"billingAddress" => "Address",
		"billAddressList" => "RecordRef",
		"shippingAddress" => "Address",
		"shipIsResidential" => "boolean",
		"shipAddressList" => "RecordRef",
		"fob" => "string",
		"shipDate" => "dateTime",
		"shipMethod" => "RecordRef",
		"shippingCost" => "float",
		"shippingTax1Rate" => "float",
		"shippingTax2Rate" => "string",
		"shippingTaxCode" => "RecordRef",
		"handlingTaxCode" => "RecordRef",
		"handlingTax1Rate" => "float",
		"handlingCost" => "float",
		"handlingTax2Rate" => "string",
		"trackingNumbers" => "string",
		"linkedTrackingNumbers" => "string",
		"salesGroup" => "RecordRef",
		"subTotal" => "float",
		"revenueStatus" => "RevenueStatus",
		"recognizedRevenue" => "float",
		"deferredRevenue" => "float",
		"revRecOnRevCommitment" => "boolean",
		"syncSalesTeams" => "boolean",
		"discountTotal" => "float",
		"taxTotal" => "float",
		"altShippingCost" => "float",
		"altHandlingCost" => "float",
		"total" => "float",
		"status" => "string",
		"job" => "RecordRef",
		"billingSchedule" => "RecordRef",
		"email" => "string",
		"tax2Total" => "float",
		"vatRegNum" => "string",
		"expCostDiscount" => "RecordRef",
		"itemCostDiscount" => "RecordRef",
		"timeDiscount" => "RecordRef",
		"expCostDiscRate" => "string",
		"itemCostDiscRate" => "string",
		"timeDiscRate" => "string",
		"expCostDiscAmount" => "float",
		"expCostTaxRate1" => "float",
		"expCostTaxRate2" => "float",
		"itemCostDiscAmount" => "float",
		"expCostTaxCode" => "RecordRef",
		"expCostDiscTax1Amt" => "float",
		"itemCostTaxRate1" => "float",
		"timeDiscAmount" => "float",
		"itemCostTaxCode" => "RecordRef",
		"expCostDiscTaxable" => "boolean",
		"itemCostDiscTaxable" => "boolean",
		"itemCostTaxRate2" => "float",
		"itemCostDiscTax1Amt" => "float",
		"itemCostDiscPrint" => "boolean",
		"timeDiscTaxable" => "boolean",
		"timeTaxRate1" => "float",
		"expCostDiscPrint" => "boolean",
		"timeTaxCode" => "RecordRef",
		"timeDiscPrint" => "boolean",
		"giftCertApplied" => "float",
		"timeDiscTax1Amt" => "float",
		"tranIsVsoeBundle" => "boolean",
		"timeTaxRate2" => "float",
		"vsoeAutoCalc" => "boolean",
		"syncPartnerTeams" => "boolean",
		"salesTeamList" => "InvoiceSalesTeamList",
		"partnersList" => "InvoicePartnersList",
		"itemList" => "InvoiceItemList",
		"itemCostList" => "InvoiceItemCostList",
		"giftCertRedemptionList" => "GiftCertRedemptionList",
		"expCostList" => "InvoiceExpCostList",
		"timeList" => "InvoiceTimeList",
		"shipGroupList" => "InvoiceShipGroupList",
		"approvalStatus" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
