<?php

class BillingRatesMatrix {
	/**
	 * @access public
	 * @var BillingRates[]
	 */
	public $billingRates;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"billingRates" => "BillingRates[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
