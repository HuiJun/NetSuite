<?php

class TransferOrderItem {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityBackOrdered;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityCommitted;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityFulfilled;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityPacked;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityPicked;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityReceived;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var float
	 */
	public $rate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $units;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var InventoryDetail
	 */
	public $inventoryDetail;
	/**
	 * @access public
	 * @var string
	 */
	public $serialNumbers;
	/**
	 * @access public
	 * @var TransferOrderItemCommitInventory
	 */
	public $commitInventory;
	/**
	 * @access public
	 * @var float
	 */
	public $orderPriority;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $options;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isClosed;
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
	 * @var float
	 */
	public $lastPurchasePrice;
	/**
	 * @access public
	 * @var float
	 */
	public $averageCost;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expectedShipDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expectedReceiptDate;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"item" => "RecordRef",
		"line" => "integer",
		"quantityAvailable" => "float",
		"quantityOnHand" => "float",
		"quantityBackOrdered" => "float",
		"quantityCommitted" => "float",
		"quantityFulfilled" => "float",
		"quantityPacked" => "float",
		"quantityPicked" => "float",
		"quantityReceived" => "float",
		"quantity" => "float",
		"rate" => "float",
		"units" => "RecordRef",
		"amount" => "float",
		"description" => "string",
		"inventoryDetail" => "InventoryDetail",
		"serialNumbers" => "string",
		"commitInventory" => "TransferOrderItemCommitInventory",
		"orderPriority" => "float",
		"options" => "CustomFieldList",
		"isClosed" => "boolean",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"lastPurchasePrice" => "float",
		"averageCost" => "float",
		"expectedShipDate" => "dateTime",
		"expectedReceiptDate" => "dateTime",
		"customFieldList" => "CustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
