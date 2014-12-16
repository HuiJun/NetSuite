<?php

class ItemRevisionSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ItemRevisionSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ItemRevisionSearchRow
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
		"criteria" => "ItemRevisionSearch",
		"columns" => "ItemRevisionSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
