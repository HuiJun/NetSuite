<?php

class ContactRoleSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ContactRoleSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ContactRoleSearchRow
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
		"criteria" => "ContactRoleSearch",
		"columns" => "ContactRoleSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
