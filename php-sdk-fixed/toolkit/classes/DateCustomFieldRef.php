<?php

class DateCustomFieldRef extends CustomFieldRef {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "dateTime",
	);
    public static function create()
    {
        return new static();
    }
}
