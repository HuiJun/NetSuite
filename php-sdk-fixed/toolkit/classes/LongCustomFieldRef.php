<?php

class LongCustomFieldRef extends CustomFieldRef {
	/**
	 * @access public
	 * @var integer
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "integer",
	);
    public static function create()
    {
        return new static();
    }
}
