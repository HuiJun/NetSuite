<?php

class EntityGroupSearch extends SearchRecord {
	/**
	 * @access public
	 * @var EntityGroupSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EntitySearchBasic
	 */
	public $groupMemberJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "EntityGroupSearchBasic",
		"groupMemberJoin" => "EntitySearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
