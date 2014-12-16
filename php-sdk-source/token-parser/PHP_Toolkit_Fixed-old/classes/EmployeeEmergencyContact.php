<?php

class EmployeeEmergencyContact {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var string
	 */
	public $contact;
	/**
	 * @access public
	 * @var string
	 */
	public $relationship;
	/**
	 * @access public
	 * @var string
	 */
	public $address;
	/**
	 * @access public
	 * @var string
	 */
	public $phone;

	static $paramtypesmap = array(
		"id" => "integer",
		"contact" => "string",
		"relationship" => "string",
		"address" => "string",
		"phone" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
