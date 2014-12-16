<?php

class ManufacturingOperationTask extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $manufacturingWorkCenter;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $manufacturingCostTemplate;
	/**
	 * @access public
	 * @var string
	 */
	public $title;
	/**
	 * @access public
	 * @var integer
	 */
	public $operationSequence;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $workOrder;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $order;
	/**
	 * @access public
	 * @var ManufacturingOperationTaskStatus
	 */
	public $status;
	/**
	 * @access public
	 * @var string
	 */
	public $message;
	/**
	 * @access public
	 * @var float
	 */
	public $estimatedWork;
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
	 * @var float
	 */
	public $inputQuantity;
	/**
	 * @access public
	 * @var float
	 */
	public $completedQuantity;
	/**
	 * @access public
	 * @var float
	 */
	public $setupTime;
	/**
	 * @access public
	 * @var float
	 */
	public $runRate;
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
	 * @var boolean
	 */
	public $autoCalculateLag;
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
	 * @var ManufacturingCostDetailList
	 */
	public $costDetailList;
	/**
	 * @access public
	 * @var ManufacturingOperationTaskPredecessorList
	 */
	public $predecessorList;
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
		"manufacturingWorkCenter" => "RecordRef",
		"manufacturingCostTemplate" => "RecordRef",
		"title" => "string",
		"operationSequence" => "integer",
		"workOrder" => "RecordRef",
		"order" => "RecordRef",
		"status" => "ManufacturingOperationTaskStatus",
		"message" => "string",
		"estimatedWork" => "float",
		"actualWork" => "float",
		"remainingWork" => "float",
		"inputQuantity" => "float",
		"completedQuantity" => "float",
		"setupTime" => "float",
		"runRate" => "float",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"autoCalculateLag" => "boolean",
		"machineResources" => "integer",
		"laborResources" => "integer",
		"costDetailList" => "ManufacturingCostDetailList",
		"predecessorList" => "ManufacturingOperationTaskPredecessorList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
