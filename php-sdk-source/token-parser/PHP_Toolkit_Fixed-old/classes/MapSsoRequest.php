<?php

class MapSsoRequest {
	/**
	 * @access public
	 * @var SsoCredentials
	 */
	public $ssoCredentials;

	static $paramtypesmap = array(
		"ssoCredentials" => "SsoCredentials",
	);
    public static function create()
    {
        return new static();
    }
}
