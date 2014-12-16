<?php

class SerializedInventoryItemLocationsList {
	/**
	 * @access public
	 * @var SerializedInventoryItemLocations[]
	 */
	public $locations;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"locations" => "SerializedInventoryItemLocations[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
