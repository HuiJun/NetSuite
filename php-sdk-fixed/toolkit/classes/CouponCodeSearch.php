<?php

class CouponCodeSearch extends SearchRecord {
	/**
	 * @access public
	 * @var CouponCodeSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "CouponCodeSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
    public static function create()
    {
        return new static();
    }
}
