<?php

class CustomizationType {
	/**
	 * @access public
	 * @var GetCustomizationType
	 */
	public $getCustomizationType;

	static $paramtypesmap = array(
		"getCustomizationType" => "GetCustomizationType",
	);
    public static function create()
    {
        return new static();
    }
}
