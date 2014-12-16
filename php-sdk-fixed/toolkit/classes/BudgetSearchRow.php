<?php

class BudgetSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var BudgetSearchRowBasic
	 */
	public $basic;

	static $paramtypesmap = array(
		"basic" => "BudgetSearchRowBasic",
	);
    public static function create()
    {
        return new static();
    }
}
