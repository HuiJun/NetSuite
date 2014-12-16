<?php

class SiteCategorySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var SiteCategorySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var SiteCategorySearchRow
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
		"criteria" => "SiteCategorySearch",
		"columns" => "SiteCategorySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
