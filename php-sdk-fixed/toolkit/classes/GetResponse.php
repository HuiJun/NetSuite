<?php

class GetResponse {
	/**
	 * @access public
	 * @var ReadResponse
	 */
	public $readResponse;

	static $paramtypesmap = array(
		"readResponse" => "ReadResponse",
	);
    public static function create()
    {
        return new static();
    }
}
