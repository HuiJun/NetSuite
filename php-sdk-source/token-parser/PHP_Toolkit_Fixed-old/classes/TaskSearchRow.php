<?php

class TaskSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var TaskSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var SupportCaseSearchRowBasic
	 */
	public $caseJoin;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $companyCustomerJoin;
	/**
	 * @access public
	 * @var ContactSearchRowBasic
	 */
	public $contactJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $employeeJoin;
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
	 * @var TimeBillSearchRowBasic
	 */
	public $timeJoin;
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
	 * @var NoteSearchRowBasic
	 */
	public $userNotesJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "TaskSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"companyCustomerJoin" => "CustomerSearchRowBasic",
		"contactJoin" => "ContactSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"jobJoin" => "JobSearchRowBasic",
		"opportunityJoin" => "OpportunitySearchRowBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
		"timeJoin" => "TimeBillSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
