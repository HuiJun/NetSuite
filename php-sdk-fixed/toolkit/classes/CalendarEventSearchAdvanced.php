<?php

class CalendarEventSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CalendarEventSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CalendarEventSearchRow
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
		"criteria" => "CalendarEventSearch",
		"columns" => "CalendarEventSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
