<?php

class DeleteListResponse {
	/**
	 * @access public
	 * @var WriteResponseList
	 */
	public $writeResponseList;

	static $paramtypesmap = array(
		"writeResponseList" => "WriteResponseList",
	);
    public static function create()
    {
        return new static();
    }
}
