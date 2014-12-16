<?php

class InventoryTransferInventory {
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
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $units;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var float
	 */
	public $adjustQtyBy;
	/**
	 * @access public
	 * @var string
	 */
	public $serialNumbers;
	/**
	 * @access public
	 * @var string
	 */
	public $fromBinNumbers;
	/**
	 * @access public
	 * @var string
	 */
	public $toBinNumbers;
	/**
	 * @access public
	 * @var InventoryDetail
	 */
	public $inventoryDetail;

	static $paramtypesmap = array(
		"line" => "integer",
		"item" => "RecordRef",
		"description" => "string",
		"units" => "RecordRef",
		"quantityOnHand" => "float",
		"adjustQtyBy" => "float",
		"serialNumbers" => "string",
		"fromBinNumbers" => "string",
		"toBinNumbers" => "string",
		"inventoryDetail" => "InventoryDetail",
	);
    public static function create()
    {
        return new static();
    }
}
