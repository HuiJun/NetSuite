<?php

class BillingSchedule extends Record {
	/**
	 * @access public
	 * @var BillingScheduleType
	 */
	public $scheduleType;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $project;
	/**
	 * @access public
	 * @var string
	 */
	public $initialAmount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $initialTerms;
	/**
	 * @access public
	 * @var BillingScheduleFrequency
	 */
	public $frequency;
	/**
	 * @access public
	 * @var RecurrenceDowMaskList
	 */
	public $recurrenceDowMaskList;
	/**
	 * @access public
	 * @var BillingScheduleRecurrenceMode
	 */
	public $yearMode;
	/**
	 * @access public
	 * @var BillingScheduleYearDowim
	 */
	public $yearDowim;
	/**
	 * @access public
	 * @var BillingScheduleYearDow
	 */
	public $yearDow;
	/**
	 * @access public
	 * @var BillingScheduleYearDowimMonth
	 */
	public $yearDowimMonth;
	/**
	 * @access public
	 * @var BillingScheduleYearMonth
	 */
	public $yearMonth;
	/**
	 * @access public
	 * @var integer
	 */
	public $yearDom;
	/**
	 * @access public
	 * @var BillingScheduleRecurrenceMode
	 */
	public $monthMode;
	/**
	 * @access public
	 * @var BillingScheduleMonthDowim
	 */
	public $monthDowim;
	/**
	 * @access public
	 * @var BillingScheduleMonthDow
	 */
	public $monthDow;
	/**
	 * @access public
	 * @var integer
	 */
	public $monthDom;
	/**
	 * @access public
	 * @var integer
	 */
	public $dayPeriod;
	/**
	 * @access public
	 * @var BillingScheduleRepeatEvery
	 */
	public $repeatEvery;
	/**
	 * @access public
	 * @var boolean
	 */
	public $billForActuals;
	/**
	 * @access public
	 * @var integer
	 */
	public $numberRemaining;
	/**
	 * @access public
	 * @var boolean
	 */
	public $inArrears;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $recurrenceTerms;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isPublic;
	/**
	 * @access public
	 * @var boolean
	 */
	public $applyToSubtotal;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $transaction;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $seriesStartDate;
	/**
	 * @access public
	 * @var BillingScheduleRecurrenceList
	 */
	public $recurrenceList;
	/**
	 * @access public
	 * @var BillingScheduleMilestoneList
	 */
	public $milestoneList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"scheduleType" => "BillingScheduleType",
		"name" => "string",
		"project" => "RecordRef",
		"initialAmount" => "string",
		"initialTerms" => "RecordRef",
		"frequency" => "BillingScheduleFrequency",
		"recurrenceDowMaskList" => "RecurrenceDowMaskList",
		"yearMode" => "BillingScheduleRecurrenceMode",
		"yearDowim" => "BillingScheduleYearDowim",
		"yearDow" => "BillingScheduleYearDow",
		"yearDowimMonth" => "BillingScheduleYearDowimMonth",
		"yearMonth" => "BillingScheduleYearMonth",
		"yearDom" => "integer",
		"monthMode" => "BillingScheduleRecurrenceMode",
		"monthDowim" => "BillingScheduleMonthDowim",
		"monthDow" => "BillingScheduleMonthDow",
		"monthDom" => "integer",
		"dayPeriod" => "integer",
		"repeatEvery" => "BillingScheduleRepeatEvery",
		"billForActuals" => "boolean",
		"numberRemaining" => "integer",
		"inArrears" => "boolean",
		"recurrenceTerms" => "RecordRef",
		"isPublic" => "boolean",
		"applyToSubtotal" => "boolean",
		"transaction" => "RecordRef",
		"isInactive" => "boolean",
		"seriesStartDate" => "dateTime",
		"recurrenceList" => "BillingScheduleRecurrenceList",
		"milestoneList" => "BillingScheduleMilestoneList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
