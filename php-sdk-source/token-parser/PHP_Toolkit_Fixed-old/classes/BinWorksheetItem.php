<?php

class BinWorksheetItem {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
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
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var string
	 */
	public $itemOnHand;
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
	public $itemBins;
	/**
	 * @access public
	 * @var string
	 */
	public $itemBinNumbers;
	/**
	 * @access public
	 * @var string
	 */
	public $itemBinList;
	/**
	 * @access public
	 * @var string
	 */
	public $itemPreferBin;
	/**
	 * @access public
	 * @var string
	 */
	public $itemBlank;

	static $paramtypesmap = array(
		"item" => "RecordRef",
		"itemName" => "string",
		"description" => "string",
		"quantity" => "float",
		"itemOnHand" => "string",
		"itemUnitsLabel" => "string",
		"inventoryDetail" => "InventoryDetail",
		"itemBins" => "string",
		"itemBinNumbers" => "string",
		"itemBinList" => "string",
		"itemPreferBin" => "string",
		"itemBlank" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
