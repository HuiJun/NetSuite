<?php

class EmployeeAddressbookList {
	/**
	 * @access public
	 * @var EmployeeAddressbook[]
	 */
	public $addressbook;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"addressbook" => "EmployeeAddressbook[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
