<?php

class ItemDemandPlanSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $alternateSourceItem;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $analysisDuration;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $demandDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $projectionDuration;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $projectionInterval;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $projectionMethod;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $projectionStartDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantity;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityUom;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $units;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"alternateSourceItem" => "SearchColumnSelectField[]",
		"analysisDuration" => "SearchColumnLongField[]",
		"demandDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"item" => "SearchColumnSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"location" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"projectionDuration" => "SearchColumnLongField[]",
		"projectionInterval" => "SearchColumnStringField[]",
		"projectionMethod" => "SearchColumnStringField[]",
		"projectionStartDate" => "SearchColumnDateField[]",
		"quantity" => "SearchColumnDoubleField[]",
		"quantityUom" => "SearchColumnDoubleField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"units" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
