<?php

class CustomerStatusSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var CustomerStatusSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "CustomerStatusSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
    public static function create()
    {
        return new static();
    }
}
