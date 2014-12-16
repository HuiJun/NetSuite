<?php

class NoteTypeSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var NoteTypeSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "NoteTypeSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
    public static function create()
    {
        return new static();
    }
}
