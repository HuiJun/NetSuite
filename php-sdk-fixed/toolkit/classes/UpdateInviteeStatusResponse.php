<?php

class UpdateInviteeStatusResponse {
	/**
	 * @access public
	 * @var WriteResponse
	 */
	public $writeResponse;

	static $paramtypesmap = array(
		"writeResponse" => "WriteResponse",
	);
    public static function create()
    {
        return new static();
    }
}
