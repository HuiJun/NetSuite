<?php

class VendorPricingScheduleList {
	/**
	 * @access public
	 * @var VendorPricingSchedule[]
	 */
	public $pricingSchedule;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"pricingSchedule" => "VendorPricingSchedule[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
