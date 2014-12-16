<?php

class SupportCaseSearch extends SearchRecord {
	/**
	 * @access public
	 * @var SupportCaseSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EntitySearchBasic
	 */
	public $companyJoin;
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
	 * @var FileSearchBasic
	 */
	public $fileJoin;
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
	 * @var MessageSearchBasic
	 */
	public $messagesJoin;
	/**
	 * @access public
	 * @var TimeBillSearchBasic
	 */
	public $timeJoin;
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
		"basic" => "SupportCaseSearchBasic",
		"companyJoin" => "EntitySearchBasic",
		"contactJoin" => "ContactSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"issueJoin" => "IssueSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"timeJoin" => "TimeBillSearchBasic",
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
