<?php

class BillingScheduleSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var BillingScheduleSearchRowBasic
	 */
	public $basic;

	static $paramtypesmap = array(
		"basic" => "BillingScheduleSearchRowBasic",
	);
    public static function create()
    {
        return new static();
    }
}
