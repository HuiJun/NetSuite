<?php

class ChangeEmailRequest {
	/**
	 * @access public
	 * @var ChangeEmail
	 */
	public $changeEmail;

	static $paramtypesmap = array(
		"changeEmail" => "ChangeEmail",
	);
    public static function create()
    {
        return new static();
    }
}
