<?php

class GetAllRequest {
	/**
	 * @access public
	 * @var GetAllRecord
	 */
	public $record;

	static $paramtypesmap = array(
		"record" => "GetAllRecord",
	);
    public static function create()
    {
        return new static();
    }
}
