<?php

class MessageSearch extends SearchRecord {
	/**
	 * @access public
	 * @var MessageSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var FileSearchBasic
	 */
	public $attachmentsJoin;
	/**
	 * @access public
	 * @var EntitySearchBasic
	 */
	public $authorJoin;
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
	 * @var EntitySearchBasic
	 */
	public $recipientJoin;
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

	static $paramtypesmap = array(
		"basic" => "MessageSearchBasic",
		"attachmentsJoin" => "FileSearchBasic",
		"authorJoin" => "EntitySearchBasic",
		"campaignJoin" => "CampaignSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"contactJoin" => "ContactSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"entityJoin" => "EntitySearchBasic",
		"opportunityJoin" => "OpportunitySearchBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchBasic",
		"partnerJoin" => "PartnerSearchBasic",
		"recipientJoin" => "EntitySearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"vendorJoin" => "VendorSearchBasic",
	);
    public static function create()
    {
        return new static();
    }
}
