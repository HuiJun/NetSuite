<?php

class CalendarEventSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var CalendarEventSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EntitySearchRowBasic
	 */
	public $attendeeJoin;
	/**
	 * @access public
	 * @var ContactSearchRowBasic
	 */
	public $attendeeContactJoin;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $attendeeCustomerJoin;
	/**
	 * @access public
	 * @var SupportCaseSearchRowBasic
	 */
	public $caseJoin;
	/**
	 * @access public
	 * @var FileSearchRowBasic
	 */
	public $fileJoin;
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
		"basic" => "CalendarEventSearchRowBasic",
		"attendeeJoin" => "EntitySearchRowBasic",
		"attendeeContactJoin" => "ContactSearchRowBasic",
		"attendeeCustomerJoin" => "CustomerSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
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
