<?php

class PhoneCallContact {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $company;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $contact;
	/**
	 * @access public
	 * @var string
	 */
	public $phone;
	/**
	 * @access public
	 * @var string
	 */
	public $email;

	static $paramtypesmap = array(
		"company" => "RecordRef",
		"contact" => "RecordRef",
		"phone" => "string",
		"email" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
