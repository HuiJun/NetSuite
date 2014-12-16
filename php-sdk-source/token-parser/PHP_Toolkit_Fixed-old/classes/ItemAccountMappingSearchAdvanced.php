<?php

class ItemAccountMappingSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ItemAccountMappingSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ItemAccountMappingSearchRow
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
		"criteria" => "ItemAccountMappingSearch",
		"columns" => "ItemAccountMappingSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
