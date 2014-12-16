<?php

class CustomerAddressbookList {
	/**
	 * @access public
	 * @var CustomerAddressbook[]
	 */
	public $addressbook;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"addressbook" => "CustomerAddressbook[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
