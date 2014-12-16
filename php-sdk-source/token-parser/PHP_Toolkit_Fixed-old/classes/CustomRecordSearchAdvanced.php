<?php

class CustomRecordSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CustomRecordSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CustomRecordSearchRow
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
		"criteria" => "CustomRecordSearch",
		"columns" => "CustomRecordSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
