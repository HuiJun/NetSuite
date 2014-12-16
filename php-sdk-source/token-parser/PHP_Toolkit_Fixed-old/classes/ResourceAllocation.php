<?php

class ResourceAllocation extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $requestedby;
	/**
	 * @access public
	 * @var ResourceAllocationApprovalStatus
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $nextApprover;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $allocationResource;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $project;
	/**
	 * @access public
	 * @var string
	 */
	public $notes;
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
	 * @var float
	 */
	public $allocationAmount;
	/**
	 * @access public
	 * @var ResourceAllocationAllocationUnit
	 */
	public $allocationUnit;
	/**
	 * @access public
	 * @var float
	 */
	public $numberHours;
	/**
	 * @access public
	 * @var float
	 */
	public $percentOfTime;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $allocationType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
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
		"requestedby" => "RecordRef",
		"approvalStatus" => "ResourceAllocationApprovalStatus",
		"nextApprover" => "RecordRef",
		"allocationResource" => "RecordRef",
		"project" => "RecordRef",
		"notes" => "string",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"allocationAmount" => "float",
		"allocationUnit" => "ResourceAllocationAllocationUnit",
		"numberHours" => "float",
		"percentOfTime" => "float",
		"allocationType" => "RecordRef",
		"customForm" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
