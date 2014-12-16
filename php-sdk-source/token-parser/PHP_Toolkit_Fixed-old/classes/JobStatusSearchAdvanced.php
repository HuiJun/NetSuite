<?php

class JobStatusSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var JobStatusSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var JobStatusSearchRow
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
		"criteria" => "JobStatusSearch",
		"columns" => "JobStatusSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
