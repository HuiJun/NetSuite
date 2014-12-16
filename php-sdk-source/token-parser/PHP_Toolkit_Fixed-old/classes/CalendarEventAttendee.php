<?php

class CalendarEventAttendee {
	/**
	 * @access public
	 * @var boolean
	 */
	public $sendEmail;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $attendee;
	/**
	 * @access public
	 * @var CalendarEventAttendeeResponse
	 */
	public $response;
	/**
	 * @access public
	 * @var CalendarEventAttendeeAttendance
	 */
	public $attendance;

	static $paramtypesmap = array(
		"sendEmail" => "boolean",
		"attendee" => "RecordRef",
		"response" => "CalendarEventAttendeeResponse",
		"attendance" => "CalendarEventAttendeeAttendance",
	);
    public static function create()
    {
        return new static();
    }
}
