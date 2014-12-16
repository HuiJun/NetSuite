<?php

class ContactAddressbookList {
	/**
	 * @access public
	 * @var ContactAddressbook[]
	 */
	public $addressbook;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"addressbook" => "ContactAddressbook[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
