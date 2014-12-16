<?php

class SessionResponse {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $userId;
	/**
	 * @access public
	 * @var WsRoleList
	 */
	public $wsRoleList;

	static $paramtypesmap = array(
		"status" => "Status",
		"userId" => "RecordRef",
		"wsRoleList" => "WsRoleList",
	);
    public static function create()
    {
        return new static();
    }
}
