<?php

class InventoryNumberSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $expirationDate;
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
	 * @var SearchStringField
	 */
	public $inventoryNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isOnHand;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
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
	 * @var SearchDoubleField
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityInTransit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityOnOrder;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"expirationDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"inventoryNumber" => "SearchStringField",
		"isOnHand" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"quantityAvailable" => "SearchDoubleField",
		"quantityInTransit" => "SearchDoubleField",
		"quantityOnHand" => "SearchDoubleField",
		"quantityOnOrder" => "SearchDoubleField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
