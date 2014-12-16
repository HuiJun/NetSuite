<?php

class EmployeeEarning {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $payrollItem;
	/**
	 * @access public
	 * @var string
	 */
	public $payRate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $primaryEarning;
	/**
	 * @access public
	 * @var float
	 */
	public $defaultHours;
	/**
	 * @access public
	 * @var boolean
	 */
	public $inactive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $defaultEarning;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $effectiveDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expirationDate;

	static $paramtypesmap = array(
		"payrollItem" => "RecordRef",
		"payRate" => "string",
		"primaryEarning" => "boolean",
		"defaultHours" => "float",
		"inactive" => "boolean",
		"defaultEarning" => "boolean",
		"effectiveDate" => "dateTime",
		"expirationDate" => "dateTime",
	);
    public static function create()
    {
        return new static();
    }
}
