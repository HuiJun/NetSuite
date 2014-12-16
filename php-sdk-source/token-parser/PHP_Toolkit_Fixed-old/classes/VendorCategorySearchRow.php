<?php

class VendorCategorySearchRow extends SearchRow {
	/**
	 * @access public
	 * @var VendorCategorySearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "VendorCategorySearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
    public static function create()
    {
        return new static();
    }
}
