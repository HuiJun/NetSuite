<?php

class CurrencyRateList {
	/**
	 * @access public
	 * @var CurrencyRate[]
	 */
	public $currencyRate;

	static $paramtypesmap = array(
		"currencyRate" => "CurrencyRate[]",
	);
    public static function create()
    {
        return new static();
    }
}
