<?php

class InventoryNumber extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $inventoryNumber;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var string
	 */
	public $status;
	/**
	 * @access public
	 * @var string
	 */
	public $units;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expirationDate;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var InventoryNumberLocationsList
	 */
	public $locationsList;
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
		"inventoryNumber" => "string",
		"item" => "RecordRef",
		"status" => "string",
		"units" => "string",
		"expirationDate" => "dateTime",
		"memo" => "string",
		"locationsList" => "InventoryNumberLocationsList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
