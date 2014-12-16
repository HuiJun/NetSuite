<?php

class CurrencyRateSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CurrencyRateSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CurrencyRateSearchRow
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
		"criteria" => "CurrencyRateSearch",
		"columns" => "CurrencyRateSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
