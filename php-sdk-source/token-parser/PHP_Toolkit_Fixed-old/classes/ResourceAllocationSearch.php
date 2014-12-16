<?php

class ResourceAllocationSearch extends SearchRecord {
	/**
	 * @access public
	 * @var ResourceAllocationSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $employeeJoin;
	/**
	 * @access public
	 * @var JobSearchBasic
	 */
	public $jobJoin;
	/**
	 * @access public
	 * @var EntitySearchBasic
	 */
	public $requestedByJoin;
	/**
	 * @access public
	 * @var EntitySearchBasic
	 */
	public $resourceJoin;
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
		"basic" => "ResourceAllocationSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"jobJoin" => "JobSearchBasic",
		"requestedByJoin" => "EntitySearchBasic",
		"resourceJoin" => "EntitySearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"vendorJoin" => "VendorSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
