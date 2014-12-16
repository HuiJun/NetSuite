<?php

class FolderSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var FolderSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var FileSearchRowBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "FolderSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
    public static function create()
    {
        return new static();
    }
}
