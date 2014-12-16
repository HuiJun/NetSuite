<?php

class CustomizationRefList {
	/**
	 * @access public
	 * @var CustomizationRef[]
	 */
	public $customizationRef;

	static $paramtypesmap = array(
		"customizationRef" => "CustomizationRef[]",
	);
    public static function create()
    {
        return new static();
    }
}
