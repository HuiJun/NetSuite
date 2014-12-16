<?php

class EmployeeEarningList {
	/**
	 * @access public
	 * @var EmployeeEarning[]
	 */
	public $employeeEarning;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"employeeEarning" => "EmployeeEarning[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
