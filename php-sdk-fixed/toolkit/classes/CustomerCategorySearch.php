<?php

class CustomerCategorySearch extends SearchRecord {
	/**
	 * @access public
	 * @var CustomerCategorySearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "CustomerCategorySearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
    public static function create()
    {
        return new static();
    }
}
