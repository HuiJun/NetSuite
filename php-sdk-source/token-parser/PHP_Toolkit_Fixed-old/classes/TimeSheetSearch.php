<?php

class TimeSheetSearch extends SearchRecord {
	/**
	 * @access public
	 * @var TimeSheetSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $employeeJoin;
	/**
	 * @access public
	 * @var TimeEntrySearchBasic
	 */
	public $timeEntryJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "TimeSheetSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"timeEntryJoin" => "TimeEntrySearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
