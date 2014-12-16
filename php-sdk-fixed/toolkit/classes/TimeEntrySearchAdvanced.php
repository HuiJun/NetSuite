<?php

class TimeEntrySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var TimeEntrySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var TimeEntrySearchRow
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
		"criteria" => "TimeEntrySearch",
		"columns" => "TimeEntrySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
