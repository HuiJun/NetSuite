<?php

class PayrollItemSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var PayrollItemSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var PayrollItemSearchRow
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
		"criteria" => "PayrollItemSearch",
		"columns" => "PayrollItemSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
