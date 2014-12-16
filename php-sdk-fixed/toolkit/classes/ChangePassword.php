<?php

class ChangePassword {
	/**
	 * @access public
	 * @var string
	 */
	public $currentPassword;
	/**
	 * @access public
	 * @var string
	 */
	public $newPassword;
	/**
	 * @access public
	 * @var string
	 */
	public $newPassword2;
	/**
	 * @access public
	 * @var boolean
	 */
	public $justThisAccount;

	static $paramtypesmap = array(
		"currentPassword" => "string",
		"newPassword" => "string",
		"newPassword2" => "string",
		"justThisAccount" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
