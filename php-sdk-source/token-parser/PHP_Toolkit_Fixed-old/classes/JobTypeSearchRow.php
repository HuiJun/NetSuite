<?php

class JobTypeSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var JobTypeSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "JobTypeSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
    public static function create()
    {
        return new static();
    }
}
