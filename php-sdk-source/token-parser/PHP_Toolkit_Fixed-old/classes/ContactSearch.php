<?php

class ContactSearch extends SearchRecord {
	/**
	 * @access public
	 * @var ContactSearchBasic
	 */
	public $basic;
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
	 * @var CustomerSearchBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $customerPrimaryJoin;
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
	 * @var JobSearchBasic
	 */
	public $jobJoin;
	/**
	 * @access public
	 * @var JobSearchBasic
	 */
	public $jobPrimaryJoin;
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
	 * @var CustomerSearchBasic
	 */
	public $parentCustomerJoin;
	/**
	 * @access public
	 * @var JobSearchBasic
	 */
	public $parentJobJoin;
	/**
	 * @access public
	 * @var PartnerSearchBasic
	 */
	public $parentPartnerJoin;
	/**
	 * @access public
	 * @var VendorSearchBasic
	 */
	public $parentVendorJoin;
	/**
	 * @access public
	 * @var PartnerSearchBasic
	 */
	public $partnerJoin;
	/**
	 * @access public
	 * @var PartnerSearchBasic
	 */
	public $partnerPrimaryJoin;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $purchasedItemJoin;
	/**
	 * @access public
	 * @var TaskSearchBasic
	 */
	public $taskJoin;
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
	 * @var VendorSearchBasic
	 */
	public $vendorJoin;
	/**
	 * @access public
	 * @var VendorSearchBasic
	 */
	public $vendorPrimaryJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "ContactSearchBasic",
		"callJoin" => "PhoneCallSearchBasic",
		"campaignResponseJoin" => "CampaignSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"customerPrimaryJoin" => "CustomerSearchBasic",
		"eventJoin" => "CalendarEventSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"jobJoin" => "JobSearchBasic",
		"jobPrimaryJoin" => "JobSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"messagesFromJoin" => "MessageSearchBasic",
		"messagesToJoin" => "MessageSearchBasic",
		"opportunityJoin" => "OpportunitySearchBasic",
		"parentCustomerJoin" => "CustomerSearchBasic",
		"parentJobJoin" => "JobSearchBasic",
		"parentPartnerJoin" => "PartnerSearchBasic",
		"parentVendorJoin" => "VendorSearchBasic",
		"partnerJoin" => "PartnerSearchBasic",
		"partnerPrimaryJoin" => "PartnerSearchBasic",
		"purchasedItemJoin" => "ItemSearchBasic",
		"taskJoin" => "TaskSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"upsellItemJoin" => "ItemSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"vendorJoin" => "VendorSearchBasic",
		"vendorPrimaryJoin" => "VendorSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
