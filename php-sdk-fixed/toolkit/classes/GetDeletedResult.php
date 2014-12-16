<?php

class GetDeletedResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var DeletedRecordList
	 */
	public $deletedRecordList;

	static $paramtypesmap = array(
		"status" => "Status",
		"deletedRecordList" => "DeletedRecordList",
	);
    public static function create()
    {
        return new static();
    }
}
