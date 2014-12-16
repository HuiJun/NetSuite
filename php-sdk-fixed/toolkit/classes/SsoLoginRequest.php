<?php

class SsoLoginRequest {
	/**
	 * @access public
	 * @var SsoPassport
	 */
	public $ssoPassport;

	static $paramtypesmap = array(
		"ssoPassport" => "SsoPassport",
	);
    public static function create()
    {
        return new static();
    }
}
