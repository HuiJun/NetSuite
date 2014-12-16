<?php

class GlobalAccountMappingSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var GlobalAccountMappingSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var GlobalAccountMappingSearchRow
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
		"criteria" => "GlobalAccountMappingSearch",
		"columns" => "GlobalAccountMappingSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
