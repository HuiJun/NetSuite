<?php

class SsoCredentials {
	/**
	 * @access public
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var string
	 */
	public $password;
	/**
	 * @access public
	 * @var string
	 */
	public $account;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $role;
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

	static $paramtypesmap = array(
		"email" => "string",
		"password" => "string",
		"account" => "string",
		"role" => "RecordRef",
		"authenticationToken" => "string",
		"partnerId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
