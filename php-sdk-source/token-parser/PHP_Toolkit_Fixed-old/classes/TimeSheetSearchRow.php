<?php

class TimeSheetSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var TimeSheetSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $employeeJoin;
	/**
	 * @access public
	 * @var TimeEntrySearchRowBasic
	 */
	public $timeEntryJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "TimeSheetSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"timeEntryJoin" => "TimeEntrySearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
