<?php

class BudgetSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var BudgetSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var BudgetSearchRow
	 */
	public $columns;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchId;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchScriptId;

	static $paramtypesmap = array(
		"criteria" => "BudgetSearch",
		"columns" => "BudgetSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
