<?php

class AsyncAddListRequest {
	/**
	 * @access public
	 * @var Record[]
	 */
	public $record;

	static $paramtypesmap = array(
		"record" => "Record[]",
	);
    public static function create()
    {
        return new static();
    }
}
