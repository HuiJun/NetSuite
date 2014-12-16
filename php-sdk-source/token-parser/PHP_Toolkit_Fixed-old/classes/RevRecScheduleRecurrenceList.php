<?php

class RevRecScheduleRecurrenceList {
	/**
	 * @access public
	 * @var RevRecScheduleRecurrence[]
	 */
	public $revRecScheduleRecurrence;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"revRecScheduleRecurrence" => "RevRecScheduleRecurrence[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
