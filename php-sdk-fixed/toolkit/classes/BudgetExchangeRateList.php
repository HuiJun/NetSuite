<?php

class BudgetExchangeRateList {
	/**
	 * @access public
	 * @var BudgetExchangeRate[]
	 */
	public $budgetExchangeRate;

	static $paramtypesmap = array(
		"budgetExchangeRate" => "BudgetExchangeRate[]",
	);
    public static function create()
    {
        return new static();
    }
}
