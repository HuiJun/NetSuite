<?php

class SerializedInventoryItemNumbersList {
	/**
	 * @access public
	 * @var SerializedInventoryItemNumbers[]
	 */
	public $numbers;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"numbers" => "SerializedInventoryItemNumbers[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
