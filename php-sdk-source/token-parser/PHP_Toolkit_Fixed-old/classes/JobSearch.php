<?php

class JobSearch extends SearchRecord {
	/**
	 * @access public
	 * @var JobSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var BillingScheduleSearchBasic
	 */
	public $billingScheduleJoin;
	/**
	 * @access public
	 * @var ContactSearchBasic
	 */
	public $contactPrimaryJoin;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var ProjectTaskSearchBasic
	 */
	public $projectTaskJoin;
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
	 * @var TimeBillSearchBasic
	 */
	public $timeJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "JobSearchBasic",
		"billingScheduleJoin" => "BillingScheduleSearchBasic",
		"contactPrimaryJoin" => "ContactSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"projectTaskJoin" => "ProjectTaskSearchBasic",
		"resourceAllocationJoin" => "ResourceAllocationSearchBasic",
		"taskJoin" => "TaskSearchBasic",
		"timeJoin" => "TimeBillSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
