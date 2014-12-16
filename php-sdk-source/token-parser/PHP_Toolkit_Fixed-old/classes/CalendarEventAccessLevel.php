<?php

class CalendarEventAccessLevel {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _private = "_private";
	/**
	 * @var string
	 */
	const _public = "_public";
	/**
	 * @var string
	 */
	const _showAsBusy = "_showAsBusy";
    public static function create()
    {
        return new static();
    }
}
