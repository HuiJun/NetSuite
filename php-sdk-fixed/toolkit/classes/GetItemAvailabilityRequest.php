<?php

class GetItemAvailabilityRequest {
	/**
	 * @access public
	 * @var ItemAvailabilityFilter
	 */
	public $itemAvailabilityFilter;

	static $paramtypesmap = array(
		"itemAvailabilityFilter" => "ItemAvailabilityFilter",
	);
    public static function create()
    {
        return new static();
    }
}
