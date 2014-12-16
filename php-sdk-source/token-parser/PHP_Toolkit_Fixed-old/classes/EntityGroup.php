<?php

class EntityGroup extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $groupName;
	/**
	 * @access public
	 * @var EntityGroupType
	 */
	public $groupType;
	/**
	 * @access public
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $groupOwner;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isSavedSearch;
	/**
	 * @access public
	 * @var EntityGroupType
	 */
	public $parentGroupType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $savedSearch;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isSalesTeam;
	/**
	 * @access public
	 * @var string
	 */
	public $comments;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isPrivate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $restrictionGroup;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isSalesRep;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isSupportRep;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isProductTeam;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isFunctionalTeam;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $issueRole;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isManufacturingWorkCenter;
	/**
	 * @access public
	 * @var string
	 */
	public $calendarName;
	/**
	 * @access public
	 * @var EntityGroupDailyTime
	 */
	public $calendarStartTime;
	/**
	 * @access public
	 * @var EntityGroupDailyTime
	 */
	public $calendarEndTime;
	/**
	 * @access public
	 * @var EntityGroupDefView
	 */
	public $calendarDefaultView;
	/**
	 * @access public
	 * @var EntityGroupPeriodSize
	 */
	public $calendarPeriod;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var integer
	 */
	public $machineResources;
	/**
	 * @access public
	 * @var integer
	 */
	public $laborResources;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $workCalendar;
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
		"groupName" => "string",
		"groupType" => "EntityGroupType",
		"email" => "string",
		"groupOwner" => "RecordRef",
		"isSavedSearch" => "boolean",
		"parentGroupType" => "EntityGroupType",
		"savedSearch" => "RecordRef",
		"isSalesTeam" => "boolean",
		"comments" => "string",
		"isPrivate" => "boolean",
		"restrictionGroup" => "RecordRef",
		"isInactive" => "boolean",
		"isSalesRep" => "boolean",
		"isSupportRep" => "boolean",
		"isProductTeam" => "boolean",
		"isFunctionalTeam" => "boolean",
		"issueRole" => "RecordRef",
		"isManufacturingWorkCenter" => "boolean",
		"calendarName" => "string",
		"calendarStartTime" => "EntityGroupDailyTime",
		"calendarEndTime" => "EntityGroupDailyTime",
		"calendarDefaultView" => "EntityGroupDefView",
		"calendarPeriod" => "EntityGroupPeriodSize",
		"subsidiary" => "RecordRef",
		"machineResources" => "integer",
		"laborResources" => "integer",
		"workCalendar" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
