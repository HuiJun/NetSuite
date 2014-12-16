<?php

class BinTransferInventoryList {
	/**
	 * @access public
	 * @var BinTransferInventory[]
	 */
	public $inventory;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"inventory" => "BinTransferInventory[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
