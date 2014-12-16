<?php

class JobSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var JobSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var BillingScheduleSearchRowBasic
	 */
	public $billingScheduleJoin;
	/**
	 * @access public
	 * @var ContactSearchRowBasic
	 */
	public $contactPrimaryJoin;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var ProjectTaskSearchRowBasic
	 */
	public $projectTaskJoin;
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
	 * @var TimeBillSearchRowBasic
	 */
	public $timeJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "JobSearchRowBasic",
		"billingScheduleJoin" => "BillingScheduleSearchRowBasic",
		"contactPrimaryJoin" => "ContactSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"projectTaskJoin" => "ProjectTaskSearchRowBasic",
		"resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
		"taskJoin" => "TaskSearchRowBasic",
		"timeJoin" => "TimeBillSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
