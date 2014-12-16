<?php

class PromotionCodeCurrency {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var float
	 */
	public $minimumOrderAmount;

	static $paramtypesmap = array(
		"currency" => "RecordRef",
		"minimumOrderAmount" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
