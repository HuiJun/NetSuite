<?php

class WorkOrderItem {
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var float
	 */
	public $componentYield;
	/**
	 * @access public
	 * @var float
	 */
	public $bomQuantity;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityCommitted;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityBackOrdered;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var float
	 */
	public $averageCost;
	/**
	 * @access public
	 * @var float
	 */
	public $lastPurchasePrice;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $units;
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
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $poVendor;
	/**
	 * @access public
	 * @var float
	 */
	public $poRate;
	/**
	 * @access public
	 * @var float
	 */
	public $percentComplete;
	/**
	 * @access public
	 * @var float
	 */
	public $contribution;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var WorkOrderItemItemCommitInventory
	 */
	public $commit;
	/**
	 * @access public
	 * @var WorkOrderItemItemCreatePo
	 */
	public $createPo;
	/**
	 * @access public
	 * @var boolean
	 */
	public $createWo;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"line" => "integer",
		"item" => "RecordRef",
		"componentYield" => "float",
		"bomQuantity" => "float",
		"quantityCommitted" => "float",
		"quantityBackOrdered" => "float",
		"quantityAvailable" => "float",
		"averageCost" => "float",
		"lastPurchasePrice" => "float",
		"quantityOnHand" => "float",
		"quantity" => "float",
		"units" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"serialNumbers" => "string",
		"orderPriority" => "float",
		"options" => "CustomFieldList",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"poVendor" => "RecordRef",
		"poRate" => "float",
		"percentComplete" => "float",
		"contribution" => "float",
		"description" => "string",
		"commit" => "WorkOrderItemItemCommitInventory",
		"createPo" => "WorkOrderItemItemCreatePo",
		"createWo" => "boolean",
		"customFieldList" => "CustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
