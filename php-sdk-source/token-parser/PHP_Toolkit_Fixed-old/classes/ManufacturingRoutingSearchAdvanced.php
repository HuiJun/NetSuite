<?php

class ManufacturingRoutingSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ManufacturingRoutingSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ManufacturingRoutingSearchRow
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
		"criteria" => "ManufacturingRoutingSearch",
		"columns" => "ManufacturingRoutingSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
