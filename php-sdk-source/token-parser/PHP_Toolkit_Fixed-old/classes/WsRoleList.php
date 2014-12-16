<?php

class WsRoleList {
	/**
	 * @access public
	 * @var WsRole[]
	 */
	public $wsRole;

	static $paramtypesmap = array(
		"wsRole" => "WsRole[]",
	);
    public static function create()
    {
        return new static();
    }
}
