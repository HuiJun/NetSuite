<?php

class CustomRecordSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var CustomRecordSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var FileSearchRowBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var MessageSearchRowBasic
	 */
	public $messagesJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $ownerJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var NoteSearchRowBasic
	 */
	public $userNotesJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "CustomRecordSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"messagesJoin" => "MessageSearchRowBasic",
		"ownerJoin" => "EmployeeSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
