<?php

class InventoryAdjustmentInventoryList {
	/**
	 * @access public
	 * @var InventoryAdjustmentInventory[]
	 */
	public $inventory;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"inventory" => "InventoryAdjustmentInventory[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
