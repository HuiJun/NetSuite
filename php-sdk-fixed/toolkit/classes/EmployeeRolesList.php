<?php

class EmployeeRolesList {
	/**
	 * @access public
	 * @var EmployeeRoles[]
	 */
	public $roles;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"roles" => "EmployeeRoles[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
