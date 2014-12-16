<?php

class TaskSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $actualTime;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $assigned;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $company;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $completedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedTime;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedTimeOverride;
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
	public $isJobSummaryTask;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isJobTask;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPrivate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $milestone;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $percentComplete;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $percentTimeComplete;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $priority;
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
	 * @var SearchDoubleField
	 */
	public $timeRemaining;
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
		"actualTime" => "SearchDoubleField",
		"assigned" => "SearchMultiSelectField",
		"company" => "SearchMultiSelectField",
		"completedDate" => "SearchDateField",
		"contact" => "SearchMultiSelectField",
		"createdDate" => "SearchDateField",
		"endDate" => "SearchDateField",
		"estimatedTime" => "SearchDoubleField",
		"estimatedTimeOverride" => "SearchDoubleField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isJobSummaryTask" => "SearchBooleanField",
		"isJobTask" => "SearchBooleanField",
		"isPrivate" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"milestone" => "SearchLongField",
		"owner" => "SearchMultiSelectField",
		"percentComplete" => "SearchLongField",
		"percentTimeComplete" => "SearchLongField",
		"priority" => "SearchEnumMultiSelectField",
		"startDate" => "SearchDateField",
		"status" => "SearchEnumMultiSelectField",
		"timeRemaining" => "SearchDoubleField",
		"title" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
