<?php

class CustomFieldType extends Record {
	/**
	 * @access public
	 * @var CustomizationFieldType
	 */
	public $fieldType;
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"fieldType" => "CustomizationFieldType",
		"scriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
