<?php

class StringCustomFieldRef extends CustomFieldRef {
	/**
	 * @access public
	 * @var string
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
