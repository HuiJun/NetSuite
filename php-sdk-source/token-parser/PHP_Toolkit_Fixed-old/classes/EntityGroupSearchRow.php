<?php

class EntityGroupSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var EntityGroupSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EntitySearchRowBasic
	 */
	public $groupMemberJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "EntityGroupSearchRowBasic",
		"groupMemberJoin" => "EntitySearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
