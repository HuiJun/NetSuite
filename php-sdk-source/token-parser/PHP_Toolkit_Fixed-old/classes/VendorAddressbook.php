<?php

class VendorAddressbook {
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
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var Address
	 */
	public $addressbookAddress;

	static $paramtypesmap = array(
		"defaultShipping" => "boolean",
		"defaultBilling" => "boolean",
		"label" => "string",
		"internalId" => "string",
		"addressbookAddress" => "Address",
	);
    public static function create()
    {
        return new static();
    }
}
