<?php

class ItemDemandPlanSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $alternateSourceItem;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $analysisDuration;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $demandDate;
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
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $projectionDuration;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $projectionInterval;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $projectionMethod;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $projectionStartDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantity;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $units;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"alternateSourceItem" => "SearchMultiSelectField",
		"analysisDuration" => "SearchLongField",
		"demandDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"projectionDuration" => "SearchLongField",
		"projectionInterval" => "SearchMultiSelectField",
		"projectionMethod" => "SearchEnumMultiSelectField",
		"projectionStartDate" => "SearchDateField",
		"quantity" => "SearchDoubleField",
		"subsidiary" => "SearchMultiSelectField",
		"units" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
