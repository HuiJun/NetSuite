<?php

class ContactAccessRoles {
	/**
	 * @access public
	 * @var boolean
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $contact;
	/**
	 * @access public
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $role;
	/**
	 * @access public
	 * @var string
	 */
	public $password;
	/**
	 * @access public
	 * @var string
	 */
	public $password2;
	/**
	 * @access public
	 * @var boolean
	 */
	public $sendEmail;

	static $paramtypesmap = array(
		"giveAccess" => "boolean",
		"contact" => "RecordRef",
		"email" => "string",
		"role" => "RecordRef",
		"password" => "string",
		"password2" => "string",
		"sendEmail" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
