<?php

class FolderSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var FolderSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var FolderSearchRow
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
		"criteria" => "FolderSearch",
		"columns" => "FolderSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
