<?php

class CalendarEvent extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $company;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $contact;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $supportCase;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $transaction;
	/**
	 * @access public
	 * @var integer
	 */
	public $period;
	/**
	 * @access public
	 * @var RecurrenceFrequency
	 */
	public $frequency;
	/**
	 * @access public
	 * @var RecurrenceDowMaskList
	 */
	public $recurrenceDowMaskList;
	/**
	 * @access public
	 * @var RecurrenceDow
	 */
	public $recurrenceDow;
	/**
	 * @access public
	 * @var RecurrenceDowim
	 */
	public $recurrenceDowim;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $seriesStartDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endByDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $noEndDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $sendEmail;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var string
	 */
	public $title;
	/**
	 * @access public
	 * @var string
	 */
	public $recurrence;
	/**
	 * @access public
	 * @var string
	 */
	public $location;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $allDayEvent;
	/**
	 * @access public
	 * @var boolean
	 */
	public $timedEvent;
	/**
	 * @access public
	 * @var CalendarEventReminderType
	 */
	public $reminderType;
	/**
	 * @access public
	 * @var CalendarEventReminderMinutes
	 */
	public $reminderMinutes;
	/**
	 * @access public
	 * @var CalendarEventStatus
	 */
	public $status;
	/**
	 * @access public
	 * @var CalendarEventAccessLevel
	 */
	public $accessLevel;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $organizer;
	/**
	 * @access public
	 * @var string
	 */
	public $message;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;
	/**
	 * @access public
	 * @var ExclusionDateList
	 */
	public $exclusionDateList;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $owner;
	/**
	 * @access public
	 * @var CalendarEventAttendeeList
	 */
	public $attendeeList;
	/**
	 * @access public
	 * @var CalendarEventResourceList
	 */
	public $resourceList;
	/**
	 * @access public
	 * @var CalendarEventTimeItemList
	 */
	public $timeItemList;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
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
		"company" => "RecordRef",
		"contact" => "RecordRef",
		"supportCase" => "RecordRef",
		"transaction" => "RecordRef",
		"period" => "integer",
		"frequency" => "RecurrenceFrequency",
		"recurrenceDowMaskList" => "RecurrenceDowMaskList",
		"recurrenceDow" => "RecurrenceDow",
		"recurrenceDowim" => "RecurrenceDowim",
		"seriesStartDate" => "dateTime",
		"endByDate" => "dateTime",
		"noEndDate" => "boolean",
		"sendEmail" => "boolean",
		"customForm" => "RecordRef",
		"title" => "string",
		"recurrence" => "string",
		"location" => "string",
		"startDate" => "dateTime",
		"allDayEvent" => "boolean",
		"timedEvent" => "boolean",
		"reminderType" => "CalendarEventReminderType",
		"reminderMinutes" => "CalendarEventReminderMinutes",
		"status" => "CalendarEventStatus",
		"accessLevel" => "CalendarEventAccessLevel",
		"organizer" => "RecordRef",
		"message" => "string",
		"createdDate" => "dateTime",
		"endDate" => "dateTime",
		"exclusionDateList" => "ExclusionDateList",
		"lastModifiedDate" => "dateTime",
		"owner" => "RecordRef",
		"attendeeList" => "CalendarEventAttendeeList",
		"resourceList" => "CalendarEventResourceList",
		"timeItemList" => "CalendarEventTimeItemList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
