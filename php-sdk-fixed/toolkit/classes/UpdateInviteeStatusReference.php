<?php

class UpdateInviteeStatusReference {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $eventId;
	/**
	 * @access public
	 * @var CalendarEventAttendeeResponse
	 */
	public $responseCode;

	static $paramtypesmap = array(
		"eventId" => "RecordRef",
		"responseCode" => "CalendarEventAttendeeResponse",
	);
    public static function create()
    {
        return new static();
    }
}
