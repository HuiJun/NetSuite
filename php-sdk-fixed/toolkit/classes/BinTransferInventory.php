<?php

class BinTransferInventory {
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
	 * @var string
	 */
	public $preferredBin;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var string
	 */
	public $itemUnitsLabel;
	/**
	 * @access public
	 * @var InventoryDetail
	 */
	public $inventoryDetail;
	/**
	 * @access public
	 * @var string
	 */
	public $fromBins;
	/**
	 * @access public
	 * @var string
	 */
	public $toBins;

	static $paramtypesmap = array(
		"line" => "integer",
		"item" => "RecordRef",
		"description" => "string",
		"preferredBin" => "string",
		"quantity" => "float",
		"itemUnitsLabel" => "string",
		"inventoryDetail" => "InventoryDetail",
		"fromBins" => "string",
		"toBins" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
