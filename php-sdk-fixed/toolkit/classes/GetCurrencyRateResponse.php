<?php

class GetCurrencyRateResponse {
	/**
	 * @access public
	 * @var GetCurrencyRateResult
	 */
	public $getCurrencyRateResult;

	static $paramtypesmap = array(
		"getCurrencyRateResult" => "GetCurrencyRateResult",
	);
    public static function create()
    {
        return new static();
    }
}
