<?php

class CustomListSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CustomListSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CustomListSearchRow
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
		"criteria" => "CustomListSearch",
		"columns" => "CustomListSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
