<?php

class ChargeSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ChargeSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ChargeSearchRow
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
		"criteria" => "ChargeSearch",
		"columns" => "ChargeSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
