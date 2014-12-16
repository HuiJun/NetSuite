<?php

class CustomerStatusSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CustomerStatusSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CustomerStatusSearchRow
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
		"criteria" => "CustomerStatusSearch",
		"columns" => "CustomerStatusSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
