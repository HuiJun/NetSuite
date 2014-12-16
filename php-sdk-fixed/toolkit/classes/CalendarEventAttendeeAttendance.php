<?php

class CalendarEventAttendeeAttendance {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _optional = "_optional";
	/**
	 * @var string
	 */
	const _required = "_required";
    public static function create()
    {
        return new static();
    }
}
