<?php

class ManufacturingRoutingSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $autoCalculateLag;
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
	 * @var SearchBooleanField
	 */
	public $isDefault;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
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
	 * @var SearchMultiSelectField
	 */
	public $location;
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
	public $memo;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $operationName;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $operationYield;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $runRate;
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
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"autoCalculateLag" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDefault" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"subsidiary" => "SearchMultiSelectField",
		"item" => "SearchMultiSelectField",
		"lagAmount" => "SearchDoubleField",
		"lagType" => "SearchEnumMultiSelectField",
		"lagUnits" => "SearchStringField",
		"location" => "SearchMultiSelectField",
		"manufacturingCostTemplate" => "SearchMultiSelectField",
		"manufacturingWorkCenter" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"name" => "SearchStringField",
		"operationName" => "SearchStringField",
		"operationYield" => "SearchDoubleField",
		"runRate" => "SearchDoubleField",
		"sequence" => "SearchLongField",
		"setupTime" => "SearchDoubleField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
