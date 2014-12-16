<?php

class CustomerGroupPricingList {
	/**
	 * @access public
	 * @var CustomerGroupPricing[]
	 */
	public $groupPricing;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"groupPricing" => "CustomerGroupPricing[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
