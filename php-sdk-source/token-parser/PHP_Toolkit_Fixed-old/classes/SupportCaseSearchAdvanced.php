<?php

class SupportCaseSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var SupportCaseSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var SupportCaseSearchRow
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
		"criteria" => "SupportCaseSearch",
		"columns" => "SupportCaseSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
