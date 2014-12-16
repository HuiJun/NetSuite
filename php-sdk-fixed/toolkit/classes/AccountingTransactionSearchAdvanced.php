<?php

class AccountingTransactionSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var AccountingTransactionSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var AccountingTransactionSearchRow
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
		"criteria" => "AccountingTransactionSearch",
		"columns" => "AccountingTransactionSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
