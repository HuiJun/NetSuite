<?php

class GetSavedSearchRequest {
	/**
	 * @access public
	 * @var GetSavedSearchRecord
	 */
	public $record;

	static $paramtypesmap = array(
		"record" => "GetSavedSearchRecord",
	);
    public static function create()
    {
        return new static();
    }
}
