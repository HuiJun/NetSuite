<?php

class EntityGroupSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var EntityGroupSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var EntityGroupSearchRow
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
		"criteria" => "EntityGroupSearch",
		"columns" => "EntityGroupSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
