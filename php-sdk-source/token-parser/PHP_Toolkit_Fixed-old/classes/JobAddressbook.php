<?php

class JobAddressbook {
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
	 * @var boolean
	 */
	public $isResidential;
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
		"isResidential" => "boolean",
		"label" => "string",
		"internalId" => "string",
		"addressbookAddress" => "Address",
	);
    public static function create()
    {
        return new static();
    }
}
