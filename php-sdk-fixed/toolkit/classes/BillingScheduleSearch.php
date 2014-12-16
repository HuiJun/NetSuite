<?php

class BillingScheduleSearch extends SearchRecord {
	/**
	 * @access public
	 * @var BillingScheduleSearchBasic
	 */
	public $basic;

	static $paramtypesmap = array(
		"basic" => "BillingScheduleSearchBasic",
	);
    public static function create()
    {
        return new static();
    }
}
