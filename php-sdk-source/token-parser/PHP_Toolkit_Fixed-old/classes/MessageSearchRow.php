<?php

class MessageSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var MessageSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var FileSearchRowBasic
	 */
	public $attachmentsJoin;
	/**
	 * @access public
	 * @var EntitySearchRowBasic
	 */
	public $authorJoin;
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
	 * @var EntitySearchRowBasic
	 */
	public $recipientJoin;
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

	static $paramtypesmap = array(
		"basic" => "MessageSearchRowBasic",
		"attachmentsJoin" => "FileSearchRowBasic",
		"authorJoin" => "EntitySearchRowBasic",
		"campaignJoin" => "CampaignSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"contactJoin" => "ContactSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"entityJoin" => "EntitySearchRowBasic",
		"opportunityJoin" => "OpportunitySearchRowBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
		"partnerJoin" => "PartnerSearchRowBasic",
		"recipientJoin" => "EntitySearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"vendorJoin" => "VendorSearchRowBasic",
	);
    public static function create()
    {
        return new static();
    }
}
