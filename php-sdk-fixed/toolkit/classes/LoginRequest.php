<?php

class LoginRequest {
	/**
	 * @access public
	 * @var Passport
	 */
	public $passport;

	static $paramtypesmap = array(
		"passport" => "Passport",
	);
    public static function create()
    {
        return new static();
    }
}
