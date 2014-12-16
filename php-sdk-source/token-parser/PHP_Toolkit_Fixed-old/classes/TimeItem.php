<?php

class TimeItem {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $employee;
	/**
	 * @access public
	 * @var TimeItemTimeType
	 */
	public $timeType;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customer;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isBillable;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $payrollItem;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $temporaryLocalJurisdiction;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $temporaryStateJurisdiction;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var Duration
	 */
	public $hours;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $price;
	/**
	 * @access public
	 * @var float
	 */
	public $rate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $overrideRate;
	/**
	 * @access public
	 * @var Duration
	 */
	public $hoursTotal;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $caseTaskEvent;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isUtilized;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isProductive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isExempt;

	static $paramtypesmap = array(
		"id" => "integer",
		"employee" => "RecordRef",
		"timeType" => "TimeItemTimeType",
		"tranDate" => "dateTime",
		"customer" => "RecordRef",
		"isBillable" => "boolean",
		"payrollItem" => "RecordRef",
		"item" => "RecordRef",
		"temporaryLocalJurisdiction" => "RecordRef",
		"temporaryStateJurisdiction" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"hours" => "Duration",
		"price" => "RecordRef",
		"rate" => "float",
		"overrideRate" => "boolean",
		"hoursTotal" => "Duration",
		"caseTaskEvent" => "RecordRef",
		"memo" => "string",
		"isUtilized" => "boolean",
		"isProductive" => "boolean",
		"isExempt" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
