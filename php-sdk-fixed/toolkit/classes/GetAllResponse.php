<?php

class GetAllResponse {
	/**
	 * @access public
	 * @var GetAllResult
	 */
	public $getAllResult;

	static $paramtypesmap = array(
		"getAllResult" => "GetAllResult",
	);
    public static function create()
    {
        return new static();
    }
}
