<?php

class ItemFulfillmentItem {
	/**
	 * @access public
	 * @var string
	 */
	public $jobName;
	/**
	 * @access public
	 * @var boolean
	 */
	public $itemReceive;
	/**
	 * @access public
	 * @var string
	 */
	public $itemName;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var float
	 */
	public $onHand;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var string
	 */
	public $unitsDisplay;
	/**
	 * @access public
	 * @var string
	 */
	public $createPo;
	/**
	 * @access public
	 * @var InventoryDetail
	 */
	public $inventoryDetail;
	/**
	 * @access public
	 * @var string
	 */
	public $binNumbers;
	/**
	 * @access public
	 * @var string
	 */
	public $serialNumbers;
	/**
	 * @access public
	 * @var string
	 */
	public $poNum;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var integer
	 */
	public $orderLine;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityRemaining;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $options;
	/**
	 * @access public
	 * @var integer
	 */
	public $shipGroup;
	/**
	 * @access public
	 * @var boolean
	 */
	public $itemIsFulfilled;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shipAddress;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shipMethod;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"jobName" => "string",
		"itemReceive" => "boolean",
		"itemName" => "string",
		"description" => "string",
		"location" => "RecordRef",
		"onHand" => "float",
		"quantity" => "float",
		"unitsDisplay" => "string",
		"createPo" => "string",
		"inventoryDetail" => "InventoryDetail",
		"binNumbers" => "string",
		"serialNumbers" => "string",
		"poNum" => "string",
		"item" => "RecordRef",
		"orderLine" => "integer",
		"quantityRemaining" => "float",
		"options" => "CustomFieldList",
		"shipGroup" => "integer",
		"itemIsFulfilled" => "boolean",
		"shipAddress" => "RecordRef",
		"shipMethod" => "RecordRef",
		"customFieldList" => "CustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
