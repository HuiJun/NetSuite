<?php

class WorkOrder extends Record {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $manufacturingRouting;
	/**
	 * @access public
	 * @var boolean
	 */
	public $autoCalculateLag;
	/**
	 * @access public
	 * @var string
	 */
	public $status;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $job;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $assemblyItem;
	/**
	 * @access public
	 * @var boolean
	 */
	public $expandAssembly;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isWip;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $units;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var WorkOrderOrderStatus
	 */
	public $orderStatus;
	/**
	 * @access public
	 * @var boolean
	 */
	public $firmed;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var WorkOrderItemList
	 */
	public $itemList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var WorkOrderSchedulingMethod
	 */
	public $schedulingMethod;
	/**
	 * @access public
	 * @var SalesTeamList
	 */
	public $salesTeamList;
	/**
	 * @access public
	 * @var PartnersList
	 */
	public $partnersList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $createdFrom;
	/**
	 * @access public
	 * @var string
	 */
	public $sourceTransactionId;
	/**
	 * @access public
	 * @var integer
	 */
	public $sourceTransactionLine;
	/**
	 * @access public
	 * @var boolean
	 */
	public $specialOrder;
	/**
	 * @access public
	 * @var float
	 */
	public $buildable;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $options;
	/**
	 * @access public
	 * @var float
	 */
	public $built;
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
	 * @var RecordRef
	 */
	public $revision;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
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
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"manufacturingRouting" => "RecordRef",
		"autoCalculateLag" => "boolean",
		"status" => "string",
		"tranId" => "string",
		"entity" => "RecordRef",
		"job" => "RecordRef",
		"assemblyItem" => "RecordRef",
		"expandAssembly" => "boolean",
		"isWip" => "boolean",
		"quantity" => "float",
		"units" => "RecordRef",
		"tranDate" => "dateTime",
		"orderStatus" => "WorkOrderOrderStatus",
		"firmed" => "boolean",
		"memo" => "string",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"itemList" => "WorkOrderItemList",
		"location" => "RecordRef",
		"schedulingMethod" => "WorkOrderSchedulingMethod",
		"salesTeamList" => "SalesTeamList",
		"partnersList" => "PartnersList",
		"createdFrom" => "RecordRef",
		"sourceTransactionId" => "string",
		"sourceTransactionLine" => "integer",
		"specialOrder" => "boolean",
		"buildable" => "float",
		"options" => "CustomFieldList",
		"built" => "float",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"revision" => "RecordRef",
		"subsidiary" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
