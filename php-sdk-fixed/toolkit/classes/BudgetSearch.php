<?php

class BudgetSearch extends SearchRecord {
	/**
	 * @access public
	 * @var BudgetSearchBasic
	 */
	public $basic;

	static $paramtypesmap = array(
		"basic" => "BudgetSearchBasic",
	);
    public static function create()
    {
        return new static();
    }
}
