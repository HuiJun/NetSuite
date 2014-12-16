<?php

class ItemReceiptItem {
	/**
	 * @access public
	 * @var boolean
	 */
	public $itemReceive;
	/**
	 * @access public
	 * @var string
	 */
	public $jobName;
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
	 * @var integer
	 */
	public $line;
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
	public $quantityRemaining;
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
	 * @var float
	 */
	public $unitCostOverride;
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
	 * @var string
	 */
	public $binNumbers;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expirationDate;
	/**
	 * @access public
	 * @var string
	 */
	public $rate;
	/**
	 * @access public
	 * @var string
	 */
	public $currency;
	/**
	 * @access public
	 * @var boolean
	 */
	public $restock;
	/**
	 * @access public
	 * @var TransactionBillVarianceStatus
	 */
	public $billVarianceStatus;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isDropShipment;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $options;
	/**
	 * @access public
	 * @var LandedCost
	 */
	public $landedCost;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"itemReceive" => "boolean",
		"jobName" => "string",
		"item" => "RecordRef",
		"orderLine" => "integer",
		"line" => "integer",
		"itemName" => "string",
		"description" => "string",
		"location" => "RecordRef",
		"onHand" => "float",
		"quantityRemaining" => "float",
		"quantity" => "float",
		"unitsDisplay" => "string",
		"unitCostOverride" => "float",
		"inventoryDetail" => "InventoryDetail",
		"serialNumbers" => "string",
		"binNumbers" => "string",
		"expirationDate" => "dateTime",
		"rate" => "string",
		"currency" => "string",
		"restock" => "boolean",
		"billVarianceStatus" => "TransactionBillVarianceStatus",
		"isDropShipment" => "boolean",
		"options" => "CustomFieldList",
		"landedCost" => "LandedCost",
		"customFieldList" => "CustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
