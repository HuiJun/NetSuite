<?php

class MapSsoResponse {
	/**
	 * @access public
	 * @var SessionResponse
	 */
	public $sessionResponse;

	static $paramtypesmap = array(
		"sessionResponse" => "SessionResponse",
	);
    public static function create()
    {
        return new static();
    }
}
