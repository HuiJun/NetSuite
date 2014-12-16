<?php

class BooleanCustomFieldRef extends CustomFieldRef {
	/**
	 * @access public
	 * @var boolean
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
