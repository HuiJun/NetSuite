<?php

class VendorPricingSchedule {
	/**
	 * @access public
	 * @var string
	 */
	public $scheduleName;
	/**
	 * @access public
	 * @var float
	 */
	public $scheduleDiscount;

	static $paramtypesmap = array(
		"scheduleName" => "string",
		"scheduleDiscount" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
