<?php

class getSelectValueResponse {
	/**
	 * @access public
	 * @var GetSelectValueResult
	 */
	public $getSelectValueResult;

	static $paramtypesmap = array(
		"getSelectValueResult" => "GetSelectValueResult",
	);
    public static function create()
    {
        return new static();
    }
}
