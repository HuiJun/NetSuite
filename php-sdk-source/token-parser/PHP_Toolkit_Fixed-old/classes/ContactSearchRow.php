<?php

class ContactSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var ContactSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var PhoneCallSearchRowBasic
	 */
	public $callJoin;
	/**
	 * @access public
	 * @var CampaignSearchRowBasic
	 */
	public $campaignResponseJoin;
	/**
	 * @access public
	 * @var SupportCaseSearchRowBasic
	 */
	public $caseJoin;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $customerPrimaryJoin;
	/**
	 * @access public
	 * @var CalendarEventSearchRowBasic
	 */
	public $eventJoin;
	/**
	 * @access public
	 * @var FileSearchRowBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var JobSearchRowBasic
	 */
	public $jobJoin;
	/**
	 * @access public
	 * @var JobSearchRowBasic
	 */
	public $jobPrimaryJoin;
	/**
	 * @access public
	 * @var MessageSearchRowBasic
	 */
	public $messagesJoin;
	/**
	 * @access public
	 * @var MessageSearchRowBasic
	 */
	public $messagesFromJoin;
	/**
	 * @access public
	 * @var MessageSearchRowBasic
	 */
	public $messagesToJoin;
	/**
	 * @access public
	 * @var OpportunitySearchRowBasic
	 */
	public $opportunityJoin;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $parentCustomerJoin;
	/**
	 * @access public
	 * @var JobSearchRowBasic
	 */
	public $parentJobJoin;
	/**
	 * @access public
	 * @var PartnerSearchRowBasic
	 */
	public $parentPartnerJoin;
	/**
	 * @access public
	 * @var VendorSearchRowBasic
	 */
	public $parentVendorJoin;
	/**
	 * @access public
	 * @var PartnerSearchRowBasic
	 */
	public $partnerJoin;
	/**
	 * @access public
	 * @var PartnerSearchRowBasic
	 */
	public $partnerPrimaryJoin;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $purchasedItemJoin;
	/**
	 * @access public
	 * @var TaskSearchRowBasic
	 */
	public $taskJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $transactionJoin;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $upsellItemJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var NoteSearchRowBasic
	 */
	public $userNotesJoin;
	/**
	 * @access public
	 * @var VendorSearchRowBasic
	 */
	public $vendorJoin;
	/**
	 * @access public
	 * @var VendorSearchRowBasic
	 */
	public $vendorPrimaryJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "ContactSearchRowBasic",
		"callJoin" => "PhoneCallSearchRowBasic",
		"campaignResponseJoin" => "CampaignSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"customerPrimaryJoin" => "CustomerSearchRowBasic",
		"eventJoin" => "CalendarEventSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"jobJoin" => "JobSearchRowBasic",
		"jobPrimaryJoin" => "JobSearchRowBasic",
		"messagesJoin" => "MessageSearchRowBasic",
		"messagesFromJoin" => "MessageSearchRowBasic",
		"messagesToJoin" => "MessageSearchRowBasic",
		"opportunityJoin" => "OpportunitySearchRowBasic",
		"parentCustomerJoin" => "CustomerSearchRowBasic",
		"parentJobJoin" => "JobSearchRowBasic",
		"parentPartnerJoin" => "PartnerSearchRowBasic",
		"parentVendorJoin" => "VendorSearchRowBasic",
		"partnerJoin" => "PartnerSearchRowBasic",
		"partnerPrimaryJoin" => "PartnerSearchRowBasic",
		"purchasedItemJoin" => "ItemSearchRowBasic",
		"taskJoin" => "TaskSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"upsellItemJoin" => "ItemSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"vendorJoin" => "VendorSearchRowBasic",
		"vendorPrimaryJoin" => "VendorSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
