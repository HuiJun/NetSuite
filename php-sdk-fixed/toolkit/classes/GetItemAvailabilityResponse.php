<?php

class GetItemAvailabilityResponse {
	/**
	 * @access public
	 * @var GetItemAvailabilityResult
	 */
	public $getItemAvailabilityResult;

	static $paramtypesmap = array(
		"getItemAvailabilityResult" => "GetItemAvailabilityResult",
	);
    public static function create()
    {
        return new static();
    }
}
