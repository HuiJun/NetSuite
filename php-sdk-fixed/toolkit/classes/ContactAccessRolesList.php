<?php

class ContactAccessRolesList {
	/**
	 * @access public
	 * @var ContactAccessRoles[]
	 */
	public $contactRoles;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"contactRoles" => "ContactAccessRoles[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
