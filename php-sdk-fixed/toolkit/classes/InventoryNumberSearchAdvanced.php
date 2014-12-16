<?php

class InventoryNumberSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var InventoryNumberSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var InventoryNumberSearchRow
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
		"criteria" => "InventoryNumberSearch",
		"columns" => "InventoryNumberSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
