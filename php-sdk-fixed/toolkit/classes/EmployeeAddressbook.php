<?php

class EmployeeAddressbook {
	/**
	 * @access public
	 * @var boolean
	 */
	public $defaultShipping;
	/**
	 * @access public
	 * @var boolean
	 */
	public $defaultBilling;
	/**
	 * @access public
	 * @var string
	 */
	public $label;
	/**
	 * @access public
	 * @var Address
	 */
	public $addressbookAddress;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"defaultShipping" => "boolean",
		"defaultBilling" => "boolean",
		"label" => "string",
		"addressbookAddress" => "Address",
		"internalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
