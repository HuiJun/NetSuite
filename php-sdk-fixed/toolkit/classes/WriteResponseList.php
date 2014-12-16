<?php

class WriteResponseList {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var WriteResponse[]
	 */
	public $writeResponse;

	static $paramtypesmap = array(
		"status" => "Status",
		"writeResponse" => "WriteResponse[]",
	);
    public static function create()
    {
        return new static();
    }
}
