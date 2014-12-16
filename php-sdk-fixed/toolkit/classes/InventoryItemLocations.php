<?php

class InventoryItemLocations {
	/**
	 * @access public
	 * @var string
	 */
	public $location;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var float
	 */
	public $onHandValueMli;
	/**
	 * @access public
	 * @var float
	 */
	public $averageCostMli;
	/**
	 * @access public
	 * @var float
	 */
	public $lastPurchasePriceMli;
	/**
	 * @access public
	 * @var float
	 */
	public $reorderPoint;
	/**
	 * @access public
	 * @var float
	 */
	public $preferredStockLevel;
	/**
	 * @access public
	 * @var integer
	 */
	public $leadTime;
	/**
	 * @access public
	 * @var float
	 */
	public $defaultReturnCost;
	/**
	 * @access public
	 * @var float
	 */
	public $safetyStockLevel;
	/**
	 * @access public
	 * @var float
	 */
	public $cost;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $inventoryCostTemplate;
	/**
	 * @access public
	 * @var float
	 */
	public $buildTime;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastInvtCountDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $nextInvtCountDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isWip;
	/**
	 * @access public
	 * @var integer
	 */
	public $invtCountInterval;
	/**
	 * @access public
	 * @var ItemInvtClassification
	 */
	public $invtClassification;
	/**
	 * @access public
	 * @var float
	 */
	public $costingLotSize;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnOrder;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityCommitted;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityBackOrdered;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $locationId;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $supplyReplenishmentMethod;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $alternateDemandSourceItem;
	/**
	 * @access public
	 * @var float
	 */
	public $fixedLotSize;
	/**
	 * @access public
	 * @var PeriodicLotSizeType
	 */
	public $periodicLotSizeType;
	/**
	 * @access public
	 * @var integer
	 */
	public $periodicLotSizeDays;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $supplyType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $supplyLotSizingMethod;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $demandSource;
	/**
	 * @access public
	 * @var integer
	 */
	public $backwardConsumptionDays;
	/**
	 * @access public
	 * @var integer
	 */
	public $forwardConsumptionDays;
	/**
	 * @access public
	 * @var integer
	 */
	public $demandTimeFence;
	/**
	 * @access public
	 * @var integer
	 */
	public $supplyTimeFence;
	/**
	 * @access public
	 * @var integer
	 */
	public $rescheduleInDays;
	/**
	 * @access public
	 * @var integer
	 */
	public $rescheduleOutDays;

	static $paramtypesmap = array(
		"location" => "string",
		"quantityOnHand" => "float",
		"onHandValueMli" => "float",
		"averageCostMli" => "float",
		"lastPurchasePriceMli" => "float",
		"reorderPoint" => "float",
		"preferredStockLevel" => "float",
		"leadTime" => "integer",
		"defaultReturnCost" => "float",
		"safetyStockLevel" => "float",
		"cost" => "float",
		"inventoryCostTemplate" => "RecordRef",
		"buildTime" => "float",
		"lastInvtCountDate" => "dateTime",
		"nextInvtCountDate" => "dateTime",
		"isWip" => "boolean",
		"invtCountInterval" => "integer",
		"invtClassification" => "ItemInvtClassification",
		"costingLotSize" => "float",
		"quantityOnOrder" => "float",
		"quantityCommitted" => "float",
		"quantityAvailable" => "float",
		"quantityBackOrdered" => "float",
		"locationId" => "RecordRef",
		"supplyReplenishmentMethod" => "RecordRef",
		"alternateDemandSourceItem" => "RecordRef",
		"fixedLotSize" => "float",
		"periodicLotSizeType" => "PeriodicLotSizeType",
		"periodicLotSizeDays" => "integer",
		"supplyType" => "RecordRef",
		"supplyLotSizingMethod" => "RecordRef",
		"demandSource" => "RecordRef",
		"backwardConsumptionDays" => "integer",
		"forwardConsumptionDays" => "integer",
		"demandTimeFence" => "integer",
		"supplyTimeFence" => "integer",
		"rescheduleInDays" => "integer",
		"rescheduleOutDays" => "integer",
	);
    public static function create()
    {
        return new static();
    }
}
