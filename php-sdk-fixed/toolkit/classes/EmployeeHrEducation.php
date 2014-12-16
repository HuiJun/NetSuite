<?php

class EmployeeHrEducation {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $education;
	/**
	 * @access public
	 * @var string
	 */
	public $degree;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $degreeDate;

	static $paramtypesmap = array(
		"education" => "RecordRef",
		"degree" => "string",
		"degreeDate" => "dateTime",
	);
    public static function create()
    {
        return new static();
    }
}
