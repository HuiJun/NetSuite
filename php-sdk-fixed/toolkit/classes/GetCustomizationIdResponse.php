<?php

class GetCustomizationIdResponse {
	/**
	 * @access public
	 * @var GetCustomizationIdResult
	 */
	public $getCustomizationIdResult;

	static $paramtypesmap = array(
		"getCustomizationIdResult" => "GetCustomizationIdResult",
	);
    public static function create()
    {
        return new static();
    }
}
