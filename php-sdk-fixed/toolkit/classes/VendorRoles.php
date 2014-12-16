<?php

class VendorRoles {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $selectedRole;

	static $paramtypesmap = array(
		"selectedRole" => "RecordRef",
	);
    public static function create()
    {
        return new static();
    }
}
