<?php

class CustomRecordSearch extends SearchRecord {
	/**
	 * @access public
	 * @var CustomRecordSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var FileSearchBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var MessageSearchBasic
	 */
	public $messagesJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $ownerJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var NoteSearchBasic
	 */
	public $userNotesJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "CustomRecordSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"ownerJoin" => "EmployeeSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
