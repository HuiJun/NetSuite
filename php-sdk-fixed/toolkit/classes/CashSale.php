<?php

class CashSale extends Record {
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
	public $postingPeriod;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $createdFrom;
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
	 * @var RecordRef
	 */
	public $revRecSchedule;
	/**
	 * @access public
	 * @var boolean
	 */
	public $undepFunds;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
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
	public $linkedTrackingNumbers;
	/**
	 * @access public
	 * @var string
	 */
	public $trackingNumbers;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesGroup;
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
	 * @var RecordRef
	 */
	public $paymentMethod;
	/**
	 * @access public
	 * @var string
	 */
	public $payPalStatus;
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
	 * @var RecordRef
	 */
	public $creditCardProcessor;
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
	 * @var boolean
	 */
	public $ignoreAvs;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ccProcessAsPurchaseCard;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $itemCostDiscount;
	/**
	 * @access public
	 * @var string
	 */
	public $itemCostDiscRate;
	/**
	 * @access public
	 * @var float
	 */
	public $itemCostDiscAmount;
	/**
	 * @access public
	 * @var float
	 */
	public $itemCostTaxRate1;
	/**
	 * @access public
	 * @var float
	 */
	public $itemCostTaxRate2;
	/**
	 * @access public
	 * @var boolean
	 */
	public $itemCostDiscTaxable;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $itemCostTaxCode;
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
	 * @var RecordRef
	 */
	public $expCostDiscount;
	/**
	 * @access public
	 * @var string
	 */
	public $expCostDiscRate;
	/**
	 * @access public
	 * @var float
	 */
	public $expCostDiscAmount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $expCostDiscTaxable;
	/**
	 * @access public
	 * @var boolean
	 */
	public $expCostDiscprint;
	/**
	 * @access public
	 * @var float
	 */
	public $expCostTaxRate1;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $timeDiscount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $expCostTaxCode;
	/**
	 * @access public
	 * @var string
	 */
	public $timeDiscRate;
	/**
	 * @access public
	 * @var float
	 */
	public $expCostTaxRate2;
	/**
	 * @access public
	 * @var float
	 */
	public $expCostDiscTax1Amt;
	/**
	 * @access public
	 * @var float
	 */
	public $timeDiscAmount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $timeDiscTaxable;
	/**
	 * @access public
	 * @var boolean
	 */
	public $timeDiscPrint;
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
	public $timeTaxRate1;
	/**
	 * @access public
	 * @var float
	 */
	public $altShippingCost;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $timeTaxCode;
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
	 * @var float
	 */
	public $timeDiscTax1Amt;
	/**
	 * @access public
	 * @var string
	 */
	public $ccSecurityCode;
	/**
	 * @access public
	 * @var float
	 */
	public $timeTaxRate2;
	/**
	 * @access public
	 * @var AvsMatchCode
	 */
	public $ccSecurityCodeMatch;
	/**
	 * @access public
	 * @var boolean
	 */
	public $chargeIt;
	/**
	 * @access public
	 * @var string
	 */
	public $debitCardIssueNo;
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
	 * @var string
	 */
	public $paypalAuthId;
	/**
	 * @access public
	 * @var string
	 */
	public $status;
	/**
	 * @access public
	 * @var boolean
	 */
	public $paypalProcess;
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
	 * @var dateTime
	 */
	public $validFrom;
	/**
	 * @access public
	 * @var string
	 */
	public $vatRegNum;
	/**
	 * @access public
	 * @var float
	 */
	public $giftCertApplied;
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
	 * @var CashSaleSalesTeamList
	 */
	public $salesTeamList;
	/**
	 * @access public
	 * @var CashSalePartnersList
	 */
	public $partnersList;
	/**
	 * @access public
	 * @var CashSaleItemList
	 */
	public $itemList;
	/**
	 * @access public
	 * @var CashSaleItemCostList
	 */
	public $itemCostList;
	/**
	 * @access public
	 * @var GiftCertRedemptionList
	 */
	public $giftCertRedemptionList;
	/**
	 * @access public
	 * @var CashSaleExpCostList
	 */
	public $expCostList;
	/**
	 * @access public
	 * @var CashSaleTimeList
	 */
	public $timeList;
	/**
	 * @access public
	 * @var CashSaleShipGroupList
	 */
	public $shipGroupList;
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
		"tranDate" => "dateTime",
		"tranId" => "string",
		"source" => "string",
		"postingPeriod" => "RecordRef",
		"createdFrom" => "RecordRef",
		"opportunity" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
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
		"revRecSchedule" => "RecordRef",
		"undepFunds" => "boolean",
		"currency" => "RecordRef",
		"account" => "RecordRef",
		"revRecStartDate" => "dateTime",
		"revRecEndDate" => "dateTime",
		"totalCostEstimate" => "float",
		"estGrossProfit" => "float",
		"estGrossProfitPercent" => "float",
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
		"linkedTrackingNumbers" => "string",
		"trackingNumbers" => "string",
		"salesGroup" => "RecordRef",
		"revenueStatus" => "RevenueStatus",
		"recognizedRevenue" => "float",
		"deferredRevenue" => "float",
		"revRecOnRevCommitment" => "boolean",
		"syncSalesTeams" => "boolean",
		"paymentMethod" => "RecordRef",
		"payPalStatus" => "string",
		"creditCard" => "RecordRef",
		"ccNumber" => "string",
		"ccExpireDate" => "dateTime",
		"ccName" => "string",
		"ccStreet" => "string",
		"ccZipCode" => "string",
		"creditCardProcessor" => "RecordRef",
		"ccApproved" => "boolean",
		"authCode" => "string",
		"ccAvsStreetMatch" => "AvsMatchCode",
		"ccAvsZipMatch" => "AvsMatchCode",
		"isRecurringPayment" => "boolean",
		"payPalTranId" => "string",
		"subTotal" => "float",
		"ccIsPurchaseCardBin" => "boolean",
		"ignoreAvs" => "boolean",
		"ccProcessAsPurchaseCard" => "boolean",
		"itemCostDiscount" => "RecordRef",
		"itemCostDiscRate" => "string",
		"itemCostDiscAmount" => "float",
		"itemCostTaxRate1" => "float",
		"itemCostTaxRate2" => "float",
		"itemCostDiscTaxable" => "boolean",
		"itemCostTaxCode" => "RecordRef",
		"itemCostDiscTax1Amt" => "float",
		"itemCostDiscPrint" => "boolean",
		"expCostDiscount" => "RecordRef",
		"expCostDiscRate" => "string",
		"expCostDiscAmount" => "float",
		"expCostDiscTaxable" => "boolean",
		"expCostDiscprint" => "boolean",
		"expCostTaxRate1" => "float",
		"timeDiscount" => "RecordRef",
		"expCostTaxCode" => "RecordRef",
		"timeDiscRate" => "string",
		"expCostTaxRate2" => "float",
		"expCostDiscTax1Amt" => "float",
		"timeDiscAmount" => "float",
		"timeDiscTaxable" => "boolean",
		"timeDiscPrint" => "boolean",
		"discountTotal" => "float",
		"taxTotal" => "float",
		"timeTaxRate1" => "float",
		"altShippingCost" => "float",
		"timeTaxCode" => "RecordRef",
		"altHandlingCost" => "float",
		"total" => "float",
		"timeDiscTax1Amt" => "float",
		"ccSecurityCode" => "string",
		"timeTaxRate2" => "float",
		"ccSecurityCodeMatch" => "AvsMatchCode",
		"chargeIt" => "boolean",
		"debitCardIssueNo" => "string",
		"threeDStatusCode" => "string",
		"pnRefNum" => "string",
		"paypalAuthId" => "string",
		"status" => "string",
		"paypalProcess" => "boolean",
		"job" => "RecordRef",
		"billingSchedule" => "RecordRef",
		"email" => "string",
		"tax2Total" => "float",
		"validFrom" => "dateTime",
		"vatRegNum" => "string",
		"giftCertApplied" => "float",
		"tranIsVsoeBundle" => "boolean",
		"vsoeAutoCalc" => "boolean",
		"syncPartnerTeams" => "boolean",
		"salesTeamList" => "CashSaleSalesTeamList",
		"partnersList" => "CashSalePartnersList",
		"itemList" => "CashSaleItemList",
		"itemCostList" => "CashSaleItemCostList",
		"giftCertRedemptionList" => "GiftCertRedemptionList",
		"expCostList" => "CashSaleExpCostList",
		"timeList" => "CashSaleTimeList",
		"shipGroupList" => "CashSaleShipGroupList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
