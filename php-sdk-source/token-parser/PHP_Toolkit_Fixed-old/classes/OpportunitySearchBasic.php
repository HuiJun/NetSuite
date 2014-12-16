<?php

class OpportunitySearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $availableOffline;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $buyingReason;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $buyingTimeFrame;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $closeDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $competitor;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $contribution;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $custType;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $daysOpen;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $daysToClose;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $entity;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $entityStatus;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedBudget;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $expectedCloseDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $forecastType;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $foreignProjectedAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $foreignRangeHigh;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $foreignRangeLow;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxTranCostEstimate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isBudgetApproved;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $leadSource;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $number;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partner;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $partnerContribution;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partnerRole;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partnerTeamMember;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var PostingPeriodDate
	 */
	public $postingPeriodRelative;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $probability;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $projAltSalesAmt;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $projectedTotal;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $rangeHigh;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $rangeHighAlt;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $rangeLow;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $rangeLowAlt;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesReadiness;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesRep;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesTeamMember;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesTeamRole;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxPeriod;
	/**
	 * @access public
	 * @var PostingPeriodDate
	 */
	public $taxPeriodRelative;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $tranCostEstimate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $tranEstGrossProfit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $tranEstGrossProfitPct;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $tranFxEstGrossProfit;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $tranId;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $winLossReason;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $wonBy;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"amount" => "SearchDoubleField",
		"availableOffline" => "SearchBooleanField",
		"buyingReason" => "SearchMultiSelectField",
		"buyingTimeFrame" => "SearchMultiSelectField",
		"class" => "SearchMultiSelectField",
		"closeDate" => "SearchDateField",
		"competitor" => "SearchMultiSelectField",
		"contribution" => "SearchLongField",
		"currency" => "SearchMultiSelectField",
		"custType" => "SearchMultiSelectField",
		"dateCreated" => "SearchDateField",
		"daysOpen" => "SearchLongField",
		"daysToClose" => "SearchLongField",
		"department" => "SearchMultiSelectField",
		"entity" => "SearchMultiSelectField",
		"entityStatus" => "SearchMultiSelectField",
		"estimatedBudget" => "SearchDoubleField",
		"expectedCloseDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"forecastType" => "SearchEnumMultiSelectField",
		"foreignProjectedAmount" => "SearchDoubleField",
		"foreignRangeHigh" => "SearchDoubleField",
		"foreignRangeLow" => "SearchDoubleField",
		"fxTranCostEstimate" => "SearchDoubleField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isBudgetApproved" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"leadSource" => "SearchMultiSelectField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"number" => "SearchLongField",
		"partner" => "SearchMultiSelectField",
		"partnerContribution" => "SearchLongField",
		"partnerRole" => "SearchMultiSelectField",
		"partnerTeamMember" => "SearchMultiSelectField",
		"postingPeriod" => "RecordRef",
		"postingPeriodRelative" => "PostingPeriodDate",
		"probability" => "SearchLongField",
		"projAltSalesAmt" => "SearchDoubleField",
		"projectedTotal" => "SearchDoubleField",
		"rangeHigh" => "SearchDoubleField",
		"rangeHighAlt" => "SearchDoubleField",
		"rangeLow" => "SearchDoubleField",
		"rangeLowAlt" => "SearchDoubleField",
		"salesReadiness" => "SearchMultiSelectField",
		"salesRep" => "SearchMultiSelectField",
		"salesTeamMember" => "SearchMultiSelectField",
		"salesTeamRole" => "SearchMultiSelectField",
		"status" => "SearchEnumMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"taxPeriod" => "RecordRef",
		"taxPeriodRelative" => "PostingPeriodDate",
		"title" => "SearchStringField",
		"tranCostEstimate" => "SearchDoubleField",
		"tranDate" => "SearchDateField",
		"tranEstGrossProfit" => "SearchDoubleField",
		"tranEstGrossProfitPct" => "SearchDoubleField",
		"tranFxEstGrossProfit" => "SearchDoubleField",
		"tranId" => "SearchStringField",
		"winLossReason" => "SearchMultiSelectField",
		"wonBy" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
