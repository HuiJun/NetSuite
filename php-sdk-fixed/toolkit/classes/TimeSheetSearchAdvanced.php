<?php

class TimeSheetSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var TimeSheetSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var TimeSheetSearchRow
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
		"criteria" => "TimeSheetSearch",
		"columns" => "TimeSheetSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
