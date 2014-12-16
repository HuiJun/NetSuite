<?php

class FolderSearch extends SearchRecord {
	/**
	 * @access public
	 * @var FolderSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var FileSearchBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "FolderSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
    public static function create()
    {
        return new static();
    }
}
