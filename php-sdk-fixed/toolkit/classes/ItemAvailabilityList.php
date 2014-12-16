<?php

class ItemAvailabilityList {
	/**
	 * @access public
	 * @var ItemAvailability[]
	 */
	public $itemAvailability;

	static $paramtypesmap = array(
		"itemAvailability" => "ItemAvailability[]",
	);
    public static function create()
    {
        return new static();
    }
}
