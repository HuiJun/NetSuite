<?php

class NoteSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var NoteSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var NoteSearchRow
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
		"criteria" => "NoteSearch",
		"columns" => "NoteSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
