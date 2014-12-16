<?php

class GetCurrencyRateRequest {
	/**
	 * @access public
	 * @var CurrencyRateFilter
	 */
	public $currencyRateFilter;

	static $paramtypesmap = array(
		"currencyRateFilter" => "CurrencyRateFilter",
	);
    public static function create()
    {
        return new static();
    }
}
