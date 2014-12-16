<?php

class ProjectTaskSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ProjectTaskSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ProjectTaskSearchRow
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
		"criteria" => "ProjectTaskSearch",
		"columns" => "ProjectTaskSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
