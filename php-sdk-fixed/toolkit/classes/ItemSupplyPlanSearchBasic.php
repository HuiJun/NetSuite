<?php

class ItemSupplyPlanSearchBasic extends SearchRecordBasic {
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
	 * @var SearchBooleanField
	 */
	public $orderCreated;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $orderDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $orderType;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantity;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $receiptDate;
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
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"orderCreated" => "SearchBooleanField",
		"orderDate" => "SearchDateField",
		"orderType" => "SearchMultiSelectField",
		"quantity" => "SearchDoubleField",
		"receiptDate" => "SearchDateField",
		"subsidiary" => "SearchMultiSelectField",
		"units" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
