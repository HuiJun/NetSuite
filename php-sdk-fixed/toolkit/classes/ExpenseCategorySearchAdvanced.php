<?php

class ExpenseCategorySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ExpenseCategorySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ExpenseCategorySearchRow
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
		"criteria" => "ExpenseCategorySearch",
		"columns" => "ExpenseCategorySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
