<?php

class MessageSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var MessageSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var MessageSearchRow
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
		"criteria" => "MessageSearch",
		"columns" => "MessageSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
