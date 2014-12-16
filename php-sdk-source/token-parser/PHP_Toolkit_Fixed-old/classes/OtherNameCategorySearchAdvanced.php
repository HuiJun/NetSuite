<?php

class OtherNameCategorySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var OtherNameCategorySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var OtherNameCategorySearchRow
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
		"criteria" => "OtherNameCategorySearch",
		"columns" => "OtherNameCategorySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
