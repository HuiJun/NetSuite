<?php

class NoteTypeSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var NoteTypeSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var NoteTypeSearchRow
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
		"criteria" => "NoteTypeSearch",
		"columns" => "NoteTypeSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
