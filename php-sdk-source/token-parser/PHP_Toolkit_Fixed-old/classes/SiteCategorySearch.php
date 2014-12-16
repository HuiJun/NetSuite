<?php

class SiteCategorySearch extends SearchRecord {
	/**
	 * @access public
	 * @var SiteCategorySearchBasic
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
		"basic" => "SiteCategorySearchBasic",
		"shopperJoin" => "CustomerSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
    public static function create()
    {
        return new static();
    }
}
