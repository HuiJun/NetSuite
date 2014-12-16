<?php

class Estimate extends Record {
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
	public $entity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $job;
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
	public $customForm;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var string
	 */
	public $title;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entityStatus;
	/**
	 * @access public
	 * @var float
	 */
	public $probability;
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeInForecast;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $forecastType;
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
	 * @var dateTime
	 */
	public $dueDate;
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
	public $billingSchedule;
	/**
	 * @access public
	 * @var string
	 */
	public $status;
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
	 * @var RecordRef
	 */
	public $leadSource;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expectedCloseDate;
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
	public $endDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
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
	public $createdFrom;
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
	 * @var string
	 */
	public $vatRegNum;
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
	 * @var boolean
	 */
	public $visibleToCustomer;
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
	 * @var RecordRef
	 */
	public $shippingTaxCode;
	/**
	 * @access public
	 * @var string
	 */
	public $shippingTax2Rate;
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
	public $trackingNumbers;
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
	 * @var float
	 */
	public $altSalesTotal;
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
	 * @var float
	 */
	public $tax2Total;
	/**
	 * @access public
	 * @var EstimateItemList
	 */
	public $itemList;
	/**
	 * @access public
	 * @var EstimateSalesTeamList
	 */
	public $salesTeamList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $syncPartnerTeams;
	/**
	 * @access public
	 * @var EstimatePartnersList
	 */
	public $partnersList;
	/**
	 * @access public
	 * @var EstimateShipGroupList
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
		"entity" => "RecordRef",
		"job" => "RecordRef",
		"tranDate" => "dateTime",
		"tranId" => "string",
		"source" => "string",
		"customForm" => "RecordRef",
		"currency" => "RecordRef",
		"title" => "string",
		"entityStatus" => "RecordRef",
		"probability" => "float",
		"includeInForecast" => "boolean",
		"forecastType" => "RecordRef",
		"opportunity" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"terms" => "RecordRef",
		"dueDate" => "dateTime",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"billingSchedule" => "RecordRef",
		"status" => "string",
		"salesRep" => "RecordRef",
		"partner" => "RecordRef",
		"contribPct" => "string",
		"leadSource" => "RecordRef",
		"expectedCloseDate" => "dateTime",
		"otherRefNum" => "string",
		"memo" => "string",
		"endDate" => "dateTime",
		"startDate" => "dateTime",
		"totalCostEstimate" => "float",
		"estGrossProfit" => "float",
		"estGrossProfitPercent" => "float",
		"createdFrom" => "RecordRef",
		"exchangeRate" => "float",
		"currencyName" => "string",
		"promoCode" => "RecordRef",
		"discountItem" => "RecordRef",
		"discountRate" => "string",
		"isTaxable" => "boolean",
		"taxItem" => "RecordRef",
		"taxRate" => "float",
		"vatRegNum" => "string",
		"toBePrinted" => "boolean",
		"toBeEmailed" => "boolean",
		"email" => "string",
		"toBeFaxed" => "boolean",
		"fax" => "string",
		"visibleToCustomer" => "boolean",
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
		"shippingTaxCode" => "RecordRef",
		"shippingTax2Rate" => "string",
		"handlingTaxCode" => "RecordRef",
		"handlingTax1Rate" => "float",
		"handlingCost" => "float",
		"trackingNumbers" => "string",
		"handlingTax2Rate" => "string",
		"linkedTrackingNumbers" => "string",
		"salesGroup" => "RecordRef",
		"syncSalesTeams" => "boolean",
		"altSalesTotal" => "float",
		"subTotal" => "float",
		"discountTotal" => "float",
		"taxTotal" => "float",
		"altShippingCost" => "float",
		"altHandlingCost" => "float",
		"total" => "float",
		"tax2Total" => "float",
		"itemList" => "EstimateItemList",
		"salesTeamList" => "EstimateSalesTeamList",
		"syncPartnerTeams" => "boolean",
		"partnersList" => "EstimatePartnersList",
		"shipGroupList" => "EstimateShipGroupList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
