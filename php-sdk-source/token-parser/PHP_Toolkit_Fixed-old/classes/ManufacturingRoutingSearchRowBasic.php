<?php

class ManufacturingRoutingSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $autoCalculateLag;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefault;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $lagAmount;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $lagType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $lagUnits;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $manufacturingCostTemplate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $manufacturingWorkCenter;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $operationName;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $operationYield;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $runRate;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $sequence;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $setupTime;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"autoCalculateLag" => "SearchColumnBooleanField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isDefault" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"item" => "SearchColumnSelectField[]",
		"lagAmount" => "SearchColumnDoubleField[]",
		"lagType" => "SearchColumnEnumSelectField[]",
		"lagUnits" => "SearchColumnStringField[]",
		"location" => "SearchColumnSelectField[]",
		"manufacturingCostTemplate" => "SearchColumnSelectField[]",
		"manufacturingWorkCenter" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"operationName" => "SearchColumnStringField[]",
		"operationYield" => "SearchColumnDoubleField[]",
		"runRate" => "SearchColumnDoubleField[]",
		"sequence" => "SearchColumnLongField[]",
		"setupTime" => "SearchColumnDoubleField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
