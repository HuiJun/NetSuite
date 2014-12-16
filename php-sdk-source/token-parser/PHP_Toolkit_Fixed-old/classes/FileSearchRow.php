<?php

class FileSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var FileSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $shopperJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "FileSearchRowBasic",
		"shopperJoin" => "CustomerSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
    public static function create()
    {
        return new static();
    }
}
