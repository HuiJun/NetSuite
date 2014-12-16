<?php

class EmployeeAccruedTimeList {
	/**
	 * @access public
	 * @var EmployeeAccruedTime[]
	 */
	public $employeeAccruedTime;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"employeeAccruedTime" => "EmployeeAccruedTime[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
