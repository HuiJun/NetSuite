<?php

class CalendarEventAttendeeResponse {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _accepted = "_accepted";
	/**
	 * @var string
	 */
	const _declined = "_declined";
	/**
	 * @var string
	 */
	const _noResponse = "_noResponse";
	/**
	 * @var string
	 */
	const _tentative = "_tentative";
    public static function create()
    {
        return new static();
    }
}
