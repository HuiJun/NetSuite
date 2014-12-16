<?php

class CustomFieldList {
	/**
	 * @access public
	 * @var CustomFieldRef[]
	 */
	public $customField;

	static $paramtypesmap = array(
		"customField" => "CustomFieldRef[]",
	);
    public static function create()
    {
        return new static();
    }
}
