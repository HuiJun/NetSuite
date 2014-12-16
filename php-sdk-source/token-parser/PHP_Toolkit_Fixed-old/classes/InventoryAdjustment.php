<?php

class InventoryAdjustment extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var float
	 */
	public $estimatedTotalValue;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customer;
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
	public $adjLocation;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var InventoryAdjustmentInventoryList
	 */
	public $inventoryList;
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
		"postingPeriod" => "RecordRef",
		"tranDate" => "dateTime",
		"createdDate" => "dateTime",
		"tranId" => "string",
		"lastModifiedDate" => "dateTime",
		"subsidiary" => "RecordRef",
		"account" => "RecordRef",
		"customForm" => "RecordRef",
		"estimatedTotalValue" => "float",
		"customer" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"adjLocation" => "RecordRef",
		"location" => "RecordRef",
		"memo" => "string",
		"inventoryList" => "InventoryAdjustmentInventoryList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
