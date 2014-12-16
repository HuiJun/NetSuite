<?php

class InitializeRequest {
	/**
	 * @access public
	 * @var InitializeRecord
	 */
	public $initializeRecord;

	static $paramtypesmap = array(
		"initializeRecord" => "InitializeRecord",
	);
    public static function create()
    {
        return new static();
    }
}
