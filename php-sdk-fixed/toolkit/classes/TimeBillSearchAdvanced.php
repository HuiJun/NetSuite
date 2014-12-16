<?php

class TimeBillSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var TimeBillSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var TimeBillSearchRow
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
		"criteria" => "TimeBillSearch",
		"columns" => "TimeBillSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
