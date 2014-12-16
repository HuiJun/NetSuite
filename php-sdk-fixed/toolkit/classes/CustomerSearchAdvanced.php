<?php

class CustomerSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CustomerSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CustomerSearchRow
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
		"criteria" => "CustomerSearch",
		"columns" => "CustomerSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
