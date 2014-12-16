<?php

class ItemSupplyPlanOrder {
	/**
	 * @access public
	 * @var integer
	 */
	public $orderLineId;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $orderDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $receiptDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $sourceLocation;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var boolean
	 */
	public $orderCreated;
	/**
	 * @access public
	 * @var ItemSupplyPlanOrderType
	 */
	public $orderType;

	static $paramtypesmap = array(
		"orderLineId" => "integer",
		"orderDate" => "dateTime",
		"receiptDate" => "dateTime",
		"sourceLocation" => "RecordRef",
		"quantity" => "float",
		"orderCreated" => "boolean",
		"orderType" => "ItemSupplyPlanOrderType",
	);
    public static function create()
    {
        return new static();
    }
}
