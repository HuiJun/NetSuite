<?php

class InventoryNumberLocationsList {
	/**
	 * @access public
	 * @var InventoryNumberLocations[]
	 */
	public $locations;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"locations" => "InventoryNumberLocations[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
