<?php

class AccountSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var AccountSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var AccountSearchRow
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
		"criteria" => "AccountSearch",
		"columns" => "AccountSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
