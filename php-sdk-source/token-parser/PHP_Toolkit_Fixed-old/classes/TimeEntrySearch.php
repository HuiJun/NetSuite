<?php

class TimeEntrySearch extends SearchRecord {
	/**
	 * @access public
	 * @var TimeEntrySearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var PhoneCallSearchBasic
	 */
	public $callJoin;
	/**
	 * @access public
	 * @var SupportCaseSearchBasic
	 */
	public $caseJoin;
	/**
	 * @access public
	 * @var ClassificationSearchBasic
	 */
	public $classJoin;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var DepartmentSearchBasic
	 */
	public $departmentJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $employeeJoin;
	/**
	 * @access public
	 * @var CalendarEventSearchBasic
	 */
	public $eventJoin;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var JobSearchBasic
	 */
	public $jobJoin;
	/**
	 * @access public
	 * @var LocationSearchBasic
	 */
	public $locationJoin;
	/**
	 * @access public
	 * @var ProjectTaskSearchBasic
	 */
	public $projectTaskJoin;
	/**
	 * @access public
	 * @var ProjectTaskAssignmentSearchBasic
	 */
	public $projectTaskAssignmentJoin;
	/**
	 * @access public
	 * @var ResourceAllocationSearchBasic
	 */
	public $resourceAllocationJoin;
	/**
	 * @access public
	 * @var TaskSearchBasic
	 */
	public $taskJoin;
	/**
	 * @access public
	 * @var TimeSheetSearchBasic
	 */
	public $timeSheetJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var VendorSearchBasic
	 */
	public $vendorJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "TimeEntrySearchBasic",
		"callJoin" => "PhoneCallSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"classJoin" => "ClassificationSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"departmentJoin" => "DepartmentSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"eventJoin" => "CalendarEventSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"jobJoin" => "JobSearchBasic",
		"locationJoin" => "LocationSearchBasic",
		"projectTaskJoin" => "ProjectTaskSearchBasic",
		"projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchBasic",
		"resourceAllocationJoin" => "ResourceAllocationSearchBasic",
		"taskJoin" => "TaskSearchBasic",
		"timeSheetJoin" => "TimeSheetSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"vendorJoin" => "VendorSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
