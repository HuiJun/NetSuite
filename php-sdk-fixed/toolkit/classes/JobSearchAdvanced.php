<?php

class JobSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var JobSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var JobSearchRow
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
		"criteria" => "JobSearch",
		"columns" => "JobSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
