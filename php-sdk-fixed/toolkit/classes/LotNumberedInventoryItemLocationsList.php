<?php

class LotNumberedInventoryItemLocationsList {
	/**
	 * @access public
	 * @var LotNumberedInventoryItemLocations[]
	 */
	public $locations;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"locations" => "LotNumberedInventoryItemLocations[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
