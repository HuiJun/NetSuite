<?php

class GetConsolidatedExchangeRateResponse {
	/**
	 * @access public
	 * @var GetConsolidatedExchangeRateResult
	 */
	public $getConsolidatedExchangeRateResult;

	static $paramtypesmap = array(
		"getConsolidatedExchangeRateResult" => "GetConsolidatedExchangeRateResult",
	);
    public static function create()
    {
        return new static();
    }
}
