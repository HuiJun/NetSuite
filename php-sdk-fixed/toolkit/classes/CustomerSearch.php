<?php

class CustomerSearch extends SearchRecord {
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var BillingScheduleSearchBasic
	 */
	public $billingScheduleJoin;
	/**
	 * @access public
	 * @var PhoneCallSearchBasic
	 */
	public $callJoin;
	/**
	 * @access public
	 * @var CampaignSearchBasic
	 */
	public $campaignResponseJoin;
	/**
	 * @access public
	 * @var SupportCaseSearchBasic
	 */
	public $caseJoin;
	/**
	 * @access public
	 * @var ContactSearchBasic
	 */
	public $contactJoin;
	/**
	 * @access public
	 * @var ContactSearchBasic
	 */
	public $contactPrimaryJoin;
	/**
	 * @access public
	 * @var CalendarEventSearchBasic
	 */
	public $eventJoin;
	/**
	 * @access public
	 * @var FileSearchBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var FileSearchBasic
	 */
	public $hostedPageJoin;
	/**
	 * @access public
	 * @var JobSearchBasic
	 */
	public $jobJoin;
	/**
	 * @access public
	 * @var CampaignSearchBasic
	 */
	public $leadSourceJoin;
	/**
	 * @access public
	 * @var MessageSearchBasic
	 */
	public $messagesJoin;
	/**
	 * @access public
	 * @var MessageSearchBasic
	 */
	public $messagesFromJoin;
	/**
	 * @access public
	 * @var MessageSearchBasic
	 */
	public $messagesToJoin;
	/**
	 * @access public
	 * @var OpportunitySearchBasic
	 */
	public $opportunityJoin;
	/**
	 * @access public
	 * @var OriginatingLeadSearchBasic
	 */
	public $originatingLeadJoin;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $parentCustomerJoin;
	/**
	 * @access public
	 * @var PartnerSearchBasic
	 */
	public $partnerJoin;
	/**
	 * @access public
	 * @var PricingSearchBasic
	 */
	public $pricingJoin;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $purchasedItemJoin;
	/**
	 * @access public
	 * @var ResourceAllocationSearchBasic
	 */
	public $resourceAllocationJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $salesRepJoin;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $subCustomerJoin;
	/**
	 * @access public
	 * @var TaskSearchBasic
	 */
	public $taskJoin;
	/**
	 * @access public
	 * @var TimeBillSearchBasic
	 */
	public $timeJoin;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $topLevelParentJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $transactionJoin;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $upsellItemJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var NoteSearchBasic
	 */
	public $userNotesJoin;
	/**
	 * @access public
	 * @var SiteCategorySearchBasic
	 */
	public $webSiteCategoryJoin;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $webSiteItemJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "CustomerSearchBasic",
		"billingScheduleJoin" => "BillingScheduleSearchBasic",
		"callJoin" => "PhoneCallSearchBasic",
		"campaignResponseJoin" => "CampaignSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"contactJoin" => "ContactSearchBasic",
		"contactPrimaryJoin" => "ContactSearchBasic",
		"eventJoin" => "CalendarEventSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"hostedPageJoin" => "FileSearchBasic",
		"jobJoin" => "JobSearchBasic",
		"leadSourceJoin" => "CampaignSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"messagesFromJoin" => "MessageSearchBasic",
		"messagesToJoin" => "MessageSearchBasic",
		"opportunityJoin" => "OpportunitySearchBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchBasic",
		"parentCustomerJoin" => "CustomerSearchBasic",
		"partnerJoin" => "PartnerSearchBasic",
		"pricingJoin" => "PricingSearchBasic",
		"purchasedItemJoin" => "ItemSearchBasic",
		"resourceAllocationJoin" => "ResourceAllocationSearchBasic",
		"salesRepJoin" => "EmployeeSearchBasic",
		"subCustomerJoin" => "CustomerSearchBasic",
		"taskJoin" => "TaskSearchBasic",
		"timeJoin" => "TimeBillSearchBasic",
		"topLevelParentJoin" => "CustomerSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"upsellItemJoin" => "ItemSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"webSiteCategoryJoin" => "SiteCategorySearchBasic",
		"webSiteItemJoin" => "ItemSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
