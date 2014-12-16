<?php

class PhoneCallSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var PhoneCallSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var PhoneCallSearchRow
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
		"criteria" => "PhoneCallSearch",
		"columns" => "PhoneCallSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
