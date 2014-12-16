<?php

class SerializedInventoryItemNumbers {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $serialNumber;

	static $paramtypesmap = array(
		"serialNumber" => "RecordRef",
	);
    public static function create()
    {
        return new static();
    }
}
