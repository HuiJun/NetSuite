<?php

class FileSearch extends SearchRecord {
	/**
	 * @access public
	 * @var FileSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $shopperJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "FileSearchBasic",
		"shopperJoin" => "CustomerSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
    public static function create()
    {
        return new static();
    }
}
