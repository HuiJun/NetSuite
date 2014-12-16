<?php

class WsRole {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $role;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isDefault;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isLoggedInRole;

	static $paramtypesmap = array(
		"role" => "RecordRef",
		"isDefault" => "boolean",
		"isInactive" => "boolean",
		"isLoggedInRole" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
