<?php

class CalendarEventStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _canceled = "_canceled";
	/**
	 * @var string
	 */
	const _completed = "_completed";
	/**
	 * @var string
	 */
	const _confirmed = "_confirmed";
	/**
	 * @var string
	 */
	const _tentative = "_tentative";
    public static function create()
    {
        return new static();
    }
}
