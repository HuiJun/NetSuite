<?php

class ChangePasswordRequest {
	/**
	 * @access public
	 * @var ChangePassword
	 */
	public $changePassword;

	static $paramtypesmap = array(
		"changePassword" => "ChangePassword",
	);
    public static function create()
    {
        return new static();
    }
}
