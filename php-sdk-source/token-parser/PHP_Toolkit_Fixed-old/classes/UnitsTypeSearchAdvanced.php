<?php

class UnitsTypeSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var UnitsTypeSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var UnitsTypeSearchRow
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
		"criteria" => "UnitsTypeSearch",
		"columns" => "UnitsTypeSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
