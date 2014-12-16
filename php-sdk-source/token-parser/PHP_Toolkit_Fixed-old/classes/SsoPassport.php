<?php

class SsoPassport {
	/**
	 * @access public
	 * @var string
	 */
	public $authenticationToken;
	/**
	 * @access public
	 * @var string
	 */
	public $partnerId;
	/**
	 * @access public
	 * @var string
	 */
	public $partnerAccount;

	static $paramtypesmap = array(
		"authenticationToken" => "string",
		"partnerId" => "string",
		"partnerAccount" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
