<?php

class ProjectTaskAssignmentSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $actualWork;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $cost;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costBase;
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
	 * @var SearchDoubleField
	 */
	public $estimatedWorkBaseline;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $grossProfit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $grossProfitBase;
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
	 * @var SearchDoubleField
	 */
	public $price;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $priceBase;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $resource;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $resourceName;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $serviceItem;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $serviceItemDesc;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unitCost;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unitCostBase;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unitPrice;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unitPriceBase;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $units;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $workCalendar;

	static $paramtypesmap = array(
		"actualWork" => "SearchDoubleField",
		"cost" => "SearchDoubleField",
		"costBase" => "SearchDoubleField",
		"endDate" => "SearchDateField",
		"estimatedWork" => "SearchDoubleField",
		"estimatedWorkBaseline" => "SearchDoubleField",
		"grossProfit" => "SearchDoubleField",
		"grossProfitBase" => "SearchDoubleField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"price" => "SearchDoubleField",
		"priceBase" => "SearchDoubleField",
		"resource" => "SearchMultiSelectField",
		"resourceName" => "SearchStringField",
		"serviceItem" => "SearchStringField",
		"serviceItemDesc" => "SearchStringField",
		"startDate" => "SearchDateField",
		"unitCost" => "SearchDoubleField",
		"unitCostBase" => "SearchDoubleField",
		"unitPrice" => "SearchDoubleField",
		"unitPriceBase" => "SearchDoubleField",
		"units" => "SearchDoubleField",
		"workCalendar" => "SearchMultiSelectField",
	);
    public static function create()
    {
        return new static();
    }
}
