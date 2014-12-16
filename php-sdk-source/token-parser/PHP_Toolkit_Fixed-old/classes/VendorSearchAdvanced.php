<?php

class VendorSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var VendorSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var VendorSearchRow
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
		"criteria" => "VendorSearch",
		"columns" => "VendorSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
