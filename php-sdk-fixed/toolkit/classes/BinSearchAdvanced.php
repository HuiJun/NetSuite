<?php

class BinSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var BinSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var BinSearchRow
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
		"criteria" => "BinSearch",
		"columns" => "BinSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
