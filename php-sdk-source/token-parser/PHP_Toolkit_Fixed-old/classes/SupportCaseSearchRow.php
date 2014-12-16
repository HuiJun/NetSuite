<?php

class SupportCaseSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var SupportCaseSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EntitySearchRowBasic
	 */
	public $companyJoin;
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
	 * @var FileSearchRowBasic
	 */
	public $fileJoin;
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
	 * @var MessageSearchRowBasic
	 */
	public $messagesJoin;
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
		"basic" => "SupportCaseSearchRowBasic",
		"companyJoin" => "EntitySearchRowBasic",
		"contactJoin" => "ContactSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"issueJoin" => "IssueSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"messagesJoin" => "MessageSearchRowBasic",
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
