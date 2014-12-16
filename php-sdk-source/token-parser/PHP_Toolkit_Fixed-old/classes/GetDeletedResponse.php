<?php

class GetDeletedResponse {
	/**
	 * @access public
	 * @var GetDeletedResult
	 */
	public $getDeletedResult;

	static $paramtypesmap = array(
		"getDeletedResult" => "GetDeletedResult",
	);
    public static function create()
    {
        return new static();
    }
}
