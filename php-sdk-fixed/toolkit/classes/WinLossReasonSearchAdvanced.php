<?php

class WinLossReasonSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var WinLossReasonSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var WinLossReasonSearchRow
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
		"criteria" => "WinLossReasonSearch",
		"columns" => "WinLossReasonSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
