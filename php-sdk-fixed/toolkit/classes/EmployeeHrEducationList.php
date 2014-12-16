<?php

class EmployeeHrEducationList {
	/**
	 * @access public
	 * @var EmployeeHrEducation[]
	 */
	public $employeeHrEducation;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"employeeHrEducation" => "EmployeeHrEducation[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
