<?php

class CustomerItemPricingList {
	/**
	 * @access public
	 * @var CustomerItemPricing[]
	 */
	public $itemPricing;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"itemPricing" => "CustomerItemPricing[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
