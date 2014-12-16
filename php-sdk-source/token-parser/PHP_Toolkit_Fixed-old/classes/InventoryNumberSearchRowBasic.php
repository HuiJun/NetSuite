<?php

class InventoryNumberSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $expirationDate;
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
	 * @var SearchColumnStringField[]
	 */
	public $inventoryNumber;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isonhand;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
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
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityavailable;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityintransit;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityonhand;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityonorder;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"expirationDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"inventoryNumber" => "SearchColumnStringField[]",
		"isonhand" => "SearchColumnBooleanField[]",
		"item" => "SearchColumnSelectField[]",
		"location" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"quantityavailable" => "SearchColumnDoubleField[]",
		"quantityintransit" => "SearchColumnDoubleField[]",
		"quantityonhand" => "SearchColumnDoubleField[]",
		"quantityonorder" => "SearchColumnDoubleField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
