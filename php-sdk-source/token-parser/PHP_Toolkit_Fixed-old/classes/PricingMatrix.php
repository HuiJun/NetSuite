<?php

class PricingMatrix {
	/**
	 * @access public
	 * @var Pricing[]
	 */
	public $pricing;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"pricing" => "Pricing[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
