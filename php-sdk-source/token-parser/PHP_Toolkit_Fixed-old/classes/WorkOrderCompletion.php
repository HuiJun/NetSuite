<?php

class WorkOrderCompletion extends Record {
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
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var float
	 */
	public $scrapQuantity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $units;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isBackflush;
	/**
	 * @access public
	 * @var float
	 */
	public $orderQuantity;
	/**
	 * @access public
	 * @var float
	 */
	public $total;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $createdFrom;
	/**
	 * @access public
	 * @var InventoryDetail
	 */
	public $inventoryDetail;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
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
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $revision;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $startOperation;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $endOperation;
	/**
	 * @access public
	 * @var float
	 */
	public $completedQuantity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $manufacturingRouting;
	/**
	 * @access public
	 * @var WorkOrderCompletionComponentList
	 */
	public $componentList;
	/**
	 * @access public
	 * @var WorkOrderCompletionOperationList
	 */
	public $operationList;
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
		"tranId" => "string",
		"item" => "RecordRef",
		"quantity" => "float",
		"scrapQuantity" => "float",
		"units" => "RecordRef",
		"isBackflush" => "boolean",
		"orderQuantity" => "float",
		"total" => "float",
		"createdFrom" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"tranDate" => "dateTime",
		"postingPeriod" => "RecordRef",
		"memo" => "string",
		"subsidiary" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"revision" => "RecordRef",
		"startOperation" => "RecordRef",
		"endOperation" => "RecordRef",
		"completedQuantity" => "float",
		"manufacturingRouting" => "RecordRef",
		"componentList" => "WorkOrderCompletionComponentList",
		"operationList" => "WorkOrderCompletionOperationList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
