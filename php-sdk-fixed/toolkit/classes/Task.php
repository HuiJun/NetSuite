<?php

class Task extends Record {
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
	public $assigned;
	/**
	 * @access public
	 * @var boolean
	 */
	public $sendEmail;
	/**
	 * @access public
	 * @var boolean
	 */
	public $timedEvent;
	/**
	 * @access public
	 * @var Duration
	 */
	public $estimatedTime;
	/**
	 * @access public
	 * @var Duration
	 */
	public $estimatedTimeOverride;
	/**
	 * @access public
	 * @var Duration
	 */
	public $actualTime;
	/**
	 * @access public
	 * @var Duration
	 */
	public $timeRemaining;
	/**
	 * @access public
	 * @var float
	 */
	public $percentTimeComplete;
	/**
	 * @access public
	 * @var float
	 */
	public $percentComplete;
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
	 * @var dateTime
	 */
	public $dueDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $completedDate;
	/**
	 * @access public
	 * @var TaskPriority
	 */
	public $priority;
	/**
	 * @access public
	 * @var TaskStatus
	 */
	public $status;
	/**
	 * @access public
	 * @var string
	 */
	public $message;
	/**
	 * @access public
	 * @var boolean
	 */
	public $accessLevel;
	/**
	 * @access public
	 * @var TaskReminderType
	 */
	public $reminderType;
	/**
	 * @access public
	 * @var TaskReminderMinutes
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
	 * @var RecordRef
	 */
	public $owner;
	/**
	 * @access public
	 * @var TaskContactList
	 */
	public $contactList;
	/**
	 * @access public
	 * @var TaskTimeItemList
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
		"milestone" => "RecordRef",
		"customForm" => "RecordRef",
		"title" => "string",
		"assigned" => "RecordRef",
		"sendEmail" => "boolean",
		"timedEvent" => "boolean",
		"estimatedTime" => "Duration",
		"estimatedTimeOverride" => "Duration",
		"actualTime" => "Duration",
		"timeRemaining" => "Duration",
		"percentTimeComplete" => "float",
		"percentComplete" => "float",
		"parent" => "RecordRef",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"dueDate" => "dateTime",
		"completedDate" => "dateTime",
		"priority" => "TaskPriority",
		"status" => "TaskStatus",
		"message" => "string",
		"accessLevel" => "boolean",
		"reminderType" => "TaskReminderType",
		"reminderMinutes" => "TaskReminderMinutes",
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"owner" => "RecordRef",
		"contactList" => "TaskContactList",
		"timeItemList" => "TaskTimeItemList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
