<?php

class GroupMemberSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $groupId;

	static $paramtypesmap = array(
		"groupId" => "SearchMultiSelectField",
	);
    public static function create()
    {
        return new static();
    }
}
