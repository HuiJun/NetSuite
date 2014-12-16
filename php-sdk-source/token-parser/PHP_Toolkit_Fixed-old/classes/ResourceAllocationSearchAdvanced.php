<?php

class ResourceAllocationSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ResourceAllocationSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ResourceAllocationSearchRow
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
		"criteria" => "ResourceAllocationSearch",
		"columns" => "ResourceAllocationSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
