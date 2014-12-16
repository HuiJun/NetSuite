<?php

class CustomFieldRoleAccessList {
	/**
	 * @access public
	 * @var CustomFieldRoleAccess[]
	 */
	public $roleAccess;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"roleAccess" => "CustomFieldRoleAccess[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
