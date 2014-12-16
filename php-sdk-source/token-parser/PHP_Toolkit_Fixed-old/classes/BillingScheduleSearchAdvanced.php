<?php

class BillingScheduleSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var BillingScheduleSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var BillingScheduleSearchRow
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
		"criteria" => "BillingScheduleSearch",
		"columns" => "BillingScheduleSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
