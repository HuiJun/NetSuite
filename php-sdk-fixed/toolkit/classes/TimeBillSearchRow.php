<?php

class TimeBillSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var TimeBillSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var PhoneCallSearchRowBasic
	 */
	public $callJoin;
	/**
	 * @access public
	 * @var SupportCaseSearchRowBasic
	 */
	public $caseJoin;
	/**
	 * @access public
	 * @var ClassificationSearchRowBasic
	 */
	public $classJoin;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var DepartmentSearchRowBasic
	 */
	public $departmentJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $employeeJoin;
	/**
	 * @access public
	 * @var CalendarEventSearchRowBasic
	 */
	public $eventJoin;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var JobSearchRowBasic
	 */
	public $jobJoin;
	/**
	 * @access public
	 * @var LocationSearchRowBasic
	 */
	public $locationJoin;
	/**
	 * @access public
	 * @var ProjectTaskSearchRowBasic
	 */
	public $projectTaskJoin;
	/**
	 * @access public
	 * @var ProjectTaskAssignmentSearchRowBasic
	 */
	public $projectTaskAssignmentJoin;
	/**
	 * @access public
	 * @var ResourceAllocationSearchRowBasic
	 */
	public $resourceAllocationJoin;
	/**
	 * @access public
	 * @var TaskSearchRowBasic
	 */
	public $taskJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var VendorSearchRowBasic
	 */
	public $vendorJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "TimeBillSearchRowBasic",
		"callJoin" => "PhoneCallSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"classJoin" => "ClassificationSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"departmentJoin" => "DepartmentSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"eventJoin" => "CalendarEventSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"jobJoin" => "JobSearchRowBasic",
		"locationJoin" => "LocationSearchRowBasic",
		"projectTaskJoin" => "ProjectTaskSearchRowBasic",
		"projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchRowBasic",
		"resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
		"taskJoin" => "TaskSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"vendorJoin" => "VendorSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
