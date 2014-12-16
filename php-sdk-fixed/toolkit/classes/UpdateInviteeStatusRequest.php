<?php

class UpdateInviteeStatusRequest {
	/**
	 * @access public
	 * @var UpdateInviteeStatusReference
	 */
	public $updateInviteeStatusReference;

	static $paramtypesmap = array(
		"updateInviteeStatusReference" => "UpdateInviteeStatusReference",
	);
    public static function create()
    {
        return new static();
    }
}
