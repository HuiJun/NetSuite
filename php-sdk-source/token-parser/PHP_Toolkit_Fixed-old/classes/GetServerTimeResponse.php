<?php

class GetServerTimeResponse {
	/**
	 * @access public
	 * @var GetServerTimeResult
	 */
	public $getServerTimeResult;

	static $paramtypesmap = array(
		"getServerTimeResult" => "GetServerTimeResult",
	);
    public static function create()
    {
        return new static();
    }
}
