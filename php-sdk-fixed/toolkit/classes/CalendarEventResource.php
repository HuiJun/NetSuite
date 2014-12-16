<?php

class CalendarEventResource {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $resource;
	/**
	 * @access public
	 * @var string
	 */
	public $location;

	static $paramtypesmap = array(
		"resource" => "RecordRef",
		"location" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
