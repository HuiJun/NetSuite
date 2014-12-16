<?php

class CustomRecordTypePermissionsList {
	/**
	 * @access public
	 * @var CustomRecordTypePermissions[]
	 */
	public $permissions;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"permissions" => "CustomRecordTypePermissions[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
