<?php

class AccountingPeriodSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var AccountingPeriodSearchRowBasic
	 */
	public $basic;
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

	static $paramtypesmap = array(
		"basic" => "AccountingPeriodSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
	);
    public static function create()
    {
        return new static();
    }
}
