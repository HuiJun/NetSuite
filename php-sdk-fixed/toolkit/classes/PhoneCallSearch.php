<?php

class PhoneCallSearch extends SearchRecord {
	/**
	 * @access public
	 * @var PhoneCallSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var SupportCaseSearchBasic
	 */
	public $caseJoin;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $companyCustomerJoin;
	/**
	 * @access public
	 * @var ContactSearchBasic
	 */
	public $contactJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $employeeJoin;
	/**
	 * @access public
	 * @var FileSearchBasic
	 */
	public $fileJoin;
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
	 * @var EntitySearchBasic
	 */
	public $participantJoin;
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
	 * @var NoteSearchBasic
	 */
	public $userNotesJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "PhoneCallSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"companyCustomerJoin" => "CustomerSearchBasic",
		"contactJoin" => "ContactSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"opportunityJoin" => "OpportunitySearchBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchBasic",
		"participantJoin" => "EntitySearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
