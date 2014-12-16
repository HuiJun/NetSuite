<?php

class NoteSearch extends SearchRecord {
	/**
	 * @access public
	 * @var NoteSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $authorJoin;
	/**
	 * @access public
	 * @var PhoneCallSearchBasic
	 */
	public $callJoin;
	/**
	 * @access public
	 * @var CampaignSearchBasic
	 */
	public $campaignJoin;
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
	 * @var CustomerSearchBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $employeeJoin;
	/**
	 * @access public
	 * @var EntitySearchBasic
	 */
	public $entityJoin;
	/**
	 * @access public
	 * @var CalendarEventSearchBasic
	 */
	public $eventJoin;
	/**
	 * @access public
	 * @var IssueSearchBasic
	 */
	public $issueJoin;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $itemJoin;
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
	 * @var PartnerSearchBasic
	 */
	public $partnerJoin;
	/**
	 * @access public
	 * @var SolutionSearchBasic
	 */
	public $solutionJoin;
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
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var VendorSearchBasic
	 */
	public $vendorJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "NoteSearchBasic",
		"authorJoin" => "EmployeeSearchBasic",
		"callJoin" => "PhoneCallSearchBasic",
		"campaignJoin" => "CampaignSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"contactJoin" => "ContactSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"entityJoin" => "EntitySearchBasic",
		"eventJoin" => "CalendarEventSearchBasic",
		"issueJoin" => "IssueSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"opportunityJoin" => "OpportunitySearchBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchBasic",
		"partnerJoin" => "PartnerSearchBasic",
		"solutionJoin" => "SolutionSearchBasic",
		"taskJoin" => "TaskSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"vendorJoin" => "VendorSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
