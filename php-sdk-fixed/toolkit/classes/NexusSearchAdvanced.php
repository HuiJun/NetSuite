<?php

class NexusSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var NexusSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var NexusSearchRow
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
		"criteria" => "NexusSearch",
		"columns" => "NexusSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
