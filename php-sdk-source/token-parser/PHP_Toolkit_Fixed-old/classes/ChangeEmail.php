<?php

class ChangeEmail {
	/**
	 * @access public
	 * @var string
	 */
	public $currentPassword;
	/**
	 * @access public
	 * @var string
	 */
	public $newEmail;
	/**
	 * @access public
	 * @var string
	 */
	public $newEmail2;
	/**
	 * @access public
	 * @var boolean
	 */
	public $justThisAccount;

	static $paramtypesmap = array(
		"currentPassword" => "string",
		"newEmail" => "string",
		"newEmail2" => "string",
		"justThisAccount" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
