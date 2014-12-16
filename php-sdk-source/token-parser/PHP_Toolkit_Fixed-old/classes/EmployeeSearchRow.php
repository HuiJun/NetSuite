<?php

class EmployeeSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var CampaignSearchRowBasic
	 */
	public $campaignResponseJoin;
	/**
	 * @access public
	 * @var DepartmentSearchRowBasic
	 */
	public $departmentJoin;
	/**
	 * @access public
	 * @var FileSearchRowBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var LocationSearchRowBasic
	 */
	public $locationJoin;
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
	 * @var ResourceAllocationSearchRowBasic
	 */
	public $resourceAllocationJoin;
	/**
	 * @access public
	 * @var SubsidiarySearchRowBasic
	 */
	public $subsidiaryJoin;
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
		"basic" => "EmployeeSearchRowBasic",
		"campaignResponseJoin" => "CampaignSearchRowBasic",
		"departmentJoin" => "DepartmentSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"locationJoin" => "LocationSearchRowBasic",
		"messagesJoin" => "MessageSearchRowBasic",
		"messagesFromJoin" => "MessageSearchRowBasic",
		"messagesToJoin" => "MessageSearchRowBasic",
		"resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
		"subsidiaryJoin" => "SubsidiarySearchRowBasic",
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
