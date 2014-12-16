<?php

class Opportunity extends Record {
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
	 * @var float
	 */
	public $estimatedBudget;
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
	 * @var string
	 */
	public $title;
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
	public $leadSource;
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
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expectedCloseDate;
	/**
	 * @access public
	 * @var integer
	 */
	public $daysOpen;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $forecastType;
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
	 * @var float
	 */
	public $projectedTotal;
	/**
	 * @access public
	 * @var float
	 */
	public $rangeLow;
	/**
	 * @access public
	 * @var float
	 */
	public $rangeHigh;
	/**
	 * @access public
	 * @var float
	 */
	public $projAltSalesAmt;
	/**
	 * @access public
	 * @var float
	 */
	public $altSalesRangeLow;
	/**
	 * @access public
	 * @var float
	 */
	public $altSalesRangeHigh;
	/**
	 * @access public
	 * @var float
	 */
	public $weightedTotal;
	/**
	 * @access public
	 * @var string
	 */
	public $actionItem;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $winLossReason;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var float
	 */
	public $taxTotal;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isBudgetApproved;
	/**
	 * @access public
	 * @var float
	 */
	public $tax2Total;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesReadiness;
	/**
	 * @access public
	 * @var float
	 */
	public $totalCostEstimate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $buyingTimeFrame;
	/**
	 * @access public
	 * @var float
	 */
	public $estGrossProfit;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $buyingReason;
	/**
	 * @access public
	 * @var float
	 */
	public $estGrossProfitPercent;
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
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $closeDate;
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
	public $department;
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
	 * @var string
	 */
	public $status;
	/**
	 * @access public
	 * @var string
	 */
	public $vatRegNum;
	/**
	 * @access public
	 * @var boolean
	 */
	public $syncPartnerTeams;
	/**
	 * @access public
	 * @var OpportunitySalesTeamList
	 */
	public $salesTeamList;
	/**
	 * @access public
	 * @var OpportunityPartnersList
	 */
	public $partnersList;
	/**
	 * @access public
	 * @var OpportunityItemList
	 */
	public $itemList;
	/**
	 * @access public
	 * @var OpportunityCompetitorsList
	 */
	public $competitorsList;
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
		"currency" => "RecordRef",
		"estimatedBudget" => "float",
		"entity" => "RecordRef",
		"job" => "RecordRef",
		"title" => "string",
		"tranId" => "string",
		"source" => "string",
		"salesRep" => "RecordRef",
		"contribPct" => "string",
		"partner" => "RecordRef",
		"salesGroup" => "RecordRef",
		"syncSalesTeams" => "boolean",
		"leadSource" => "RecordRef",
		"entityStatus" => "RecordRef",
		"probability" => "float",
		"tranDate" => "dateTime",
		"expectedCloseDate" => "dateTime",
		"daysOpen" => "integer",
		"forecastType" => "RecordRef",
		"currencyName" => "string",
		"exchangeRate" => "float",
		"projectedTotal" => "float",
		"rangeLow" => "float",
		"rangeHigh" => "float",
		"projAltSalesAmt" => "float",
		"altSalesRangeLow" => "float",
		"altSalesRangeHigh" => "float",
		"weightedTotal" => "float",
		"actionItem" => "string",
		"winLossReason" => "RecordRef",
		"memo" => "string",
		"taxTotal" => "float",
		"isBudgetApproved" => "boolean",
		"tax2Total" => "float",
		"salesReadiness" => "RecordRef",
		"totalCostEstimate" => "float",
		"buyingTimeFrame" => "RecordRef",
		"estGrossProfit" => "float",
		"buyingReason" => "RecordRef",
		"estGrossProfitPercent" => "float",
		"billingAddress" => "Address",
		"billAddressList" => "RecordRef",
		"shippingAddress" => "Address",
		"shipIsResidential" => "boolean",
		"shipAddressList" => "RecordRef",
		"class" => "RecordRef",
		"closeDate" => "dateTime",
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"department" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"status" => "string",
		"vatRegNum" => "string",
		"syncPartnerTeams" => "boolean",
		"salesTeamList" => "OpportunitySalesTeamList",
		"partnersList" => "OpportunityPartnersList",
		"itemList" => "OpportunityItemList",
		"competitorsList" => "OpportunityCompetitorsList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
