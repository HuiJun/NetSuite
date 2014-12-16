<?php

class VendorAddressbookList {
	/**
	 * @access public
	 * @var VendorAddressbook[]
	 */
	public $addressbook;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"addressbook" => "VendorAddressbook[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
