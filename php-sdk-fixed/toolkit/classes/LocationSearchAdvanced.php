<?php

class LocationSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var LocationSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var LocationSearchRow
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
		"criteria" => "LocationSearch",
		"columns" => "LocationSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
