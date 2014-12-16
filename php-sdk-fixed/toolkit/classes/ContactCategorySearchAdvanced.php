<?php

class ContactCategorySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ContactCategorySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ContactCategorySearchRow
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
		"criteria" => "ContactCategorySearch",
		"columns" => "ContactCategorySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
