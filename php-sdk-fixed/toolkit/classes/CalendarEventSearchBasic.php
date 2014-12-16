<?php

class CalendarEventSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $attendee;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $calendar;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $completedDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $instanceStart;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isUpcomingEvent;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $organizer;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $resource;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $response;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"attendee" => "SearchMultiSelectField",
		"calendar" => "SearchMultiSelectField",
		"completedDate" => "SearchDateField",
		"createdDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"instanceStart" => "SearchDateField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isUpcomingEvent" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"location" => "SearchStringField",
		"message" => "SearchStringField",
		"organizer" => "SearchMultiSelectField",
		"owner" => "SearchMultiSelectField",
		"resource" => "SearchMultiSelectField",
		"response" => "SearchEnumMultiSelectField",
		"startDate" => "SearchDateField",
		"status" => "SearchEnumMultiSelectField",
		"title" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
