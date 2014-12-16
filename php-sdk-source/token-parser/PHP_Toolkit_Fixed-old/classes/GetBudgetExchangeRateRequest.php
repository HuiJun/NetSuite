<?php

class GetBudgetExchangeRateRequest {
	/**
	 * @access public
	 * @var BudgetExchangeRateFilter
	 */
	public $budgetExchangeRateFilter;

	static $paramtypesmap = array(
		"budgetExchangeRateFilter" => "BudgetExchangeRateFilter",
	);
    public static function create()
    {
        return new static();
    }
}
