<?php

class GetBudgetExchangeRateResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var BudgetExchangeRateList
	 */
	public $budgetExchangeRateList;

	static $paramtypesmap = array(
		"status" => "Status",
		"budgetExchangeRateList" => "BudgetExchangeRateList",
	);
    public static function create()
    {
        return new static();
    }
}
