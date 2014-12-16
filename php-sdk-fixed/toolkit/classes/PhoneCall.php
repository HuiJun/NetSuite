<?php

class PhoneCall extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $message;
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
	 * @var RecordRef
	 */
	public $milestone;
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
	 * @var RecordRef
	 */
	public $owner;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $assigned;
	/**
	 * @access public
	 * @var boolean
	 */
	public $sendEmail;
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
	 * @var boolean
	 */
	public $timedEvent;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $completedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $phone;
	/**
	 * @access public
	 * @var PhoneCallStatus
	 */
	public $status;
	/**
	 * @access public
	 * @var PhoneCallPriority
	 */
	public $priority;
	/**
	 * @access public
	 * @var boolean
	 */
	public $accessLevel;
	/**
	 * @access public
	 * @var PhoneCallReminderType
	 */
	public $reminderType;
	/**
	 * @access public
	 * @var PhoneCallReminderMinutes
	 */
	public $reminderMinutes;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var PhoneCallContactList
	 */
	public $contactList;
	/**
	 * @access public
	 * @var PhoneCallTimeItemList
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
		"message" => "string",
		"company" => "RecordRef",
		"contact" => "RecordRef",
		"supportCase" => "RecordRef",
		"transaction" => "RecordRef",
		"milestone" => "RecordRef",
		"customForm" => "RecordRef",
		"title" => "string",
		"owner" => "RecordRef",
		"assigned" => "RecordRef",
		"sendEmail" => "boolean",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"timedEvent" => "boolean",
		"completedDate" => "dateTime",
		"phone" => "string",
		"status" => "PhoneCallStatus",
		"priority" => "PhoneCallPriority",
		"accessLevel" => "boolean",
		"reminderType" => "PhoneCallReminderType",
		"reminderMinutes" => "PhoneCallReminderMinutes",
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"contactList" => "PhoneCallContactList",
		"timeItemList" => "PhoneCallTimeItemList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
