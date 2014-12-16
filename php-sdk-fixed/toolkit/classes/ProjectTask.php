<?php

class ProjectTask extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $eventId;
	/**
	 * @access public
	 * @var float
	 */
	public $percentTimeComplete;
	/**
	 * @access public
	 * @var string
	 */
	public $title;
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
	public $order;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $owner;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parent;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $priority;
	/**
	 * @access public
	 * @var float
	 */
	public $estimatedWork;
	/**
	 * @access public
	 * @var float
	 */
	public $estimatedWorkBaseline;
	/**
	 * @access public
	 * @var ProjectTaskConstraintType
	 */
	public $constraintType;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDateBaseline;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $finishByDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDateBaseline;
	/**
	 * @access public
	 * @var float
	 */
	public $actualWork;
	/**
	 * @access public
	 * @var float
	 */
	public $remainingWork;
	/**
	 * @access public
	 * @var string
	 */
	public $message;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isMilestone;
	/**
	 * @access public
	 * @var string
	 */
	public $isOnCriticalPath;
	/**
	 * @access public
	 * @var float
	 */
	public $slackMinutes;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lateEnd;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lateStart;
	/**
	 * @access public
	 * @var ProjectTaskStatus
	 */
	public $status;
	/**
	 * @access public
	 * @var boolean
	 */
	public $nonBillableTask;
	/**
	 * @access public
	 * @var ProjectTaskAssigneeList
	 */
	public $assigneeList;
	/**
	 * @access public
	 * @var ProjectTaskPredecessorList
	 */
	public $predecessorList;
	/**
	 * @access public
	 * @var ProjectTaskTimeItemList
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
		"customForm" => "RecordRef",
		"eventId" => "RecordRef",
		"percentTimeComplete" => "float",
		"title" => "string",
		"company" => "RecordRef",
		"contact" => "RecordRef",
		"order" => "RecordRef",
		"owner" => "RecordRef",
		"parent" => "RecordRef",
		"priority" => "RecordRef",
		"estimatedWork" => "float",
		"estimatedWorkBaseline" => "float",
		"constraintType" => "ProjectTaskConstraintType",
		"startDate" => "dateTime",
		"startDateBaseline" => "dateTime",
		"endDate" => "dateTime",
		"finishByDate" => "dateTime",
		"endDateBaseline" => "dateTime",
		"actualWork" => "float",
		"remainingWork" => "float",
		"message" => "string",
		"isMilestone" => "boolean",
		"isOnCriticalPath" => "string",
		"slackMinutes" => "float",
		"lateEnd" => "dateTime",
		"lateStart" => "dateTime",
		"status" => "ProjectTaskStatus",
		"nonBillableTask" => "boolean",
		"assigneeList" => "ProjectTaskAssigneeList",
		"predecessorList" => "ProjectTaskPredecessorList",
		"timeItemList" => "ProjectTaskTimeItemList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
