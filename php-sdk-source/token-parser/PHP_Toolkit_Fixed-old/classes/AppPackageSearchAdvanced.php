<?php

class AppPackageSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var AppPackageSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var AppPackageSearchRow
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
		"criteria" => "AppPackageSearch",
		"columns" => "AppPackageSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
