<?php

class DoubleCustomFieldRef extends CustomFieldRef {
	/**
	 * @access public
	 * @var float
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
