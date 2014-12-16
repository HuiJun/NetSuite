<?php

class AccountingPeriodSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var AccountingPeriodSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var AccountingPeriodSearchRow
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
		"criteria" => "AccountingPeriodSearch",
		"columns" => "AccountingPeriodSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
