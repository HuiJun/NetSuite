<?php

class AddListRequest {
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
