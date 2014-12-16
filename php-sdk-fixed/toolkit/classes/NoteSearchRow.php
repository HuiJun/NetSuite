<?php

class NoteSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var NoteSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $authorJoin;
	/**
	 * @access public
	 * @var PhoneCallSearchRowBasic
	 */
	public $callJoin;
	/**
	 * @access public
	 * @var CampaignSearchRowBasic
	 */
	public $campaignJoin;
	/**
	 * @access public
	 * @var SupportCaseSearchRowBasic
	 */
	public $caseJoin;
	/**
	 * @access public
	 * @var ContactSearchRowBasic
	 */
	public $contactJoin;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $employeeJoin;
	/**
	 * @access public
	 * @var EntitySearchRowBasic
	 */
	public $entityJoin;
	/**
	 * @access public
	 * @var CalendarEventSearchRowBasic
	 */
	public $eventJoin;
	/**
	 * @access public
	 * @var IssueSearchRowBasic
	 */
	public $issueJoin;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var OpportunitySearchRowBasic
	 */
	public $opportunityJoin;
	/**
	 * @access public
	 * @var OriginatingLeadSearchRowBasic
	 */
	public $originatingLeadJoin;
	/**
	 * @access public
	 * @var PartnerSearchRowBasic
	 */
	public $partnerJoin;
	/**
	 * @access public
	 * @var SolutionSearchRowBasic
	 */
	public $solutionJoin;
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
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var VendorSearchRowBasic
	 */
	public $vendorJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "NoteSearchRowBasic",
		"authorJoin" => "EmployeeSearchRowBasic",
		"callJoin" => "PhoneCallSearchRowBasic",
		"campaignJoin" => "CampaignSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"contactJoin" => "ContactSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"entityJoin" => "EntitySearchRowBasic",
		"eventJoin" => "CalendarEventSearchRowBasic",
		"issueJoin" => "IssueSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"opportunityJoin" => "OpportunitySearchRowBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
		"partnerJoin" => "PartnerSearchRowBasic",
		"solutionJoin" => "SolutionSearchRowBasic",
		"taskJoin" => "TaskSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"vendorJoin" => "VendorSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
