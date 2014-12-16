<?php

class AsyncAddListResult extends AsyncResult {
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
