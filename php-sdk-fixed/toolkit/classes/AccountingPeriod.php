<?php

class AccountingPeriod extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $periodName;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parent;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fiscalCalendar;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $closedOnDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isAdjust;
	/**
	 * @access public
	 * @var AccountingPeriodFiscalCalendarsList
	 */
	public $fiscalCalendarsList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isQuarter;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isYear;
	/**
	 * @access public
	 * @var boolean
	 */
	public $closed;
	/**
	 * @access public
	 * @var boolean
	 */
	public $apLocked;
	/**
	 * @access public
	 * @var boolean
	 */
	public $arLocked;
	/**
	 * @access public
	 * @var boolean
	 */
	public $payrollLocked;
	/**
	 * @access public
	 * @var boolean
	 */
	public $allLocked;
	/**
	 * @access public
	 * @var boolean
	 */
	public $allowNonGLChanges;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"periodName" => "string",
		"parent" => "RecordRef",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"fiscalCalendar" => "RecordRef",
		"closedOnDate" => "dateTime",
		"isAdjust" => "boolean",
		"fiscalCalendarsList" => "AccountingPeriodFiscalCalendarsList",
		"isQuarter" => "boolean",
		"isYear" => "boolean",
		"closed" => "boolean",
		"apLocked" => "boolean",
		"arLocked" => "boolean",
		"payrollLocked" => "boolean",
		"allLocked" => "boolean",
		"allowNonGLChanges" => "boolean",
		"internalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
