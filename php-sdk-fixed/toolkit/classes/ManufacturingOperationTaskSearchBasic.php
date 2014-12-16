<?php

class ManufacturingOperationTaskSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $actualRunTime;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $actualSetupTime;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $completedQuantity;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedWork;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $id;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $inputQuantity;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $laborResources;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $lagAmount;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $lagType;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $lagUnits;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $machineResources;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $manufacturingCostTemplate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $manufacturingWorkCenter;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $order;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $predecessor;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $remainingQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $runRate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $runTime;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $sequence;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $setupTime;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $workOrder;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"actualRunTime" => "SearchDoubleField",
		"actualSetupTime" => "SearchDoubleField",
		"completedQuantity" => "SearchDoubleField",
		"endDate" => "SearchDateField",
		"estimatedWork" => "SearchDoubleField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"id" => "SearchLongField",
		"inputQuantity" => "SearchDoubleField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"laborResources" => "SearchLongField",
		"lagAmount" => "SearchDoubleField",
		"lagType" => "SearchEnumMultiSelectField",
		"lagUnits" => "SearchStringField",
		"machineResources" => "SearchLongField",
		"manufacturingCostTemplate" => "SearchMultiSelectField",
		"manufacturingWorkCenter" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"order" => "SearchDoubleField",
		"predecessor" => "SearchMultiSelectField",
		"remainingQuantity" => "SearchDoubleField",
		"runRate" => "SearchDoubleField",
		"runTime" => "SearchDoubleField",
		"sequence" => "SearchLongField",
		"setupTime" => "SearchDoubleField",
		"startDate" => "SearchDateField",
		"status" => "SearchMultiSelectField",
		"workOrder" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
