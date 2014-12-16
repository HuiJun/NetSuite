<?php

class GetBudgetExchangeRateResponse {
	/**
	 * @access public
	 * @var GetBudgetExchangeRateResult
	 */
	public $getBudgetExchangeRateResult;

	static $paramtypesmap = array(
		"getBudgetExchangeRateResult" => "GetBudgetExchangeRateResult",
	);
    public static function create()
    {
        return new static();
    }
}
