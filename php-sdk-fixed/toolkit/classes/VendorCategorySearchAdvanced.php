<?php

class VendorCategorySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var VendorCategorySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var VendorCategorySearchRow
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
		"criteria" => "VendorCategorySearch",
		"columns" => "VendorCategorySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
