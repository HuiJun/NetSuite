<?php

class GetDeletedRequest {
	/**
	 * @access public
	 * @var GetDeletedFilter
	 */
	public $getDeletedFilter;

	static $paramtypesmap = array(
		"getDeletedFilter" => "GetDeletedFilter",
	);
    public static function create()
    {
        return new static();
    }
}
