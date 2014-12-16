<?php

class BudgetBudgetType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _global = "_global";
	/**
	 * @var string
	 */
	const _local = "_local";
    public static function create()
    {
        return new static();
    }
}
